<?php
    $i=5;
    switch($i){
        case 1:
            echo "i = 1 \n";
            break;
        case 2:
            echo "i = 2 \n";
            break;
        case 3:
            echo "i = 3 \n";
            break;
        default:
            echo "i tiene otro valor \n";
            break;
    }
    echo "-------------------------------\n";
    //Ciclos
    $j=0;
    while($j<5){
        echo "j = " .$j++ . "\n";
    }
    echo "-------------------------------\n";
    
    $k=0;
    do{
        
        echo "k = " .$k++ . "\n";
    }while($k<5);
    echo "-------------------------------\n";
    
    //Arreglos
    $a = array(1,2,3,4);
    print_r($a);
    
    $a[] = 'maria'; //Agrego un elemento al arreglo
    unset($a[3]); //Quito un elemento del arreglo
    echo "-------------------------------\n";
    
    
    $b = array(1,2,'pedro',true,2.8);
    print_r($b);
    
    echo "-------------------------------\n";
    echo count("$b"); //ver cuantos elementos tiene el arreglo
    
    echo "-------------------------------\n";
    $c = array(34,45,$a);
    print_r($c);
    
    var_dump($b);
    
    echo "-------------------------------\n";
    echo $a[2];
    
    
    echo "-------------------------------\n";
    //Arreglos asociativos
    $persona = array();
    $persona['nombre'] = 'pedro perez';
    $persona['edad']='66';
    $persona['telefono']='55556289';
    $persona['direccion'] = array(
        'calle' => 'x',
        'numero' => 8
    );
    print_r($persona);
    echo "-------------------------------\n";
    
    $persona2 = array(
        'nombre' => 'pedro perez',
        'edad' => '66',
        'telefono' => '55556289',
        'correo-e' => 'pedro@servidor'
    );
    print_r($persona2);
    echo "-------------------------------\n";
    
    foreach($persona as $llave => $valor){
        echo $llave . ':' . $valor. "\n";
    }
    
    print_r(array_keys($persona))
    
?>

<!doctype html>
<html>
    <head>
        <title>Mi primer script</title>
    </head>
   
    <body>
   
    </body>
</html>