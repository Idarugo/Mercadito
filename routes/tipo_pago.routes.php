<?php
require '../core/bootstraper.php';
require '../controllers/tipo_pago.controller.php';
$pago = new TipoPago($connectDB);

/*
    *   PlantController
    */

if (isset($_POST['btnagregarPago'])) {
    if (empty($_POST["txtEnvio"])) {
        echo "<script>
        alert('Su Direccion no se agrego al carro de compra correctamente');
        window.location= '../pages/plantdetail.php?txtEmptyError'
        </script>";
        return;
    }
    $pago->registrarpago($_POST["txtEnvio"]);
}
