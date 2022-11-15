<?php
require '../core/bootstraper.php';
require '../controllers/carshop.controller.php';
$carshop = new CarshopController($connectDB);

/*
    *   Get Category
    */

if (isset($_POST['btnCrearCarshop'])) {
    if (empty($_POST["txtTitle"])  ||  empty($_POST["txtCant"])  || empty($_POST["txtPrice"])  || empty($_POST["txtSubtotal"])) {
        header("location:  ../pages/carrodecompra.php?txtEmptyError");
        return;
    }
    $carshop->registerCarshop($_POST["txtTitle"], $_POST["txtCant"], $_POST["txtPrice"], $_POST["txtSubtotal"]);
}
