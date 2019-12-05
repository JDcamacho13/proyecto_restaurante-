<?php

    include ("dataBase.php");

    class User extends DB{
        private $nombre;
        private $username;
        private $conx;

        public function userExist($user,$pass){
            $sql = "SELECT * FROM usuarios WHERE usuario = '$user' AND `password` = '$pass'";
            $query = $this->connect()->query($sql);

            if($query->rowCount() > 0){
                return true;
            }
            else{
                return false;
            }
        }

        public function setUser($user){
            $sql = "SELECT * FROM usuarios WHERE usuario = '$user'";
            $query = $this->connect()->query($sql);

            foreach ($query as $currentUser) {
                $this->nombre = $currentUser['nombre'];
                $this->username = $currentUser['usuario'];
            }
        }
    
        public function getNombre(){
            return $this->nombre;
        }

    }
?>