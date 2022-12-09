<?php
require '../models/DetalleVenta.php';

class DetalleV
{

    private $connectDB;

    function __construct($connectDB)
    {
        $this->connectDB = $connectDB;
    }

    public function selectDetalleVenta($codigo)
    {
        $lista = array();
        $this->connectDB->connect();
        $sql = "SELECT detalle_venta.id, plants.image as imagen, plants.title as titulo, plants.price as precio,plants.cant as cantidad_prod, venta.codigo, cantidad, detalle_venta.total FROM detalle_venta , plants , venta WHERE detalle_venta.cod_prod=plants.id AND detalle_venta.cod_prod=plants.id AND detalle_venta.cod_prod=plants.id AND detalle_venta.cod_prod=plants.id AND detalle_venta.cod_vent=venta.codigo  ORDER BY `id` ASC  ";
        $st = $this->connectDB->query($sql);
        while ($rs = mysqli_fetch_array($st)) {
            $lista[] = new DetalleVenta($rs['id'], $rs['imagen'], $rs['titulo'], $rs['precio'], $rs['cantidad_prod'], $rs['codigo'], $rs['cantidad'], $rs['total']);;
        }
        $this->connectDB->disconnect();
        return $lista;
    }

    public function registerDetalleVenta($cod_pro, $cod_venta, $cantidad, $precio)
    {
        $total = round(($precio * $cantidad), 0);
        $this->connectDB->connect();
        $sql = "INSERT INTO `detalle_venta`(`cod_prod`, `cod_vent`, `cantidad`, `total`) VALUES ('$cod_pro','$cod_venta','$cantidad','$total')";
        $this->connectDB->query($sql);
        if ($this->connectDB->getDB()->affected_rows) {
            $this->connectDB->disconnect();
            header("location:  ../pages/tipodeenvio.php?venta=$cod_venta");
            return;
        }
        $this->connectDB->disconnect();
        header("location:  ../pages/plantdetail.php?RegisterError");
        return;
    }



    public function removeProducto()
    {
        $this->connectDB->connect();
        $sql = "DELETE FROM `detalle_venta` WHERE id  = id";
        $st = $this->connectDB->query($sql);
        $this->connectDB->disconnect();
        header("location:  ../pages/tiendaonline.php");
        return;
    }

    public function updateCarro($id, $user, $cant)

    {
        $this->connectDB->connect();
        $sql = "UPDATE `detalle_venta` SET `users`='$user',`quantity`='$cant' WHERE `id`='$id'";
        $this->connectDB->query($sql);
        if ($this->connectDB->getDB()->affected_rows) {
            $this->connectDB->disconnect();
            header("location:  ../pages/shippinginformation.php?user=$user");
            return;
        }
        $this->connectDB->disconnect();
        //header("location:  ../pages/modificarusuario.php?ModifiedError");
        return;
    }
}
