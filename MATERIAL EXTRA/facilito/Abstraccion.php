<?php 

	abstract class Molde{
		abstract public function ingresarNombre($nombre);
		abstract public function obtenerNombre();
	}

	class Persona extends Molde{
			
		private $mensaje = "Hola a todos";
		private $nombre;

		public function mostrar(){
			print $this->mensaje;
		}
		public function ingresarNombre($nombre,$apellido="cf"){
			$this->nombre = $nombre.$apellido;
		}
		public function obtenerNombre(){
			print $this->nombre;
		}
	}

	$obj=new Persona();
	$obj->ingresarNombre("Jesus"," Sanchez<br>");
	$obj->obtenerNombre();
	$obj->mostrar();

?>