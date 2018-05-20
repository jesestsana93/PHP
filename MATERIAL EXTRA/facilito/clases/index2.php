<?php 
	//Un trait es como un fragmento de codigo que puede ser usado cuantas veces queramos en las clases
	trait Persona2{
		public $nombre;

		public function mostrarNombre(){
			echo $this->nombre;
		}

		abstract function asignarNombre($nombre);
	}

	trait Trabajador{
		protected function mensaje(){
			echo "Mi nombre es ";
		}
	}
	class Persona{
		use Persona2,Trabajador;

		public function asignarNombre($nombre){
			$this->nombre=$nombre.self::mensaje();
		}
	}

	$persona=new Persona;
	$persona->asignarNombre("Jesus");
	echo $persona->nombre;
?>
