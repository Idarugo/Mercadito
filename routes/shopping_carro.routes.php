<?php
require '../core/bootstraper.php';
require '../controllers/shopping_carro.controller.php';
$shoppingcant = new ShoppingCarrito2($connectDB);

/*
    *   PlantController
    */


if (isset($_GET['btnQuitarProducto'])) {
    $shoppingcant->removeProducto($_GET["btnQuitarProducto"]);
}


if (isset($_POST['btmmodcarrodecompra'])) {
    if (empty($_POST["txtId"]) || empty($_POST["txtUser"])  || empty($_POST["txtCant"])) {
        header("location:  ../pages/carrodecompra.php?txtEmptyError");
        return;
    }
    $shoppingcant->updateCarro($_POST["txtId"], $_POST["txtUser"], $_POST["txtCant"]);
}
