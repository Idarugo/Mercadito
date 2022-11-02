<!DOCTYPE html>
<html lang="es">

<head>
    <?php include '../components/head.php' ?>
    <link rel="stylesheet" href="../assets/styles/main.css">
    <link rel="stylesheet" href="../assets/styles/pages/carrodecompra.css">
</head>

<body>
    <?php include '../components/header.php' ?>
    <div class="container mb-3">
    </div>

    <form class="row g-3 justify-content-center">
        <h1 style="text-align: center;">Carrito de compra</h1>
        <h3 style="text-align: center;">Continúe explorando aquí.</h3>

        <div class="row align-items-start col-md-5">
            <div class="col-4">
                <img class="compra1" src="../assets/images/instagram1.jpg ">
            </div>
            <div class="col-8">
                <p style="text-align: left;">Lilium </p>
                <p style="text-align: left;">Maceta: fiber clay</p>
                <p style="text-align: right;">$5.000</p>

            </div>
        </div>

        <div class="col-md-5">
            <legend class="col-form-label">Indícanos si necesitas boleta o factura</legend>

            <div class="">
            </div>

            <div class="col-md-5">
                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                <label class="form-check-label" for="gridRadios1">
                    Boleta
                </label>
            </div>

            <div class="">
            </div>

            <div class="col-md-5">
                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                <label class="form-check-label" for="gridRadios2">
                    Factura
                </label>
            </div>

            <div class="mb-3">
            </div>

            <div class=" col-10 justify-content-center mb-2" style="text-align: center;">
                <label for="exampleFormControlTextarea1" class="form-label">INSTRUCCIONES ESPECIALES PARA EL VENDEDOR</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <div class="">
            </div>

            <div class="col-md-10" style="text-align: left;">
                <p>Subtotal</p>
            </div>

            <div class="">
            </div>

            <div class="col-10  justify-content-center mb-2" style="text-align: center;">
                <button type="button" class="btn btn-success">Finalizar Pedido</button>
            </div>

            <div class="mb-3">
            </div>

            <div class="col-md-10" style="text-align: justify;">
                <p>Los códigos de descuento, los costes de envío y los impuestos se añaden durante el pago.</p>
            </div>

            <div class="">
            </div>

            <div class="col-10 mb justify-content-center" style="text-align: center;">
                <p class="colorenvio">* El envío personalizado es solo para las comunas: Rancagua, Machali, Graneros, Las Cabras</p>
            </div>

            <div class="mb-3"">
            </div>

            <div class=" col-md-10 mb-3" style="text-align: justify;">
                <p>Sí hacemos despachos a regiones pero SOLO MACETEROS, ACCESORIOS E INSUMOS, no plantas. Esto porque no podemos asegurar la integridad de la planta en viajes de tal magnitud.</p>
            </div>
        </div>
    </form>
    <?php include '../components/footer.php' ?>
</body>

</html>