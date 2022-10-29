<?php
    include '../controllers/auth.controller.php';
    class UserController {
    
        private $connectDB;

        function __construct( $connectDB)
        {
            $this->connectDB = $connectDB;
        }


        public function update($id,$name,$correo,$pass,$imagen,$direccion){
            $this->connectDB->connect();
            $imagen = addslashes(file_get_contents($imagen['tmp_name']));
            $sql = "UPDATE `users` SET `nombre`='$name',`correo`='$correo',`password`='$pass',`imagen`='$imagen',`direccion`='$direccion' WHERE `id`='$id'";
            $this->connectDB->query($sql);
           if($this->connectDB->getDB()->affected_rows){            
                $user = new AuthController($this->connectDB);
                $user->logout();
               $this->connectDB->disconnect();
               return;
           }
           $this->connectDB->disconnect();
           header("location:  ../pages/modificarusuario.php?ModifiedError");
           return;
        }

        public function select($id){
            $this->connectDB->connect();
            $sql = " SELECT `id`, `nombre`, `correo`, `direccion`,`estado` FROM `users` WHERE  id=$id";
           if($this->connectDB->getDB()->affected_rows){     
            $lista = array();
            $st = $this->connectDB->query($sql);
            while($rs = mysqli_fetch_array($st)){
              $id = $rs['id'];
              $name    = $rs['nombre'];
              $correo    = $rs['correo'];
              $direccion  = $rs['direccion'];
              $estado    = $rs['estado'];
              $en  = new Usuario($id,$name,$correo,0,0,$direccion,$estado,0);
              $lista[] = $en;
           }
           $this->connectDB->disconnect();
           header("location:  ../pages/modificarusuario.php?ModifiedError");
           return $lista;
            }
        }

    }


?> 