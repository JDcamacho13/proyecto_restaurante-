<?php
    $servidor = 'localhost';
    $usuario = 'root';
    $password = '18mayo2000';
    $DB = 'restaurante';

    $conexion = new mysqli($servidor,$usuario,$password,$DB);

    if($conexion->connect_error){
        die('Conexion fallida: ' . $conexion->connect_error);
    }

?>

