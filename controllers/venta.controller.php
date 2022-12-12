<?php
require '../models/Venta.php';

class ventaProducto
{

    private $connectDB;

    function __construct($connectDB)
    {
        $this->connectDB = $connectDB;
    }

    public function VentaId()
    {
        $this->connectDB->connect();
        $sql = "SELECT COUNT(codigo) as cantidad FROM venta";
        $st = $this->connectDB->query($sql);
        $val = mysqli_fetch_assoc($st);
        $this->connectDB->disconnect();
        return $val["cantidad"];
    }

    public function consegirCantidad()
    {
        $this->connectDB->connect();
        $sql = "select  count(*) as cantidad FROM `venta`";
        $st = $this->connectDB->query($sql);
        $val = mysqli_fetch_assoc($st);
        $this->connectDB->disconnect();
        return $val["cantidad"];
    }


    public function getVentaById($cod_venta)
    {
        $venta = "";
        $this->connectDB->connect();
        $sql = "SELECT * FROM `venta` WHERE `codigo`= $cod_venta";
        $st = $this->connectDB->query($sql);
        while ($rs = mysqli_fetch_array($st)) {
            $venta = new Venta($rs['codigo'], $rs['usuario'], $rs['total'], $rs['tipo_envio'], $rs['tipo_pago']);;
        }
        $this->connectDB->disconnect();
        return $venta;
    }

    public function selectVenta()
    {
        $lista = array();
        $this->connectDB->connect();
        $sql = "SELECT codigo, usuario, total, tipo_envio, direccion, tipo_pago FROM venta ORDER BY id ASC  ";
        $st = $this->connectDB->query($sql);
        while ($rs = mysqli_fetch_array($st)) {
            $lista[] = new Venta($rs['id'], $rs['imagen'], $rs['titulo'], $rs['precio'], $rs['precio'], $rs['cantidad_prod'], $rs['cod_vent'], $rs['cantidad'], $rs['total']);;
        }
        $this->connectDB->disconnect();
        return $lista;
    }

    public function generaridCompra()
    {
        $this->connectDB->connect();
        $sql = "SELECT * FROM `venta`";
        $this->connectDB->query($sql);
        if ($this->connectDB->getDB()->affected_rows) {
            $this->connectDB->disconnect();
            return;
        }
        $this->connectDB->disconnect();
        header("location:  ../pages/tiendaonline.php?RegisterError");
        return;
    }


    public function registerVenta($codigo, $usuario, $product)
    {
        $this->connectDB->connect();
        $sql = "INSERT INTO `venta`(`codigo`,`usuario`) VALUES ($codigo,$usuario)";
        $this->connectDB->query($sql);
        if ($this->connectDB->getDB()->affected_rows) {
            $this->connectDB->disconnect();
            header("location:  ../pages/carrodecompra.php?codigo=$codigo&product=$product");

            return;
        }
        $this->connectDB->disconnect();
        header("location:  ../pages/tiendaonline.php?RegisterError");
        return;
    }

    public function registerDetalleVenta($cod_pro, $cod_venta, $cantidad, $total)
    {
        $this->connectDB->connect();
        $sql = "INSERT INTO `detalle_venta`( `cod_prod`, `cod_vent`, `cantidad`, `total) VALUES ('$cod_pro','$cod_venta','$cantidad','$total')";
        $this->connectDB->query($sql);
        if ($this->connectDB->getDB()->affected_rows) {
            $this->connectDB->disconnect();
            header("location:  ../pages/carrodecompra.php?created");
            return;
        }
        $this->connectDB->disconnect();
        header("location:  ../pages/plantdetail.php?RegisterError");
        return;
    }

    public function registerEnvio($codigo, $tipo_envio)
    {
        $this->connectDB->connect();
        $sql = "UPDATE `venta` SET `tipo_envio`=$tipo_envio WHERE codigo=$codigo";
        $this->connectDB->query($sql);
        if ($this->connectDB->getDB()->affected_rows) {
            $this->connectDB->disconnect();
        }
        $this->connectDB->disconnect();
    }

    public function registerPago($codigo, $tipo_pago)
    {
        $this->connectDB->connect();
        $sql = "UPDATE `venta` SET `tipo_pago`=$tipo_pago WHERE codigo=$codigo";
        $this->connectDB->query($sql);
        if ($this->connectDB->getDB()->affected_rows) {
            $this->connectDB->disconnect();
        }
        $this->connectDB->disconnect();
    }

    public function registerTotal($codigo, $total)
    {
        $this->connectDB->connect();
        $sql = "UPDATE `venta` SET `total`=$total WHERE codigo=$codigo";
        $this->connectDB->query($sql);
        if ($this->connectDB->getDB()->affected_rows) {
            $this->connectDB->disconnect();
        }
        $this->connectDB->disconnect();
    }

    public function removeVenta($id)
    {
        $this->connectDB->connect();
        $sql = "DELETE FROM `venta` WHERE id = id";
        $st = $this->connectDB->query($sql);
        $this->connectDB->disconnect();
        header("location:  ../pages/carrodecompra.php?id=$id");
        return;
    }

    public function removeVentaListado($id)
    {
        $this->connectDB->connect();
        $sql = "DELETE FROM `venta` WHERE id=$id";
        $st = $this->connectDB->query($sql);
        $this->connectDB->disconnect();
        header("location:  ../pages/listadoCompra.php?removedCompra");
        return;
    }
}
