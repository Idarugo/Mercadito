<?php
require '../core/bootstraper.php';
require '../controllers/shopping_cant.controller.php';
$shopping = new ShoppingCarrito($connectDB);

/*
    *   PlantController
    */

if (isset($_POST['btnagregarCarro'])) {
    if (empty($_POST["txtUser"])  || empty($_POST["txtPlant"]) || empty($_POST["txtCant"])) {
        echo "<script>
        alert('Producto no agregado correctamente');
        window.location= '../pages/plantdetail.php?txtEmptyError'
        </script>";
        return;
    }
    $shopping->registerShopping($_POST["txtUser"], $_POST["txtPlant"], $_POST["txtCant"]);
}
