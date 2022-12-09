<?php
require '../core/bootstraper.php';
require '../controllers/blog.controller.php';

$blog = new BlogController($connectDB);
$blogs = $blog->getBlogs();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <?php include '../components/head.php' ?>
    <link rel="stylesheet" href="../assets/styles/main.css">
    <link rel="stylesheet" href="../assets/styles/pages/blog.css">
</head>

<body>
    <?php include '../components/header.php' ?>
    <div class="container mb-4">
    </div>
    <section class="container-fluid banner">
        <div class="banner__img"></div>
        <h1 class="text-banner">SE SIENTE COMO EN CASA</h1>
        <p class="text-banner"> EL HOGAR ES DONDE ESTÁN LAS PLANTAS </p>
    </section>

    <div class="container container-main  mt-5">

        <?php
        if (count($blogs) == 0) {
            echo '<a href="../pages/products.php"><img class="img_mensaje" src="../assets/images/categories/no-hay-producto.png"></a>';
        }
        for ($i = 0; $i < count($blogs); $i++) {
            echo '
            <div class="blogs container text-center mt-5">
            <div class="card-group">
                <div class="card">
                    <img src="data:imagen/jpg;base64,' . base64_encode($blogs[$i]->getImagen()) . '" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">' . $blogs[$i]->getNombre() . '</h5>
                        <p class="card-text">' . $blogs[$i]->getDetalle() . '</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">' . $blogs[$i]->getFecha() . '</small>
                    </div>
                </div>
            </div>
        </div>

            ';
        }
        ?>



    </div>
    <?php include '../components/footer.php' ?>
</body>

</html>