<?php
require '../core/bootstraper.php';
require '../controllers/category.controller.php';
$name = new CategoryController($connectDB);

/*
    *   Get Category
    */
if (isset($_GET['category']) && isset($_GET['route'])) {
    $name->ListCategory($_GET['route']);
}

if (isset($_POST['Category'])) {
    if (empty($_POST["txtId"]) || empty($_POST["Category"])) {
        header("location:  ../pages/modificarproducto.php?txtEmptyError");
        return;
    }
    $name->updateCategory($_POST["txtId"], $_POST["Category"]);
}
