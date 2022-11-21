<?php
require '../models/Usuario.php';

class AuthController
{

    private $connectDB;

    function __construct($connectDB)
    {
        $this->connectDB = $connectDB;
    }

    public function login($user, $pass)
    {
        $this->connectDB->connect();
        $sql = "SELECT * FROM users WHERE correo = '$user' AND password='$pass'";
        $resp = $this->connectDB->query($sql);
        if ($rs = mysqli_fetch_array($resp)) {
            $user = new Usuario($rs['id'], $rs['nombre'], $rs['correo'], $rs['password'], $rs['imagen'], $rs['direccion'], $rs['rol'], $rs['estado']);
            if ($rs['estado'] === '1') {
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

    public function register($name, $correo, $pass)
    {
        $this->connectDB->connect();
        $sql = "INSERT INTO `users`(`nombre`, `correo`, `password`) VALUES ('$name','$correo','$pass')";
        $this->connectDB->query($sql);
        if ($this->connectDB->getDB()->affected_rows) {
            $this->connectDB->disconnect();
            echo "<script>
            alert('Usuario Creado correctamente');
            window.location= '../pages/login.php?created'
            </script>";
            return;
        }
        $this->connectDB->disconnect();
        header("location:  ../pages/login.php?RegisterError");
        return;
    }

    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();
        header("location:  ../pages/login.php?logout");
    }


    public function confirmail($correo)
    {
        $this->connectDB->connect();
        $sql = "SELECT * FROM users WHERE correo = '$correo'";
        $resp = $this->connectDB->query($sql);
        if ($rs = mysqli_fetch_array($resp)) {
            $user = new Usuario($rs['id'], $rs['nombre'], $rs['correo'], $rs['password'], $rs['imagen'], $rs['direccion'], $rs['rol'], $rs['estado']);
            if ($rs['estado'] === '1') {
                $this->connectDB->disconnect();
                header("location:  ../pages/olvidarcontrasena.php?banned");
                return;
            }
            session_start();
            $_SESSION['user'] = $user;
            $this->connectDB->disconnect();
            header("location:  ../pages/recuperarcontrasena.php");
            return;
        }
        $_SESSION['user'] = null;
        $this->connectDB->disconnect();
        header("location: ../pages/olvidarcontrasena.php?AuthError");
        return;
    }


    public function modifyPassword($id, $pass)
    {
        $this->connectDB->connect();
        $sql = "UPDATE users SET password='$pass' where id=$id";
        $resp = $this->connectDB->query($sql);
        if ($rs = mysqli_fetch_array($resp)) {
            $user = new Usuario($rs['id'], $rs['nombre'], $rs['correo'], $rs['password'], $rs['imagen'], $rs['direccion'], $rs['rol'], $rs['estado']);
            if ($rs['estado'] === '1') {
                $this->connectDB->disconnect();
                header("location:  ../pages/recuperarcontrasena.php?banned");
                return;
            }
            session_start();
            $_SESSION['user'] = $user;
            $this->connectDB->disconnect();
            header("location:  ../pages/login.php");
            return;
        }
        $_SESSION['user'] = null;
        $this->connectDB->disconnect();
        header("location: ../pages/recuperarcontrasena.php?AuthError");
        return;
    }
}
