<?php
require '../models/BookTime.php';

class bookTimeController
{

    private $connectDB;

    function __construct($connectDB)
    {
        $this->connectDB = $connectDB;
    }


    public function register($dia, $hora, $nombre, $email, $telefono)
    {
        $this->connectDB->connect();
        $sql = "INSERT INTO `book_time`( `date`, `hour`, `name`, `mail`, `phone`) VALUES ('$dia','$hora','$nombre','$email','$telefono')";
        $this->connectDB->query($sql);
        if ($this->connectDB->getDB()->affected_rows) {
            $this->connectDB->disconnect();
            header("location:  ../pages/servicio.php?created");
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
            header("location:  ../pages/listarbook.php?edited");
            return;
        }
        $this->connectDB->disconnect();
        //header("location:  ../pages/modificarusuario.php?ModifiedError");
        return;
    }
}
