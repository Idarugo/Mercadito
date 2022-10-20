<?php
    require '../models/User.php';

    class AuthController {
    
        private $connectDB;

        function __construct( $connectDB)
        {
            $this->connectDB = $connectDB;
        }

        public function login($user, $pass){
           $this->connectDB->connect();
            $sql = "SELECT * FROM users WHERE correo = '$user' AND password='$pass'";
            $resp = $this->connectDB->query($sql);
            if($rs = mysqli_fetch_array($resp)){
                $user = new User($rs['id'],$rs['nombre'],$rs['correo'],$rs['password'],$rs['imagen'],$rs['direccion'],$rs['rol'],$rs['estado']);
                if($rs['estado'] === '1') {
                    $this->connectDB->disconnect();
                    header("location:  ../pages/login.php?banned");
                    return;
                }
                session_start();
                $_SESSION['user'] = $user;
                $this->connectDB->disconnect();
                header("location:  ../index.php");
                return;
            }
            $_SESSION['user'] = null;
            $this->connectDB->disconnect();
            header("location: ../pages/login.php?AuthError");
            return;
        }

        public function register($user,$correo, $pass){
             $this->connectDB->connect();
             $sql = "INSERT INTO `users`(`nombre`, `correo`, `password`) VALUES ('$user','$correo','$pass')";
             $this->connectDB->query($sql);
             if($this->connectDB->getDB()->affected_rows){
                 $this->connectDB->disconnect();
                 header("location:  ../pages/login.php?banned");
                 return;
             }
             $this->connectDB->disconnect();
                header("location:  ../index.php");
             return;
        }

        public function logout(){
            session_start();
            session_unset();
            session_destroy();
            header("location:  ../pages/login.php?logout");
        }
    }


?> 