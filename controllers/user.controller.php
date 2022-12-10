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
        $this->connectDB->connect();
        $sql = "SELECT COUNT(id) as cantidad FROM users";
        $st = $this->connectDB->query($sql);
        $val = mysqli_fetch_assoc($st);
        $this->connectDB->disconnect();
        return $val["cantidad"];
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
        $sql = " SELECT * FROM `users` Where rol = 2";
        $st = $this->connectDB->query($sql);
        while ($rs = mysqli_fetch_array($st)) {
            $lista[] = new UsuarioDTO($rs['id'], $rs['nombre'], $rs['correo'], $rs['direccion'], $rs['estado']);;
        }
        $this->connectDB->disconnect();
        return $lista;
    }

    public function UserBloqueList()
    {
        $lista = array();
        $this->connectDB->connect();
        $sql = " SELECT * FROM `users` Where rol = 2 and estado = 1";
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

    public function conseguirEstado($campo1, $tabla, $campo2, $id)
    {
        $this->connectDB->connect();
        $sql = "select $campo1 as estado from $tabla where $campo2='$id'";
        $ejecutar = $this->connectDB->query($sql);
        $val = mysqli_fetch_assoc($ejecutar);
        $this->connectDB->disconnect();
        return $val["estado"];
    }

    public function cambiarEstado($tabla, $campo1, $est, $campo2, $id)
    {
        if ($est == 0) {
            $est = 1;
        } else {
            $est = 0;
        }
        $this->connectDB->connect();
        $sql = "update $tabla set $campo1='$est' where $campo2='$id'";
        $ejecutar = $this->connectDB->query($sql);
        if ($this->connectDB->affected_rows) {
            echo "<script>
            alert('El estado del usuario se ha modificado correctamente');
            window.location= '../pages/listarusuario.php?Bloqueado'
            </script>";
        } else {
            echo "<script>
            alert('El estado del usuario se ha modificado correctamente');
            window.location= '../pages/listarusuario.php?Error'
            </script>";
        }
        return;
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
