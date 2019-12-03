<?php

    include ("dataBase.php");

    class User{
        private $nombre;
        private $username;
        private $conx;

        public function __construct($c){
            $conx = $c;
        }
        public function userExist($user,$pass){
            $query = "SELECT * FROM usuarios WHERE usuario = '$user' AND `password` = '$pass'";
            $result = $this->$conx->query($query);

            if($result->num_rows > 0){
                return true;
            }
            else{
                return false;
            }
        }
    }

    $user = new User($conexion);

    if($user->userExist("JDcamcho","1234")){
        echo "ok";
    }else{
        echo "no ok";
    }

?>