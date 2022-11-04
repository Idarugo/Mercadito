<?php
require '../core/bootstraper.php';
require '../controllers/image_plants.controller.php';
$image = new ImageController($connectDB);

/*
    *   ImageController
    */

if (isset($_POST['btnCrearImagen'])) {
    if (empty($_POST["Product"]) || empty($_FILES["txtImagen1"])  || empty($_FILES["txtImagen2"]) || empty($_FILES["txtImagen3"]) || empty($_FILES["txtImagen4"]) ||  empty($_FILES["txtImagen5"])) {
        header("location:  ../pages/addproductimages.php?txtEmptyError");
        return;
    }
    $image->registerimage($_POST["Product"], $_FILES["txtImagen1"], $_FILES["txtImagen2"], $_FILES["txtImagen3"], $_FILES["txtImagen4"], $_FILES["txtImagen5"]);
}

if (isset($_GET['btnElminarImage'])) {
    $image->removeImage($_GET["btnElminarImage"]);
}
