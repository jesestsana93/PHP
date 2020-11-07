<?php

class Editorial{
        //require_once('bd.php');
        
        public $id=0;
        public $nombre;
        protected static $pdo;
        
        public function getNombre(){
            return $this->nombre;
        }
        
        public function setNombre($nombre){
            $this->nombre=$nombre;
        }
       
        //Inyeccion de dependencias
        public static inicializar($pdo){
            self::$pdo=$pdo;
        }
        
        public function guardar(){
            global $pdo;
            if($this->id==0){
                $this->agregar();
            }else{
                $this->modificar();
            }
        }
        
        private function agregar(){
            $sql="insert into editorial values(0,:nombre)";
            $statement=self::$pdo->prepare($sql);
            $statement->bindValue(":nombre",$this->nombre,PDO::PARAM_STR);
            $statement->execute(); 
	    $this->id=self::$pdo->lastInsertID();
        }
        
        private function modificar(){
            $sql="update editorial set nombre=:nombre where id=:id";
	    $statement=self::$pdo->prepare($sql);
	    $statement->bindValue(":nombre",$this->nombre);
            $statement->bindValue(":id",$this->id);
	    $statement->execute();
        }
    }
    
?>
