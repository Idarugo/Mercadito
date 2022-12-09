<?php
require '../models/BookTime.php';

class bookTimeController
{

    private $connectDB;

    function __construct($connectDB)
    {
        $this->connectDB = $connectDB;
    }

    public function ReservaId()
    {
        $this->connectDB->connect();
        $sql = "SELECT COUNT(id) as cantidad FROM book_time";
        $st = $this->connectDB->query($sql);
        $val = mysqli_fetch_assoc($st);
        $this->connectDB->disconnect();
        return $val["cantidad"];
    }

    public function register($dia, $hora, $nombre, $email, $telefono)
    {
        $this->connectDB->connect();
        $sql = "INSERT INTO `book_time`( `date`, `hour`, `name`, `mail`, `phone`) VALUES ('$dia','$hora','$nombre','$email','$telefono')";
        $this->connectDB->query($sql);
        if ($this->connectDB->getDB()->affected_rows) {
            $this->connectDB->disconnect();
            echo "<script>
            alert('Su hora de visita se ah agregado correctamente');
            window.location= '../pages/servicio.php?created'
            </script>";
            return;
        }
        $this->connectDB->disconnect();
        header("location:  ../pages/servicio.php?RegisterError");
        return;
    }

    public function listbook()
    {
        $book = array();
        $this->connectDB->connect();
        $sql = " SELECT * FROM `book_time`";
        $st = $this->connectDB->query($sql);
        while ($rs = mysqli_fetch_array($st)) {
            $book[] = new BookTime($rs['id'], $rs['date'], $rs['hour'], $rs['name'], $rs['mail'], $rs['phone']);;
        }
        $this->connectDB->disconnect();
        return $book;
    }

    public function getBookById($id)
    {
        $lista = array();
        $this->connectDB->connect();
        $sql = "SELECT * FROM `book_time` WHERE `id`= $id";
        $st = $this->connectDB->query($sql);
        while ($rs = mysqli_fetch_array($st)) {
            $lista = new BookTime($rs['id'], $rs['date'], $rs['hour'], $rs['name'], $rs['mail'], $rs['phone']);;
        }
        $this->connectDB->disconnect();
        return $lista;
    }

    public function updateBook($id, $dia, $hora, $nombre, $email, $telefono)
    {
        $this->connectDB->connect();
        $sql = "UPDATE `book_time` SET `date`='$dia',`hour`='$hora',`name`='$nombre',`mail`='$email',`phone`='$telefono' WHERE `id`='$id'";
        $this->connectDB->query($sql);
        if ($this->connectDB->getDB()->affected_rows) {
            session_start();
            session_unset();
            session_destroy();
            $this->connectDB->disconnect();
            echo "<script>
            alert('Hora de visiota ah sido modificado correctamente');
            window.location= '../pages/listarbook.php?edited'
            </script>";
            return;
            return;
        }
        $this->connectDB->disconnect();
        //header("location:  ../pages/modificarusuario.php?ModifiedError");
        return;
    }
}
