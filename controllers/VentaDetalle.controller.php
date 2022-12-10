<?php

require '../models/VentaDetalle.php';


class ventaDetalle
{

    private $connectDB;

    function __construct($connectDB)
    {
        $this->connectDB = $connectDB;
    }
    public function listVenta()
    {
        $venta = array();
        $this->connectDB->connect();
        $sql = "SELECT venta.codigo, plants.title as producto , plants.cant as cantidad, users.nombre as nombre, total, tipo_envio.tipo as envio, tipo_pago.tipo as pago FROM venta, plants, users, tipo_envio, tipo_pago WHERE venta.codigo=plants.cant  AND venta.codigo=plants.title AND venta.usuario=users.id AND venta.tipo_envio=tipo_envio.id AND venta.tipo_pago=tipo_pago.id ORDER BY codigo ASC";
        $st = $this->connectDB->query($sql);
        while ($rs = mysqli_fetch_array($st)) {
            $venta[] = new VentaInformacion($rs['codigo'], $rs['producto'], $rs['cantidad'], $rs['nombre'], $rs['total'], $rs['envio'], $rs['pago']);;
        }
        $this->connectDB->disconnect();
        return $venta;
    }
}
