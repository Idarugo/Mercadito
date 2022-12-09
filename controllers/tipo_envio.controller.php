<?php
require '../models/TipoEnvio.php';

class TipoDeEnvio
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
        $sql = "SELECT id, tipo FROM tipo_pago ORDER BY id ASC  ";
        $st = $this->connectDB->query($sql);
        while ($rs = mysqli_fetch_array($st)) {
            $lista[] = new TipoEnvio($rs['id'], $rs['tipo']);;
        }
        $this->connectDB->disconnect();
        return $lista;
    }

    public function registerenvio($tipo, $cod_venta)
    {
        $this->connectDB->connect();
        $sql = "INSERT INTO `tipo_pago`(`tipo`) VALUES ('$tipo')";
        $this->connectDB->query($sql);
        if ($this->connectDB->getDB()->affected_rows) {
            $this->connectDB->disconnect();
            header("location:  ../pages/comprobanteproducto.php?venta=$cod_venta");
            return;
        }
        $this->connectDB->disconnect();
        header("location:  ../pages/plantdetail.php?RegisterError");
        return;
    }

    public function removeVenta($id)
    {
        $this->connectDB->connect();
        $sql = "DELETE FROM `tipo_pago` WHERE id = id";
        $st = $this->connectDB->query($sql);
        $this->connectDB->disconnect();
        header("location:  ../pages/carrodecompra.php?id=$id");
        return;
    }
}
