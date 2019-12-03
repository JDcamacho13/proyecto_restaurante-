<?php

    include ("dataBase.php");

    if(isset($_POST['cedula'])){
        $cedula = $_POST['cedula'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $nombreUsuario = $_POST['nUsuario'];
        $password = $_POST['password'];
        $errores = array();

        $sql = "SELECT usuario,`C.I` FROM usuarios where usuario = '$nombreUsuario' AND `C.I` = '$cedula'";

        $resultado = $conexion->query($sql);

        if($resultado->num_rows > 0){
            $row = $resultado->fetch_assoc();

            if(isset($row['usuario'])){
                array_push($errores, 'El nombre de usuario ya existe');
            }
            
            if(isset($row['C.I'])){
                array_push($errores, 'Esta cedula la tiene un usuario existente');
            }
            
        }

        if(count($errores) > 0){
            echo "<br /><center><div class='error'>";
            for($i = 0; $i < count($errores); $i++){
                echo "<li>".$errores[$i]."</i>";
            }
        }else{
            $sql = "INSERT INTO usuarios (`C.I`, `nombre`, `apellidos`, `usuario`, `password`) VALUES ('$cedula','$nombre','$apellido',
                    '$nombreUsuario','$password')";
            if($conexion->query($sql) === true){
                echo "<br /><center><div class='correcto'>
                    <strong>Nuevo usuario Creado</strong>";
            }
            else{
                die("Conexion fallida: " . $conexion->error);
            }
        }
        echo "</div><center>";
        

    }
?>