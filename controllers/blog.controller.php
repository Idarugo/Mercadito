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
            echo "<script>
            alert('Blog agregado correctamente');
            window.location= '../pages/agregarblog.php?created'
            </script>";
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

    public function getBlogs()
    {
        $lista = array();
        $this->connectDB->connect();
        $sql = "SELECT * FROM `blog` ORDER BY `blog`.`id` DESC";
        $st = $this->connectDB->query($sql);
        while ($rs = mysqli_fetch_array($st)) {
            $lista[] = new Blog($rs['id'], $rs['imagen'], $rs['name'], $rs['detail'], $rs['date']);;
        }
        $this->connectDB->disconnect();
        return $lista;
    }


    public function updateBlog($id, $nombre, $detalle, $fecha)
    {
        $this->connectDB->connect();
        $sql = "UPDATE `blog` SET `name`='$nombre',`detail`='$detalle',`date`='$fecha' WHERE `id`='$id'";
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


    public function updateImagenBlog($id, $imagen)
    {
        $this->connectDB->connect();
        $imagen = addslashes(file_get_contents($imagen['tmp_name']));
        $sql = "UPDATE `blog` SET `imagen`='$imagen' WHERE `id`='$id'";
        $this->connectDB->query($sql);
        if ($this->connectDB->getDB()->affected_rows) {
            session_start();
            session_unset();
            session_destroy();
            $this->connectDB->disconnect();
            echo "<script>
            alert('Imagen del blog modificado correctamente');
            window.location= '../pages/listarblog.php?edited'
            </script>";
            return;
        }
        $this->connectDB->disconnect();
        //header("location:  ../pages/modificarusuario.php?ModifiedError");
        return;
    }

    public function blogId()
    {
        $this->connectDB->connect();
        $sql = "SELECT COUNT(id) as cantidad FROM blog";
        $st = $this->connectDB->query($sql);
        $val = mysqli_fetch_assoc($st);
        $this->connectDB->disconnect();
        return $val["cantidad"];
    }
}
