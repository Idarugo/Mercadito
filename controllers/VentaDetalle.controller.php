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
        $sql = "SELECT venta.codigo, users.nombre as nombre, plants.title as producto, detalle_venta.cantidad, venta.total, tipo_envio.tipo as envio, tipo_pago.tipo as pago, comprobante.imagen FROM venta, users, plants,detalle_venta, tipo_envio, tipo_pago, comprobante WHERE venta.usuario=users.id AND venta.codigo=detalle_venta.cod_vent AND detalle_venta.cod_prod=plants.id AND venta.tipo_envio=tipo_envio.id AND venta.tipo_pago=tipo_pago.id AND comprobante.codigo_venta=venta.codigo ORDER BY codigo ASC";
        $st = $this->connectDB->query($sql);
        while ($rs = mysqli_fetch_array($st)) {
            $venta[] = new VentaInformacion($rs['codigo'], $rs['nombre'], $rs['producto'], $rs['cantidad'], $rs['total'], $rs['envio'], $rs['pago'], $rs['imagen']);;
        }
        $this->connectDB->disconnect();
        return $venta;
    }

    public function listVentaCliente($usuario)
    {
        $venta = array();
        $this->connectDB->connect();
        $sql = "SELECT venta.codigo, users.nombre as nombre, plants.title as producto, detalle_venta.cantidad, venta.total, tipo_envio.tipo as envio, tipo_pago.tipo as pago, comprobante.imagen FROM venta, users, plants,detalle_venta, tipo_envio, tipo_pago, comprobante WHERE venta.usuario=users.id AND venta.codigo=detalle_venta.cod_vent AND detalle_venta.cod_prod=plants.id AND venta.tipo_envio=tipo_envio.id AND venta.tipo_pago=tipo_pago.id AND comprobante.codigo_venta=venta.codigo and venta.usuario=$usuario ORDER BY codigo ASC";
        //$sql = "SELECT venta.codigo, users.nombre as nombre, plants.title as producto, detalle_venta.cantidad, venta.total, tipo_envio.tipo as envio, tipo_pago.tipo as pago, comprobante.imagen FROM venta, users, plants,detalle_venta, tipo_envio, tipo_pago, comprobante WHERE venta.usuario=users.id AND venta.codigo=detalle_venta.cod_vent AND detalle_venta.cod_prod=plants.id AND venta.tipo_envio=tipo_envio.id AND venta.tipo_pago=tipo_pago.id AND comprobante.codigo_venta=venta.codigo AND venta.usuario=$usuario ORDER BY codigo ASC";
        $st = $this->connectDB->query($sql);
        while ($rs = mysqli_fetch_array($st)) {
            $venta[] = new VentaInformacion($rs['codigo'], $rs['nombre'], $rs['producto'], $rs['cantidad'], $rs['total'], $rs['envio'], $rs['pago'], $rs['imagen']);;
        }
        $this->connectDB->disconnect();
        return $venta;
    }
}
