<!DOCTYPE html>
<html lang="es">

<head>
    <?php include '../components/head.php' ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <!-- Agrega enlaces a tus archivos de estilos CSS aquí -->
    <link rel="stylesheet" href="../assets/styles/main.css">
    <link rel="stylesheet" href="../assets/styles/pages/producto.css">
</head>

<body>
    <!-- Incluye el encabezado de tu página -->
    <?php include '../components/header.php' ?>
    <div class="container">
        <h1 class="text-center mt-5 mb-4">Productos</h1>
        <!-- Sección de audífonos -->
        <div class="producto-section">
            <h2>Audífonos</h2>
            <div class="row">
                <div class="col-md-4 cardProducto">
                    <a href="detalle_producto.php?id=1" class="card-link">
                        <div class="card">
                            <div class="card-img-container">
                                <img src="../assets/img/productos/producto1.png" class="card-img-top" alt="Producto 1">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Producto 1</h5>
                                <p class="card-text">$19.99</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 cardProducto">
                    <a href="detalle_producto.php?id=2" class="card-link">
                        <div class="card">
                            <div class="card-img-container">
                                <img src="../assets/img/productos/producto2.png" class="card-img-top" alt="Producto 2">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Producto 2</h5>
                                <p class="card-text">$29.99</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 cardProducto">
                    <a href="detalle_producto.php?id=3" class="card-link">
                        <div class="card">
                            <div class="card-img-container">
                                <img src="../assets/img/productos/producto3.png" class="card-img-top" alt="Producto 3">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Producto 3</h5>
                                <p class="card-text">$39.99</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 cardProducto">
                    <a href="detalle_producto.php?id=3" class="card-link">
                        <div class="card">
                            <img src="../assets/img/productos/producto4.png" class="card-img-top" alt="Producto 4">
                            <div class="card-body">
                                <h5 class="card-title">Producto 4</h5>
                                <p class="card-text">$39.99</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 cardProducto">
                    <a href="detalle_producto.php?id=3" class="card-link">
                        <div class="card">
                            <img src="../assets/img/productos/producto5.png" class="card-img-top" alt="Producto 5">
                            <div class="card-body">
                                <h5 class="card-title">Producto 5</h5>
                                <p class="card-text">$39.99</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Agrega más productos en la lista -->
            </div>
        </div>
        <!-- Sección de accesorios -->
        <div class="producto-section">
            <h2>Accesorios</h2>
            <div class="row">
                <div class="col-md-4 cardProducto">
                    <a href="detalle_producto.php?id=4" class="card-link">
                        <div class="card">
                            <img src="accesorio1.jpg" class="card-img-top" alt="Accesorio 1">
                            <div class="card-body">
                                <h5 class="card-title">Accesorio 1</h5>
                                <p class="card-text">Precio: $19.99</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 cardProducto">
                    <a href="detalle_producto.php?id=5" class="card-link">
                        <div class="card">
                            <img src="accesorio2.jpg" class="card-img-top" alt="Accesorio 2">
                            <div class="card-body">
                                <h5 class="card-title">Accesorio 2</h5>
                                <p class="card-text">Precio: $24.99</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 cardProducto">
                    <a href="detalle_producto.php?id=6" class="card-link">
                        <div class="card">
                            <img src="accesorio3.jpg" class="card-img-top" alt="Accesorio 3">
                            <div class="card-body">
                                <h5 class="card-title">Accesorio 3</h5>
                                <p class="card-text">Precio: $14.99</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- Sección de Cursos y Talleres -->
        <div class="producto-section">
            <h2>Cursos y Talleres</h2>
            <div class="row">
                <div class="col-md-4 cardProducto">
                    <a href="detalle_producto.php?id=15" class="card-link">
                        <div class="card">
                            <img src="curso1.jpg" class="card-img-top" alt="Curso 1">
                            <div class="card-body">
                                <h5 class="card-title">Curso 1</h5>
                                <p class="card-text">Precio: $99.99</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 cardProducto">
                    <a href="detalle_producto.php?id=16" class="card-link">
                        <div class="card">
                            <img src="curso2.jpg" class="card-img-top" alt="Curso 2">
                            <div class="card-body">
                                <h5 class="card-title">Curso 2</h5>
                                <p class="card-text">Precio: $79.99</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Agrega más cursos o talleres aquí -->
            </div>
        </div>
    </div>
    <!-- Incluye el pie de página de tu página -->
    <?php include '../components/footer.php' ?>
    <!-- Agrega enlaces a tus archivos de scripts JS aquí -->
    <script src="../assets/scripts/main.js"></script>
</body>

</html>