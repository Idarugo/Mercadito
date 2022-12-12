<?php
require '../core/bootstraper.php';
require '../controllers/detalle_venta.controller.php';
$detalleventa = new DetalleV($connectDB);


if (isset($_POST['btnagregarCarro'])) {

    if (empty($_POST["txtProducto"]) || empty($_POST["txtCodigo"]) || empty($_POST["txtCantidad"]) || empty($_POST["txtPrice"])) {
        echo "<script>
        alert('Su Producto no se agrego al carro de compra correctamente');
        window.location= '../pages/plantdetail.php?txtEmptyError'
        </script>";
        return;
    }
    $detalleventa->registerDetalleVenta($_POST["txtProducto"], $_POST["txtCodigo"], $_POST["txtCantidad"], $_POST["txtPrice"]);
}



if (isset($_GET['btnQuitarProducto'])) {
    $detalleventa->removeProducto($_GET["btnQuitarProducto"]);
}
