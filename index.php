<?php

include_once 'includes/user.php';
include_once 'includes/user_session.php';

$userSession = new UserSession();
$user = new User();

if(isset($_SESSION['user'])){
    //echo "hay sesion";
    $user->setUser($userSession->getCurrentUser());
    include "vistas/bienvenida.php";

}else if(isset($_POST["username"]) && isset($_POST["contraseña"])){
    //echo "validando login"; 
    $userForm = $_POST["username"];
    $passForm = $_POST["contraseña"];

    if($user->userExist($userForm,$passForm)){
        //echo "usuario validado";
        $userSession->setCurrentUser($userForm);
        $user->setUser($userForm);
        include "vistas/bienvenida.php";
    }
    else{
        $errorLogin = "nombre de usuario y/o contraseña incorrecta";
        include 'vistas/login.php'; 
    }
    
}else{
    //echo "login";
    include "vistas/login.php";
}
?>