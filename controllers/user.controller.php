<?php
require '../models/UsuarioDTO.php';
class UserController
{

    private $connectDB;

    function __construct($connectDB)
    {
        $this->connectDB = $connectDB;
    }

    public function UserId()
    {
        $lista = array();
        $this->connectDB->connect();
        $sql = "SELECT COUNT(id) FROM users";
        $st = $this->connectDB->query($sql);
    }

    public function getUsersById($id)
    {
        $lista = "";
        $this->connectDB->connect();
        $sql = "SELECT * FROM `users` WHERE `id`= $id";
        $st = $this->connectDB->query($sql);
        while ($rs = mysqli_fetch_array($st)) {
            $lista = new UsuarioDTO($rs['id'], $rs['nombre'], $rs['correo'], $rs['password'], $rs['imagen'], $rs['direccion'], $rs['rol'], $rs['estado']);;
        }
        $this->connectDB->disconnect();
        return $lista;
    }

    public function update($id, $name, $correo, $pass, $direccion)
    {
        $this->connectDB->connect();
        $sql = "UPDATE `users` SET `nombre`='$name',`correo`='$correo',`password`='$pass',`direccion`='$direccion' WHERE `id`='$id'";
        $this->connectDB->query($sql);
        if ($this->connectDB->getDB()->affected_rows) {
            session_start();
            session_unset();
            session_destroy();
            $this->connectDB->disconnect();
            header("location:  ../pages/login.php?logout");
            return;
        }
        $this->connectDB->disconnect();
        //header("location:  ../pages/modificarusuario.php?ModifiedError");
        return;
    }


    public function updateImagen($id, $imagen)
    {
        $this->connectDB->connect();
        $imagen = addslashes(file_get_contents($imagen['tmp_name']));
        $sql = "UPDATE `users` SET `imagen`='$imagen' WHERE `id`='$id'";
        $this->connectDB->query($sql);
        if ($this->connectDB->getDB()->affected_rows) {
            session_start();
            session_unset();
            session_destroy();
            $this->connectDB->disconnect();
            header("location:  ../pages/login.php?logout");
            return;
        }
        $this->connectDB->disconnect();
        //header("location:  ../pages/modificarusuario.php?ModifiedError");
        return;
    }

    public function Userlist()
    {
        $lista = array();
        $this->connectDB->connect();
        $sql = " SELECT * FROM `users` Where estado = 1";
        $st = $this->connectDB->query($sql);
        while ($rs = mysqli_fetch_array($st)) {
            $lista[] = new UsuarioDTO($rs['id'], $rs['nombre'], $rs['correo'], $rs['direccion'], $rs['estado']);;
        }
        $this->connectDB->disconnect();
        return $lista;
    }

    public function blockUser($id)
    {
        $this->connectDB->connect();
        $sql = "UPDATE users SET estado = 0 Where id = $id";
        $st = $this->connectDB->query($sql);
        $this->connectDB->disconnect();
        header("location:  ../pages/listarusuario.php?removedUsername");
        return;
    }



    public function UserlistUnlock()
    {
        $lista = array();
        $this->connectDB->connect();
        $sql = " SELECT * FROM `users` Where estado = 0";
        $st = $this->connectDB->query($sql);
        while ($rs = mysqli_fetch_array($st)) {
            $lista[] = new UsuarioDTO($rs['id'], $rs['nombre'], $rs['correo'], $rs['direccion'], $rs['estado']);;
        }
        $this->connectDB->disconnect();
        return $lista;
    }


    public function unlockUser($id)
    {
        $this->connectDB->connect();
        $sql = "UPDATE users SET estado = 1 Where id = $id";
        $st = $this->connectDB->query($sql);
        $this->connectDB->disconnect();
        header("location:  ../pages/listarusuarioBloqueado.php?unlockUsername");
        return;
    }
}
