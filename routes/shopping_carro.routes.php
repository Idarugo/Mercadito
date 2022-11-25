<?php
require '../core/bootstraper.php';
require '../controllers/shopping_carro.controller.php';
$shoppingcant = new ShoppingCarro($connectDB);

/*
    *   PlantController
    */

if (isset($_GET['btnQuitarProducto'])) {
    $shoppingcant->removeProducto($_GET["btnQuitarProducto"]);
}
