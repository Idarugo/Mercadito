<?php
require '../core/bootstraper.php';
require '../controllers/blog.controller.php';
$blog = new BlogController($connectDB);

/*
    *   Register
    */
if (isset($_POST['btnCrearBlog'])) {
    if (empty($_FILES["txtImagen"]) || empty($_POST["txtNombre"]) || empty($_POST["txtDetalle"]) || empty($_POST["txtFecha"])) {
        header("location:  ../pages/agregarblog.php?txtEmptyError");
        return;
    }
    $blog->register($_FILES["txtImagen"], $_POST["txtNombre"], $_POST["txtDetalle"], $_POST["txtFecha"]);
}

if (isset($_POST['btnModificarBlog'])) {
    if (empty($_POST["txtId"]) || empty($_FILES["txtImagen"]) || empty($_POST["txtNombre"]) || empty($_POST["txtDetalle"])  || empty($_POST["txtFecha"])) {
        header("location:  ../pages/modificarusuario.php?txtEmptyError");
        return;
    }
    $blog->updateBlog($_POST["txtId"], $_FILES["txtImagen"], $_POST["txtNombre"], $_POST["txtDetalle"], $_POST["txtFecha"]);
}
