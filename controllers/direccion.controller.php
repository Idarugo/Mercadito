<?php
require '../models/Direccion.php';

class Direccion
{

    private $connectDB;

    function __construct($connectDB)
    {
        $this->connectDB = $connectDB;
    }

    public function selectDireccion($cod_venta)
    {
        $lista = array();
        $this->connectDB->connect();
        $sql = "SELECT id, cod_venta, nombre, direccion, comuna, telefono, observacion FROM direccion Where cod_venta=cod_venta ORDER BY id ASC  ";
        $st = $this->connectDB->query($sql);
        while ($rs = mysqli_fetch_array($st)) {
            $lista[] = new DireccionEnvio($rs['id'], $rs['cod_venta'], $rs['nombre'], $rs['direccion'], $rs['comuna'], $rs['telefono'], $rs['observacion']);;
        }
        $this->connectDB->disconnect();
        return $lista;
    }

    public function registerDirecion($cod_venta, $nombre, $direccion, $comuna, $telefono, $observacion)
    {
        $this->connectDB->connect();
        $sql = "INSERT INTO `direccion`( `cod_venta`, `nombre`, `direccion`, `comuna`, `telefono`, `observacion`) VALUES ($cod_venta,'$nombre','$direccion','$comuna','$telefono','$observacion')";
        $this->connectDB->query($sql);
        if ($this->connectDB->getDB()->affected_rows) {
            $this->connectDB->disconnect();
            header("location:  ../pages/tipodepago.php?venta=$cod_venta");
            return;
        }
        $this->connectDB->disconnect();
        header("location:  ../pages/tiendaonline.php?RegisterError");
        return;
    }
}
