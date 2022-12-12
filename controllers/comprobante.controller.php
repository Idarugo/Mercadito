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
        $image1 = addslashes(file_get_contents($imagen['tmp_name']));
        $sql = "INSERT INTO `comprobante`(`codigo_venta`, `imagen`) VALUES ($cod_venta,'$image1')";
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
