<?php
require '../core/bootstraper.php';
require '../controllers/plant.controller.php';
require '../controllers/blog.controller.php';
require '../controllers/user.controller.php';
require '../controllers/venta.controller.php';
require '../controllers/book_time.controller.php';


$producController = new PlantController($connectDB);
$produc = $producController->productosId();

$blogController = new BlogController($connectDB);
$blog = $blogController->blogId();

$usersController = new UserController($connectDB);
$user = $usersController->UserId();

$ventaController = new ventaProducto($connectDB);
$venta = $ventaController->VentaId();

$ReservaController = new bookTimeController($connectDB);
$reserva = $ReservaController->ReservaId();

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <?php include '../components/head.php' ?>
    <link rel="stylesheet" href="../assets/styles/main.css">
    <link rel="stylesheet" href="../assets/styles/pages/listadoreporte.css">
</head>

<body>
    <?php include '../components/header.php' ?>
    <div class="container container-main">
        <h1>Conteo de Mercadito</h1>

        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="../pages/listarproductos.php">Lista de Producto</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../pages/listarblog.php">Lista de Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../pages/listarusuario.php">Lista de Usuario</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../pages/listimages.php">Lista de Foto</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="../pages/listarbook.php">Listado de Reserva</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../pages/shoppinglistadm.php">Listado de Compra</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="../pages/listadoreporte.php">Reportes</a>
            </li>
        </ul>

        <form class="row g-3 justify-center mb-3">
            <div class="card text-white bg-primary mb-3" style="max-width: 18rem; left: 20px;">
                <div class="card-header">Cantidad de Producto</div>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $produc; ?> Productos </h5>
                    <img class="img-conteo" src="../assets/images/Conteo/producto.png">
                </div>
            </div>
            <div class="card text-white bg-secondary mb-3" style="max-width: 18rem; left: 30px; right: 10px;">
                <div class="card-header">Total de Blog</div>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $blog; ?> Blog </h5>
                    <img class="img-conteo" src="../assets/images/Conteo/blog.png">
                </div>
            </div>
            <div class="card text-white bg-success mb-3" style="max-width: 18rem; left: 40px;">
                <div class="card-header">Total de Usuario</div>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $user; ?> Usuarios</h5>
                    <img class="img-conteo" src="../assets/images/Conteo/usuario.png">
                </div>
            </div>
            <div class="card text-white bg-danger mb-3" style="max-width: 18rem; left: 50px;">
                <div class="card-header">Productos Vendido</div>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $venta; ?> Producto Vendido</h5>
                    <img class="img-conteo" src="../assets/images/Conteo/vendido.png">
                </div>
            </div>
            <div class="card text-white bg-warning mb-3" style="max-width: 18rem; left: 20px;">
                <div class="card-header">Reserva de Vivero</div>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $reserva; ?> Visitas</h5>
                    <img class="img-conteo" src="../assets/images/Conteo/reserva.png">
                </div>
            </div>

            <div class="col-12  justify-content-center" style="text-align: center;">
                <a href="./perfil.php"><button type="button" class="btn btn-outline-success">
                        < Volver</button>
            </div>
        </form>
    </div>
    <?php include '../components/footer.php' ?>
</body>

</html>