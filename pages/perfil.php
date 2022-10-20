<!DOCTYPE html>
<html lang="es">
<head>
    <?php include '../components/head.php' ?>
    <link rel="stylesheet" href="../assets/styles/main.css">
    <link rel="stylesheet" href="../assets/styles/pages/perfil.css">
</head>
<body>
    <?php include '../components/header.php' ?>
    <div class="container container-main">
        <h1>Mi cuenta</h1>
        <p>Bienvenid@!. Aquí puedes gestionar tu información personal y pedidos.</p>

        <div class="container overflow-hidden text-center">
            <div class="row gx-5">
                <div class="col">
                <h3>Detalles de Productos</h3>
                <a class="btn btn-primary" href="../pages/agregarproductos.php" role="button">Agregar Producto</a>
                <a class="btn btn-primary" href="../pages/listarproductos.php" role="button">Listado de Producto</a>

                </div>
                <div class="col">
                    <h3>Detalles de la cuenta</h3>
                    <h5>Nombre</h5>
                    <h5>Correo</h5>
                    <h5>******</h5>
                    <a class="btn btn-primary" href="" role="button">Modificar Cuenta</a>
                </div>
            </div>
        </div>
    </div>


    <h1>Mi cuenta</h1>
    <div class="row">
    <a class="btn btn-primary col-md-2 offset-md-5" href="" role="button">Cerrar Sesión</a>
    </div>

    <div class="container overflow-hidden text-center">
            <div class="row gx-5">
                <div class="col">
                <h3>Historial de pedidos</h3>
                <h5>No ha realizado algún pedido aún.</h5>

                </div>
                <div class="col">
                    <h3>Detalles de la cuenta</h3>
                    <h5>Nombre</h5>
                    <h5>Correo</h5>
                    <h5>******</h5>
                    <a class="btn btn-primary" href="" role="button">Modificar Cuenta</a>
                </div>
            </div>
        </div>
    </div>
    <?php include '../components/footer.php' ?>
</body>
</html>


