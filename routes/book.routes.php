<?php
require '../core/bootstraper.php';
require '../controllers/book_time.controller.php';
$book = new bookTimeController($connectDB);

/*
    *   Register
    */
if (isset($_POST['btnCrearBook'])) {
    if (empty($_POST["txtDia"]) || empty($_POST["txtHora"]) || empty($_POST["txtNombre"]) || empty($_POST["txtEmail"]) || empty($_POST["txtTelefono"])) {
        header("location:  ../pages/servicio.php?txtEmptyError");
        return;
    }
    $book->register($_POST["txtDia"], $_POST["txtHora"], $_POST["txtNombre"], $_POST["txtEmail"], $_POST["txtTelefono"]);
}

if (isset($_POST['btnModificarBook'])) {
    if (empty($_POST["txtId"]) || empty($_POST["txtDia"]) || empty($_POST["txtHora"]) || empty($_POST["txtNombre"]) || empty($_POST["txtEmail"]) || empty($_POST["txtTelefono"])) {
        header("location:  ../pages/editblog.php?txtEmptyError");
        return;
    }
    $book->updateBook($_POST["txtId"], $_POST["txtDia"], $_POST["txtHora"], $_POST["txtNombre"], $_POST["txtEmail"], $_POST["txtTelefono"]);
}
