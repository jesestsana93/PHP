<html>
<head>
	<title></title>
</head>
<body>
	<?php
	
	$variable1 = "Jesus";
	echo "Hola mi nombre es: " .$variable1; 
	echo "<br>"; // Salto de linea
	//Esto es un comentario
	echo "Hola estoy trabajando con php";
	/*
		Este es un comentario compuesto. 
		Igual que Java xD*/
	

	?>
	<br> 
	<?php
	//	$variable2 = 23;
		echo "Tengo " . $variable2; 
	?>

	<?php
	// Ciclos
	
		$calificacion = 6.5;
		if($calificacion<5){
			echo "Estas reprobado";
		} else if($calificacion>=6 && $calificacion<=7){
			echo "Esfuerzate mas";
		}else{
			echo "Aprobaste";
		}

		echo '<br>';
		switch($calificacion){
			case 1:
			case 2:
			case 3:
			case 4:
			case 5: //Del 1 al 5 imprime lo mismo
				echo "Estas reprobado";
			break;
			case 6:
			case 7:
				echo 'Esfuerzate mas';
			break;
			case 8:
			case 9:
			case 10:
				echo "Aprobaste";
			break;

			default:
				echo "No se aceptan decimales";
			break;
		}


		$valor1 = 10;
		$valor2 = 5;
		$operacion = "resta";
		$resultado = $valor1 + $valor2;
		//echo "El resultado de la suma es " .$resultado;
		switch($operacion){
			case 'suma':
				$resultado = $valor1 + $valor2;
			break;

			case 'resta':
				$resultado = $valor1 - $valor2;
			break;

			case 'division':
				$resultado = $valor1 / $valor2;
			break;

			case 'multiplicacion':
				$resultado = $valor1 * $valor2;

			break;
		}
		echo "El resultado de la " .$operacion. " es " .$resultado; 


		$tabla = 9;
		for($inicio=1;$inicio<=100;$inicio+=10){
			$resultado=$tabla*$inicio;
			echo $tabla.'X'. $inicio.'='.$resultado.'<br>';
		}

		//Se almacena el valor pasado en el formulario
		// $espanol = $_POST['espanol'];
		// $matematicas = $_POST['matematicas'];
		// $historia = $_POST['historia'];

		$resultado =($espanol+$matematicas+$historia)/3;
		echo "El promedio de estas materias es ".$resultado;
	?>


</body>
</html>