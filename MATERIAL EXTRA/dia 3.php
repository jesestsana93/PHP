<?php
//http://mx2.php.net/manual/es/funcref.php


 $p = array('pedro',66,'55-60-60');
 list($nombre,$edad,$telefono)=$p;
 print_r($telefono);
 
  echo "\n------------------------ \n";
 
  $q = array(
      'nombre'=>'pedro',
      'edad'=> 66,
      'telefono'=>'55-60-60'
  );
  extract($q);
  print_r($nombre); 
  
  echo "\n \n ";
  //Variables variables
  $mensaje = "hola mundo";
  $accion="mensaje";
  $$accion;
  print_r($$accion);

  echo"\n -------------------------\n";
  //Funciones
  $cadena = "juan Perez";
  $arreglo = explode(' ',$cadena);//divide un string en un arreglo
  //$arreglo[0]="Juan";
  //$arreglo[1]="Perez";
  print_r($arreglo);
 
  echo "\n \n";
  $cadena2 = implode(' ',$arreglo);//une elementos de un arreglo en un string
  print_r($cadena2);
  
  echo "\n \n";
  $cadena3 = substr($cadena,1,2); //devuelve parte de una cadena
  print_r($cadena3);
  
  echo "\n \n";
  $cad4= strlen($cadena);//devuelve la longitud de una cadena
  print_r($cad4);
  
  echo "\n \n";/*
  $letra[$i] = substring($cadena,$i,1);
  $letra = array();
  for($letra=0;$letra<10;$letra++){
      subst($letra,1,1);
      $letra++;
      print_r($letra);
  }*/
  
  
  $cad="ALGO";
  echo strtolower($cad); //convierte una cadena a minusculas
  
  echo "\n \n";
  $caden = "zapato";
  echo strtoupper($caden);//convierte un string a mayusculas
  
  echo "\n \n";
  
  echo ucwords($cadena); //convierte a mayusculas el primer caracter de cada palabra en una cadena
  
  echo "\n \n";
  $a = array(
      0=>108,
      2=>31,
      4=>60
 );
 echo asort($a);
 
 echo "\n \n";
 function mifuncion($par1, $par2="mundo"){
    echo $par1;
    echo $par2. "\n";
 }
 mifuncion("hola");
 mifuncion("hola"," a todos");
 
 echo "\n";
 function suma(){
  $args=func_get_args();
  $s=0;
  foreach($args as $n){
  $s += $n;
  }
  return $s;
 }
  echo suma(1,2,3);
?>