<?php
    require '../core/bootstraper.php';
    require '../controllers/category.controller.php';
    $name = new CategoryController($connectDB);

    /*
    *   Get Category
    */
    if(isset($_GET['category']) && isset($_GET['route'])){
        $name->ListarCategory($_GET['route']);
    }
    
?>