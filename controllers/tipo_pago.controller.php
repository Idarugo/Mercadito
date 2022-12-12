<?php
require '../models/TipoPago.php';

class TipoDePago
{

    private $connectDB;

    function __construct($connectDB)
    {
        $this->connectDB = $connectDB;
    }

    public function selectVenta()
    {
        $lista = array();
        $this->connectDB->connect();
        $sql = "SELECT id, tipo FROM tipo_envio ORDER BY id ASC  ";
        $st = $this->connectDB->query($sql);
        while ($rs = mysqli_fetch_array($st)) {
            $lista[] = new TipoPago($rs['id'], $rs['tipo']);;
        }
        $this->connectDB->disconnect();
        return $lista;
    }

    public function registrarpago($tipo)
    {
        $this->connectDB->connect();
        $sql = "INSERT INTO `tipo_envio`(`tipo`) VALUES ('$tipo')";
        $this->connectDB->query($sql);
        if ($this->connectDB->getDB()->affected_rows) {
            $this->connectDB->disconnect();
            header("location:  ../pages/comprobanteproducto.php?created");
            return;
        }
        $this->connectDB->disconnect();
        header("location:  ../pages/plantdetail.php?RegisterError");
        return;
    }

    public function removeVenta($id)
    {
        $this->connectDB->connect();
        $sql = "DELETE FROM `tipo_envio` WHERE id = id";
        $st = $this->connectDB->query($sql);
        $this->connectDB->disconnect();
        header("location:  ../pages/carrodecompra.php?id=$id");
        return;
    }
}
