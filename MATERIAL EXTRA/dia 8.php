<?php
// example code
/*
 CONSTANTES DE CLASE
 
 class PDO{
     const FETCH_ASOC=1;
     const FETCH_ARRAY=2;
     const FETCH_OBJECT=3;
 }
*/
    $pdo = new PDO('mysql:host=localhost;dbname=cursophp');
    $sql = "select * from tareas where fechalimite>now()";
    $statement = $pdo->query($sql);
    $sql="select * from tareas where calificacion=:calif";
    $statement=$pdo->prepare($sql);
    $statement->bindValue(': calif',7,PDO::PARAM_INT);
    
    select * from personas where apellido=:apellido;
    //Consultas preparadas pare evitar InyeccionSQL
    $statement->bindValue(': apellido','sanchez',PDO::PARAM_STRNG);
    $statement->execute();
    while($fila=$statement->fetch(PDO::FETCH_ASSOC)){
        echo "Nombre: ".$fila['nombre']."\n";
        echo "Fecha: ".$fila['fecha']."\n";
        echo "Fecha limite: ".$fila['fechaLimite'];
    }
    $sql="update tareas set calificacion=:calif where alumno=:alumno";
    INSERT INTO autor(nombre) VALUES(:nombre);
    INSERT INTO editorial(nombre) VALUES(:editorial);

?>