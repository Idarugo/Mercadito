<?php
require '../core/bootstraper.php';
require '../controllers/tipo_envio.controller.php';
$envio = new TipoDeEnvio($connectDB);

/*
    *   PlantController
    */

if (isset($_POST['btnagregarEnvio'])) {
    if (empty($_POST["txtEnvio"]) || ($_POST["txtVenta"])) {
        echo "<script>
        alert('El envio no se registro correctamente');
        window.location= '../pages/plantdetail.php?txtEmptyError'
        </script>";
        return;
    }
    $envio->registerenvio($_POST["txtEnvio"], $_POST["txtVenta"]);
}
