<!DOCTYPE html>
<html lang="es">

<head>
    <?php include '../components/head.php' ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle Producto</title>
    <!-- Agrega enlaces a tus archivos de estilos CSS aquí -->
    <link rel="stylesheet" href="../assets/styles/main.css">
    <link rel="stylesheet" href="../assets/styles/pages/detalle_producto.css">
</head>

<body>
    <!-- Incluye el encabezado de tu página -->
    <?php include '../components/header.php' ?>
    <div class="row col-12 text-center mt-5 my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="producto-img-container">
                        <img src="../assets/img/productos/producto1.png" alt="Nombre del producto" class="producto-imagen">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="producto-info-container">
                        <h2 class="producto-nombre">Nombre del Producto</h2>
                        <h3 class="producto-precio">Precio: $99.99</h3>
                        <p class="producto-descripcion">Descripción del producto</p>
                        <ul class="producto-caracteristicas">
                            <li>Característica 1</li>
                            <li>Característica 2</li>
                            <li>Característica 3</li>
                        </ul>
                        <p class="producto-garantia">Garantía: 1 año</p>
                        <div class="producto-agregar-carrito">
                            <input type="number" class="producto-cantidad" value="1" min="1"> <!-- Campo de cantidad -->
                            <button class="btn btn-primary">Agregar al carrito</button> <!-- Botón de agregar al carrito -->
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col product" id="product_0">
                    <h2 class="producto-titulo-relacionado">Productos Relacionados</h2>
                    <div class="producto-relacionado-container text-center owl-carousel">
                        <div class="item">
                            <a href="detalle_producto.php">
                                <img src="../assets/img/productos/producto1.png" alt="Producto Relacionado 1">
                            </a>
                        </div>
                        <div class="item">
                            <a href="detalle_producto.php">
                                <img src="../assets/img/productos/producto2.png" alt="Producto Relacionado 2">
                            </a>
                        </div>
                        <div class="item">
                            <a href="detalle_producto.php">
                                <img src="../assets/img/productos/producto3.png" alt="Producto Relacionado 3">
                            </a>
                        </div>
                        <div class="item">
                            <a href="detalle_producto.php">
                                <img src="../assets/img/productos/producto4.png" alt="Producto Relacionado 4">
                            </a>
                        </div>
                        <div class="item">
                            <a href="detalle_producto.php">
                                <img src="../assets/img/productos/producto5.png" alt="Producto Relacionado 5">
                            </a>
                        </div>
                        <!-- Agrega más imágenes relacionadas aquí -->
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!-- Incluye el pie de página de tu página -->
    <?php include '../components/footer.php' ?>
    <script src="../assets/js/CarruselProducto.js"></script>
</body>

</html>