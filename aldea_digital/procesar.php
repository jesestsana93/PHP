<?php
	
	$nombre=$_POST['nombre'];
	$email=$_POST['email'];
	$telefono=$_POST['telefono'];
	$datos=array('nombre'=>$nombre,'correo'=>$email,'telefono'=>$telefono);

	//Abrir conexion del servidor a la base de datos
	$conexion=new PDO('mysql:host=localhost;dbname=prueba','root','');
	$sentencia=$conexion->prepare('Insert into informacion(nombre,correo,telefono) values(:nombre, :correo, :telefono)');
	$sentencia->execute($datos);
?>