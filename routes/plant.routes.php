<?php
    require '../core/bootstraper.php';
    require '../controllers/auth.controller.php';
    $plant = new PlantController( $connectDB );

    /*
    *   Get Plants
    */
    if(isset($_GET['category'])){
        $plant->get($_GET['category']);

        if(isset($_GET['products'])){
            header("location:  ../pages/products.php");
        }
        if(isset($_GET['listProducts'])){
            header("location:  ../pages/listarproductos.php");
        }
        if(isset($_GET['listProducts'])){
            header("location:  ../pages/agregarproductos.php");
        }

        header("location:  ../pages/products.php");
    }

    /*
    *   Get Plant
    */
    if(isset($_GET['getPlant'])){
        $plant->getPlant($_GET['id']);

        if(isset($_GET['products'])){
            header("location:  ../pages/products.php");
        }
        if(isset($_GET['listProducts'])){
            header("location:  ../pages/listarproductos.php");
        }
        
        header("location:  ../pages/products.php");
    }
    
?>