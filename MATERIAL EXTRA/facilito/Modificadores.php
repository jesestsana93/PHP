<?php 
 
 	class Facebook{

 		//Atributos
 		public $nombre;
 		public $edad;
 		private $pass;

 		//Metodos
 		public function __construct($nombre,$edad,$pass){
 			$this->nombre=$nombre;
 			$this->edad=$edad;
 			$this->pass=$pass;
 		}

 		public function verInformacion(){
 			echo "Nombre: " .$this->nombre. "<br>";
 			echo "Edad: " .$this->edad. "<br>";
 			echo "Password: " .$this->pass. "<br>";
 		}
 	}

 	$facebook = new Facebook("Jesus Sanchez",24,"1234");
 	$facebook->verInformacion();
?>