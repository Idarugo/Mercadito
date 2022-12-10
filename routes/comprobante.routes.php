<?php
require '../core/bootstraper.php';
require '../controllers/direccion.controller.php';
require '../controllers/venta.controller.php';
require '../controllers/comprobante.controller.php';


$direccion = new Direccion($connectDB);
$venta = new ventaProducto($connectDB);
$comprobante = new ComprobantePago($connectDB);


if (isset($_POST['btnagregarComprobante'])) {

    if (empty($_POST["txtCodigo"]) || ($_POST["txtImagen"])) {
        echo "<script>
            alert('Su Comprobante no se agrego al carro de compra correctamente');
            window.location= '../pages/plantdetail.php?txtEmptyError'
            </script>";
        return;
    }
    $venta->registerEnvio($_POST["txtCodigo"], $_POST["opciones"]);
    sleep(2);
    $comprobante->registrarComprobante($_POST["txtCodigo"], $_POST["txtImagen"]);
}
