<?php
    require '../core/bootstraper.php';
    require '../controllers/blog.controller.php';
    $blog = new BlogController( $connectDB );

    /*
    *   Register
    */
    if(isset($_POST['btnCrearBlog'])){
        if(empty($_POST["txtImagen"]) || empty($_POST["txtNombre"]) || empty($_POST["txtDetalle"]) || empty($_POST["txtFecha"])){
            header("location:  ../pages/agregarblog.php?txtEmptyError");
            return;
        }
        $blog->register($_POST["txtImagen"],$_POST["txtNombre"],$_POST["txtDetalle"],$_POST["txtFecha"]);
    }
?>