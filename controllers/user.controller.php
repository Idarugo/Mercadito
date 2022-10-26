<?php
    require '../models/Usuario.php';

    class UserController {
    
        private $connectDB;

        function __construct( $connectDB)
        {
            $this->connectDB = $connectDB;
        }

        public function update($name,$correo,$pass,$imagen,$direccion){
            $this->connectDB->connect();
            $sql = "UPDATE `users` SET `nombre`='$name',`correo`='$correo',`password`='$pass',`imagen`='$imagen',`direccion`='$direccion'";
            $this->connectDB->query($sql);
            if($this->connectDB->getDB()->affected_rows){
                $this->connectDB->disconnect();
                header("location:  ../pages/modificarusuario.php?modified");
                return;
            }
            $this->connectDB->disconnect();
            header("location:  ../pages/modificarusuario.php?ModifiedError");
            return;
        }
    }


?> 