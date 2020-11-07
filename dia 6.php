<?php

/*
    print_r($FILES);
    
    <form method = "post" enctype= "multipart/form-data" action="formulario2.php">
        <input type = 'file' name='archivo'>
        <input type='submit' value='Enviar'>
    </form>
    
    print_r($POST);
    <form name="/var/www/html" enctype= "multipart/form-data" action="localhost/formulario.php" method="post">
        Nombre: <input type="text" name="nombre"><br>
        Apellidos: <input type="text" name="apellidos"><br>
        Correo: <input type="text" name="email"><br>
        Contraseña: <input type="text" name="password"><br>
        <input type='submit' value='Enviar'>
    </form>*/
    
    //Clases
    /*
    class Circulo{
        var $radio = 0;
        
        function __construct($radio){
            /*
                Codigo del constructor
            */
          //  $this->radio=$radio;
      //  }
        
        //function __destruct(){
            /*
                Codigo del destructor
            */
        //}
        
      //  function calculaArea(){
            /*
                Codigo del metodo
            */
        //    return 3.1416 * $this->radio * $this->radio;
        //}
    //}
    //$circulo = new Circulo(84); //creacion de un objeto
    //unset($circulo);
    //$circulo = new Circulo();
    //$circulo->radio(84);
    //echo $circulo->calculaArea();
    
    /*
    EJERCICIO: CLASE RECTANGULO
    */
    class Rectangulo{
        var $ancho;
        var $largo;
        
          function __construct($ancho, $largo){
            /*
                Codigo del constructor
            */
            $this->ancho=$ancho;
            $this->largo=$largo;
        }
        
        function calculaArea(){
            return $this->ancho * $this->largo;    
        }
    }
    $rectangulo = new Rectangulo(4,7);
    echo $rectangulo->calculaArea();
    
    
?>