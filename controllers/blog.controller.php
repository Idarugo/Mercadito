<?php
require '../models/Blog.php';

class BlogController
{

    private $connectDB;

    function __construct($connectDB)
    {
        $this->connectDB = $connectDB;
    }


    public function register($imagen, $nombre, $detalle, $fecha)
    {
        $this->connectDB->connect();
        $sql = "INSERT INTO `blog`(`imagen`, `name`, `detail`, `date`) VALUES ('$imagen','$nombre','$detalle','$fecha')";
        $this->connectDB->query($sql);
        if ($this->connectDB->getDB()->affected_rows) {
            $this->connectDB->disconnect();
            header("location:  ../pages/agregarblog.php?created");
            return;
        }
        $this->connectDB->disconnect();
        header("location:  ../pages/agregarblog.php?RegisterError");
        return;
    }

    public function listblog()
    {
        $blog = array();
        $this->connectDB->connect();
        $sql = " SELECT * FROM `blog`";
        $st = $this->connectDB->query($sql);
        while ($rs = mysqli_fetch_array($st)) {
            $blog[] = new Blog($rs['id'], $rs['imagen'], $rs['name'], $rs['detail'], $rs['date']);;
        }
        $this->connectDB->disconnect();
        return $blog;
    }

    public function getBlogById($id)
    {
        $lista = array();
        $this->connectDB->connect();
        $sql = "SELECT * FROM `blog` WHERE `id`= $id";
        $st = $this->connectDB->query($sql);
        while ($rs = mysqli_fetch_array($st)) {
            $lista = new Blog($rs['id'], $rs['imagen'], $rs['name'], $rs['detail'], $rs['date']);;
        }
        $this->connectDB->disconnect();
        return $lista;
    }

    public function updateBlog($id, $imagen, $nombre, $detalle, $fecha)
    {
        $this->connectDB->connect();
        $sql = "UPDATE `blog` SET `imagen`='$imagen',`name`='$nombre',`detail`='$detalle',`date`='$fecha' WHERE `id`='$id'";
        $this->connectDB->query($sql);
        if ($this->connectDB->getDB()->affected_rows) {
            session_start();
            session_unset();
            session_destroy();
            $this->connectDB->disconnect();
            header("location:  ../pages/listarblog.php?edited");
            return;
        }
        $this->connectDB->disconnect();
        //header("location:  ../pages/modificarusuario.php?ModifiedError");
        return;
    }
}
