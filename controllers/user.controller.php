<?php
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

        public function select(){
            $lista = array();
            $this->connectDB->connect();
            $sql = " SELECT * FROM `users`";
            echo "IF";
            if($this->connectDB->getDB()->affected_rows){     
                $st = $this->connectDB->query($sql);
                while($rs = mysqli_fetch_array($st)){
                    echo "WHILE";
                    $lista[] = new Usuario($rs['id'],$rs['nombre'],$rs['correo'],$rs['password'],$rs['imagen'],$rs['direccion'],$rs['rol'],$rs['estado']);;
                }
                $this->connectDB->disconnect();
            }
            return $lista;
        }

    }


?> 