    class Autor{
        require_once('bd.php');
        
        public $id=0;
        public $nombre;
        public $apellidos;
        protected static $pdo;
        
        public function getNombre(){
            return $this->nombre;
        }
        public function getApellidos(){
            return $this->apellidos;
        }
        
        public function setNombre($nombre){
            $this->nombre=$nombre;
        }
        public function setApellidos($apellidos){
            $this->apellido=$apellidos;
        }
        public function getNombreCompleto(){
            return $this->nombre." ".$this->apellidos;
        }
        
        //Inyeccion de dependencias
        //public static inicializar($pdo){
          //  self::$pdo=$pdo;
        //}
        
        public function guardar(){
            global $pdo;
            if($this->id==0){
                $this->agregar();
            }else{
                $this->modificar();
            }
        }
        
        private function agregar(){
            $sql="insert into autor values(0,:nombre,:apellidos)";
            $statement=self::$pdo->prepare($sql);
            $statement->bindValue(":nombre",$this->nombre,PDO::PARAM_STR);
            $statement->bindValue(":apellidos",$this->apellidos,PDO::PARAM_STR);
            $statement->execute(); 
            //$this->id=self::$pdo->lastInsertID();
        }
        
            $sql="update autor set nombre=:nombre,
            apellidos=:apellidos where id=:id";
            $statement->bindValue(":id",$this->id);
        private function modificar(){
        }

	
	public static function buscarPorNombre($nombre){
	    $sql="SELECT * FROM autor WHERE nombre like :nombre";
	    $statement=self::pdo->prepare($sql);
            $statement->bindValue(" :nombre","%$nombre%");
            $statement->execute();
            $autores=array();
            while($fila=$statement->fetch(PDO::FETCH_ASSOC){
                $autor=new Autor();
                $autor->id=$fila['id'];
                $autor->nombre=$fila['nombre'];
                $autor->apellidos=$fila['apellidos'];
                $autores[]=$autor;
                return $autores;
            }
	}
	
	public static function buscarPorAutor($autor){
	    $sql="SELECT libro.*,editorial.nombre FROM libro,editorial WHERE autorId=:autorId AND 			libro.editorialId=editorial.id";
	    $statement=self::pdo->prepare($sql);
            $statement->bindValue(" :autorId","%$autorId%");
            $statement->execute();
        
            $libro=new Libro();
            $libro->id=$fila['id'];
            $libro->autor->id=$fila['autorId'];
            $libro->editorial->id=$fila['editorialId'];
            $libros[]=$libro;
	}

    }
    
    //Autor::inicializar($pdo);
