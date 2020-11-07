<?php
    
// example code
    class Contacto{
        private $nombre;
        private $telefono;
        private $email;
        
        function __construct($nombre,$telefono,$email){
            $this->nombre=$nombre;
            $this->telefono=$telefono;
            $this->email=$email;
        }
      
        public function setNombre($nombre){
            $this->nombre=strtoupper($nombre);
        }
        public function setTelefono($telefono){
            $this->telefono=substr($telefono,0,10);
        }
        public function setEmail($email){
            $this->email = $email;
        }
        
        public function getNombre(){
            return $this->nombre;
        }
        public function getTelefono(){
            return $this->telefono;
        }
        public function getEmail(){
            return $this->email;
        }
        
    }
    $contacto = new Contacto("juan",56789945,"123qhaha");
    print_r($contacto);

$dsn=("mysql:host=localhost;dbname=cursophp"); //motor de base de datos
    //PDO(php data objects)
    $pdo = new PDO($dsn,$usuario,$contraseña){
        data source name
    }
    
    $stmt=$pdo->query("
        select * from tareas
        where fechaLimite>now()
    ");
    
    $stmt=$pdo->prepare("
        select * from tareas
        where curso=:curso 
    ");
    
    /*
     Metodos
     exec()->consultas que no devuelven registros
     query()->consultas que devuelven registros
     prepare()->consultas parametrizadas o que se usaran varias veces
    
     Dos tipos de consultas -> CRUD
     Modifican datos(INSERT,UPDATE,DELETE)
     Buscan datos(SELECT)
    */

?>