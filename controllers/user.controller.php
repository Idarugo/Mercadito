<?php
require '../models/UsuarioDTO.php';
class UserController
{

    private $connectDB;

    function __construct($connectDB)
    {
        $this->connectDB = $connectDB;
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
        $sql = " SELECT * FROM `users`";
        $st = $this->connectDB->query($sql);
        while ($rs = mysqli_fetch_array($st)) {
            $lista[] = new UsuarioDTO($rs['id'], $rs['nombre'], $rs['correo'], $rs['direccion'], $rs['estado']);;
        }
        $this->connectDB->disconnect();
        return $lista;
    }

    public function removeUser($id)
    {
        $this->connectDB->connect();
        $sql = "DELETE FROM users WHERE id = $id";
        $st = $this->connectDB->query($sql);
        $this->connectDB->disconnect();
    }
}
