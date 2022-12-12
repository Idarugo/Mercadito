<?php
require '../models/DetalleVentaEnvio.php';

class DetalleVentaEnvio
{

    private $connectDB;

    function __construct($connectDB)
    {
        $this->connectDB = $connectDB;
    }

    public function selectDetalleVenta($venta)
    {
        $lista = array();
        $this->connectDB->connect();
        $sql = "SELECT detalle_venta.id, plants.image as imagen, plants.title as titulo, plants.price as precio,plants.cant as cantidad_prod, venta.codigo, cantidad, detalle_venta.total,direccion.nombre,direccion.direccion,direccion.comuna,direccion.telefono,tipo_envio.tipo FROM detalle_venta , plants , venta,direccion,tipo_envio WHERE detalle_venta.cod_prod=plants.id AND detalle_venta.cod_vent=venta.codigo AND direccion.cod_venta=venta.codigo and tipo_envio.id=venta.tipo_envio and venta.codigo=$venta ORDER BY `id` ASC  ";
        $st = $this->connectDB->query($sql);
        while ($rs = mysqli_fetch_array($st)) {
            $lista[] = new detalleVEnvio($rs['id'], $rs['imagen'], $rs['titulo'], $rs['precio'], $rs['cantidad_prod'], $rs['codigo'], $rs['cantidad'], $rs['total'], $rs['nombre'], $rs['direccion'], $rs['comuna'], $rs['telefono'], $rs['tipo']);;
        }
        $this->connectDB->disconnect();
        return $lista;
    }
}
