<?php
    require '../core/bootstraper.php';
    require '../controllers/category.controller.php';
    $name = new CategoryController($connectDB);

    /*
    *   Get Category
    */
    if(isset($_GET['category'])){
        $name->ListarCategory($_GET['category']);

         if(isset($_GET['agreProducts'])){
            header("location:  ../pages/agregarproductos.php");
        }
        if(isset($_GET['products'])){
            header("location:  ../pages/products.php");
        }
        if(isset($_GET['listProducts'])){
            header("location:  ../pages/listarproductos.php");
        }

        header("location:  ../pages/products.php");
    }
    
?>