   class Libro{
        require_once('bd.php');
        
        public $id;
        protected static $pdo;
  
	public function __construct(){
	    $this->autor=new Autor();
	    $this->editorial=new Editorial();
	}
        
        //Inyeccion de dependencias
        //public static inicializar($pdo){
          //  self::$pdo=$pdo;
        //}
        
        public function guardar(){           
            if($this->id==0){
                $this->agregar();
            }else{
                $this->modificar();
            }
        }
        
        private function agregar(){
            $sql="insert into libro values(0,:autorId,:editorialId)";
            $statement=self::$pdo->prepare($sql);
            $statement->bindValue(":autorId",$this->autor->id,PDO::PARAM_INT);
            $statement->bindValue(":editorialId",$this->editorial->id,PDO::PARAM_INT);
            $statement->execute(); 
            $this->id=self::$pdo->lastInsertID();
        }
        
        private function modificar(){
            $sql="update libro set id=:id;
            $statement->bindValue(":id",$this->id);
        }
    }
    

