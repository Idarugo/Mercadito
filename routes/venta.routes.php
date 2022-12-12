<?php
require '../core/bootstraper.php';
require '../controllers/venta.controller.php';
$venta = new ventaProducto($connectDB);
$codigo = "";


if (isset($_POST['btnagregarCarro'])) {
    if (empty($_POST["txtUsuario"])) {
        echo "<script>
        alert('Su Venta no se agrego al carro de compra correctamente');
        window.location= '../pages/plantdetail.php?txtEmptyError'
        </script>";
        return;
    }
    $cantidad = $venta->consegirCantidad();
    if (is_null($cantidad)) {
        $codigo = $cantidad + 1;
    } else {
        $codigo = $cantidad + 1;
    }
    $venta->registerVenta($codigo, $_POST["txtUsuario"], $_POST["txtPlant"]);
}

if (isset($_POST['btnagregarEnvio'])) {
    if (empty($_POST["txtTotal"]) || empty($_POST["tipoEnvio"]) || empty($_POST["txtDireccion"]) || empty($_POST["txtTipoPago"])) {
        echo "<script>
        alert('Su Venta no se agrego al carro de compra correctamente');
        window.location= '../pages/plantdetail.php?txtEmptyError'
        </script>";
        return;
    }
    $venta->registerEnvio($_POST["txtTotal"], $_POST["tipoEnvio"], $_POST["txtDireccion"], $_POST["txtTipoPago"]);
}

if (isset($_GET['btnElminarVenta'])) {
    $venta->removeVentaListado($_GET["btnElminarVenta"]);
}
