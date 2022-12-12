<?php
require '../core/bootstraper.php';
require '../controllers/comprobante.controller.php';
require '../controllers/venta.controller.php';


$comprobante = new ComprobantePago($connectDB);
$venta = new ventaProducto($connectDB);


if (isset($_POST['btnagregarPago'])) {

    //echo $_POST["opciones"];
    //echo ("</br>");
    //echo $_POST["txtCodigo"];
    //echo ("</br>");
    //echo $_FILES["txtImagen"];

    if ($_POST["opciones"] == "1") {
        if (empty($_POST["txtCodigo"]) || empty($_FILES["txtImagen"])) {
            echo "<script>
                alert('Su Comprobante no se agrego correctamente');
                window.location= '../pages/plantdetail.php?txtEmptyError'
                </script>";
            return;
        }
        $venta->registerPago($_POST["txtCodigo"], $_POST["opciones"]);
        $venta->registerTotal($_POST["txtCodigo"], $_POST["txtTotal"]);
        $comprobante->registrarComprobante($_POST["txtCodigo"], $_FILES["txtImagen"]);
    } elseif ($_POST["opciones"] == "2") {
        $venta->registerPago($_POST["txtCodigo"], $_POST["opciones"]);
        $venta->registerTotal($_POST["txtCodigo"], $_POST["txtTotal"]);
        $comprobante->registrarComprobante($_POST["txtCodigo"], $_FILES["txtImagen"]);
    }
}
