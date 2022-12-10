<?php
require '../core/bootstraper.php';
require '../controllers/direccion.controller.php';
require '../controllers/venta.controller.php';

$direccion = new Direccion($connectDB);
$venta = new ventaProducto($connectDB);

if (isset($_POST['btnagregarDireecion'])) {

    //echo $_POST["opciones"];
    //echo ("</br>");
    //echo $_POST["txtCodigo"];
    //echo ("</br>");
    //echo $_POST["txtNombre"];
    //echo ("</br>");
    //echo $_POST["txtDireccion"];
    //echo ("</br>");
    //echo $_POST["txtComuna"];
    //echo ("</br>");
    //echo $_POST["txtTelefono"];
    //echo ("</br>");
    //echo $_POST["txtObservacion"];
    if ($_POST["opciones"] == "1") {
        if (empty($_POST["txtCodigo"]) || empty($_POST["txtNombre"]) || empty($_POST["txtDireccion"]) || empty($_POST["txtComuna"]) || empty($_POST["txtTelefono"]) || empty($_POST["txtObservacion"])) {
            echo "<script>
                alert('Su Direccion no se agrego al carro de compra correctamente');
                window.location= '../pages/plantdetail.php?txtEmptyError'
                </script>";
            return;
        }
        $venta->registerEnvio($_POST["txtCodigo"], $_POST["opciones"]);
        $direccion->registerDirecion($_POST["txtCodigo"], $_POST["txtNombre"], $_POST["txtDireccion"], $_POST["txtComuna"], $_POST["txtTelefono"], $_POST["txtObservacion"]);
    } elseif ($_POST["opciones"] == "2") {
        $venta->registerEnvio($_POST["txtCodigo"], $_POST["opciones"]);
        $direccion->registerDirecion($_POST["txtCodigo"], "La Rubiana", "La Gozalina 3919", "Rancagua", "+56999066039", "Porton Grande de Madera");
    }
}
