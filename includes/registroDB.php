<?php

    include ("dataBase.php");

    $db = new DB();

    if(isset($_POST['cedula'])){
        $cedula = $_POST['cedula'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $nombreUsuario = $_POST['nUsuario'];
        $password = $_POST['password'];
        $errores = array();

        $query = $db->connect()->prepare("SELECT usuario,`C.I` FROM usuarios where usuario = :usuario ");
        $query->execute(['usuario' => $nombreUsuario]);

        if($query->rowCount()){
            foreach( $query as $row){
                if(isset($row['usuario'])){
                    array_push($errores, 'El nombre de usuario ya existe');
                }
            }
        }

        $query = $db->connect()->prepare("SELECT usuario,`C.I` FROM usuarios where `C.I` = :cedula");
        $query->execute(['cedula' => $cedula]);

        if($query->rowCount()){

            foreach( $query as $row){
                if(isset($row['C.I'])){
                    array_push($errores, 'Esta cédula la tiene un usuario existente');
                }
            }
        }

        if(count($errores) > 0){
            echo "<br /><center><div class='error'>";
            for($i = 0; $i < count($errores); $i++){
                echo "<li>".$errores[$i]."</li>";
            }
            echo "</div><center>";
        }else{
            $query = $db->connect()->query("INSERT INTO usuarios (`C.I`, `nombre`, `apellidos`, `usuario`, `password`) VALUES ('$cedula','$nombre','$apellido',
            '$nombreUsuario','$password')");
            
            header("location: ../index.php?mensaje=true");
        }
        
        

    }
?>