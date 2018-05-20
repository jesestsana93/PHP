<?php
// Variables estaticas
    function siguiente(){
        static $i=0;
        return $i++;
    }
    
    echo siguiente() ;
    echo siguiente() ;
    echo siguiente() ;
    
    echo "\n";
    //por valor
    function suma($a,$b){
        $a = $a + $b;
        return $a;
    }
    $a = 3;
    $b = 4;
    print_r(suma($a,$b));
    echo "\n";
    echo $a;
    
     echo "\n";
    //por referencia
    function suma2(&$a,$b){
        $a = $a + $b;
        return $a;
    }
    $a = 3;
    $b = 4;
    print_r(suma2($a,$b));
    echo "\n";
    echo $a;
    echo "\n";
    
    function cuadrado(&$numeros){
        foreach($numeros as $indice => $numero){
            $numeros [indice]  = $numero * $numero;
        }
    }
    $a = [1,2,3,4] ;
    cuadrado($a);
    print_r($a); //ahora $a es 1,4,9,16
    
    function factorial($n){
        return $n==0 ? 1 : $n * factorial($n - 1) ;
    }
    echo factorial(5);
    echo "\n";
    
    
    function fibo($n){
        if($n<3){
            return 1;
        }
        return fibo($n-1) + fibo ($n-2);
    }
    $fibo = [];
    foreach(range(1,10) as $n){
        $fibo [] = fibo($n);
    }
    print_r($fibo);
    
    echo "\n";
    //Funciones variables
    $ordena = 'asort';
    $a = [13,11,7,5,2,3];
    $ordena($a);
    asort($a);
    
    
    //Funciones anonimas
    $s = function($a,$b){
        return $a + $b;
    }
    //$s (3,5);
    
    
    /*
    $b = [13,11,5,7,2,3];
    usort($b,
         function($x,$y){
            if($x < $y){
                return 1;
            }
            if($x > $y){
                return -1;
            }
            return 0;
         }
    );*/
    
    
    $p = [
        'nombre' => 'pepe',
        'edad' => 18,
        'telefono' => '55-60-60',
        ];
        
    $q = [
        'nombre' => 'laura',
        'edad' => 21,
        'telefono' => '55-10-20',
        ];
        
    $agenda [] = $p;
    $agenda [] = $q;
    
    usort($agenda,
        function($p,$q){
            if($p['edad'] == $q['edad']){
                return 0;
            }
            return $p['edad'] < $q['edad'] ?-1: 1;
        }
    );
    
    
    //Juego basico de aritmetica
    $aritmetica = [
        'suma' => function($a,$b){
            return $a + $b;
        },
        'resta' => function($a,$b){
            return $a - $b;
        },
        'multiplicacion' => function($a,$b){
            return $a * $b;
        },
        'division' => function($a,$b){
            return $a / $b;
        },
        'muldiv' => function($a, $b, $c){
            return $a * $b / $c;
        },
    ];
    
    
    call_user_func_array(
        $aritmetica [$operacion], array($a, $b, $c)
    );
?>