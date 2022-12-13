<?php
require '../core/bootstraper.php';
require '../controllers/tipo_pago.controller.php';
$pago = new TipoDePago($connectDB);

/*
    *   PlantController
    */

if (isset($_POST['btnagregarPago'])) {
    if (empty($_POST["txtEnvio"])) {
        echo "<script>
        alert('El pago no se realizo correctamente');
        window.location= '../pages/plantdetail.php?txtEmptyError'
        </script>";
        return;
    }
    $pago->registrarpago($_POST["txtEnvio"]);
}
