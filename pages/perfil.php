<!DOCTYPE html>
<html lang="es">

<head>
    <?php include '../components/head.php' ?>
    <link rel="stylesheet" href="../assets/styles/main.css">
    <link rel="stylesheet" href="../assets/styles/pages/perfil.css">
</head>

<body>
    <?php include '../components/header.php' ?>
    <div class="container container-main gx-5">
        <h1>Mi cuenta</h1>
        <p>Bienvenid@!. Aquí puedes gestionar tu información personal y pedidos.</p>

        <div class="container overflow-hidden text-center">
            <div class="row gx-5">
                <div class="col">
                    <h3>Registro</h3>
                    <a class="btn btn-primary col-md-7 mb-3" href="../pages/agregarproductos.php" role="button">Añadir un producto</a>
                    <a class="btn btn-primary col-md-7 mb-3"" href=" ../pages/agregarblog.php" role="button">Añadir Blog</a>
                    <a class="btn btn-primary col-md-7 mb-3"" href=" ../pages/addproductimages.php" role="button">Añadir Imagenes Productos</a>
                    <h3>Listados</h3>
                    <a class="btn btn-primary col-md-7 mb-3"" href=" ../pages/listarproductos.php" role="button">Lista de Producto</a>
                    <a class="btn btn-primary col-md-7 mb-3"" href=" ../pages/listarblog.php" role="button">Lista de Blog</a>
                    <a class="btn btn-primary col-md-7 mb-3"" href=" ../pages/listarusuario.php" role="button">Lista de Usuario</a>
                    <a class="btn btn-primary col-md-7 mb-3"" href=" ../pages/listimages.php" role="button">Lista de imágenes de productos</a>


                </div>
                <div class="col">
                    <h3>Detalles de la cuenta</h3>
                    <center><img class="fotoperfil rounded-circle" src="data:imagen/jpg;base64,<?php echo base64_encode($user->getImagen()); ?>"></center>
                    <h5><?php echo $user->getNombre(); ?></h5>
                    <h5><?php echo $user->getCorreo(); ?></h5>
                    <h5>******</h5>
                    <a class="btn btn-primary" href="./modificarusuario.php" role="button">Modificar Cuenta</a>
                </div>
            </div>
        </div>
    </div>


    <h1>Mi cuenta</h1>
    <div class="row">
        <a class="btn btn-primary col-md-2 offset-md-5" href="/routes/auth.routes.php?logout" role="button">Cerrar Sesión</a>
    </div>

    <div class="container overflow-hidden text-center">
        <div class="row gx-5">
            <div class="col">
                <h3>Historial de pedidos</h3>
                <h5>No ha realizado algún pedido aún.</h5>

            </div>
            <div class="col">
                <h3>Detalles de la cuenta</h3>
                <center><img class="fotoperfil rounded-circle" src="data:imagen/jpg;base64,<?php echo base64_encode($user->getImagen()); ?>"></center>
                <h5><?php echo $user->getNombre(); ?></h5>
                <h5><?php echo $user->getCorreo(); ?></h5>
                <h5>******</h5>
                <a class="btn btn-primary" href="./modificarusuario.php" role="button">Modificar Cuenta</a>
            </div>
        </div>
    </div>
    </div>
    <?php include '../components/footer.php' ?>
</body>

</html>