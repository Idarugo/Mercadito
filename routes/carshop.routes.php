<?php
require '../core/bootstraper.php';
require '../controllers/carshop.controller.php';
$carshop = new CarshopController($connectDB);

/*
    *   Get Category
    */

if (isset($_POST['btnCrearCarshop'])) {
    if (empty($_POST["txtTitle"])  || empty($_POST["txtDescripcion"])  ||  empty($_POST["txtCant"])  || empty($_POST["txtSubtotal"]) || empty($_POST["txtShopping"])) {
        header("location:  ../pages/carrodecompra.php?txtEmptyError");
        return;
    }
    $carshop->registerCarshop($_POST["txtTitle"], $_POST["txtDescripcion"], $_POST["txtCant"], $_POST["txtSubtotal"], $_POST["txtShopping"]);
}
