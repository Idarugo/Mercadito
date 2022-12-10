<?php
require '../models/Comprobante.php';

class ComprobantePago
{

    private $connectDB;

    function __construct($connectDB)
    {
        $this->connectDB = $connectDB;
    }

    public function registrarComprobante($cod_venta, $imagen)
    {
        $this->connectDB->connect();
        $sql = "INSERT INTO `comprobante`( `cod_venta`, `imagen`) VALUES ('$cod_venta','$imagen')";
        $this->connectDB->query($sql);
        if ($this->connectDB->getDB()->affected_rows) {
            $this->connectDB->disconnect();
            header("location:  ../pages/comprobanteproducto.php?venta=$cod_venta");
            return;
        }
        $this->connectDB->disconnect();
        header("location:  ../pages/tiendaonline.php?RegisterError");
        return;
    }
}
