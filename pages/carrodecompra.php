<?php
require '../core/bootstraper.php';
require '../controllers/carshop.controller.php';

require '../controllers/plant.controller.php';
if (!isset($_GET['id'])) {
    header("location:  ./plantdetail.php");
}
$plant = new PlantController($connectDB);
$plantCompra = $plant->getPlantByIdCarro($_GET['id']);


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <?php include '../components/head.php' ?>
    <link rel="stylesheet" href="../assets/styles/main.css">
    <link rel="stylesheet" href="../assets/styles/pages/carrodecompra.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
</head>

<body>
    <?php include '../components/header.php' ?>
    <div class="container mb-3">
    </div>

    <div class="container container-main mt-5">

        <form action="../routes/carshop.routes.php" method="POST" class="row g-3 justify-content-center" enctype="multipart/form-data">


            <h1 style="text-align: center;">Carrito de compra</h1>
            <h3 style="text-align: center;">Continúe explorando aquí.</h3>

            <script>
                $(document).ready(() => {
                    let unit = $('#price').val()
                    let quantity = $('#quantity').val()
                    let total = calculate(unit, quantity)
                    $('#total').val(total)

                    $('#quantity').on('change', () => {
                        unit = $('#price').val()
                        quantity = $('#quantity').val()
                        total = calculate(unit, quantity)
                        $('#total').val(total)
                    })

                    function calculate(price, quantity) {
                        return price * quantity
                    }
                })
            </script>



            <div class="row align-items-start col-md-5">
                <div class="col-4">
                    <img class="compra1" src="data:imagen/jpg;base64,<?php echo base64_encode($plantCompra->getImage()); ?>">
                </div>
                <div class="col-8">

                    <input type="text" class="form-control" id="inputName" name="txtTitle" value="<?php echo $plantCompra->geTitle(); ?>" disabled>

                    <div class="container mb-2">
                    </div>
                    <input type="text" class="form-control" id="inputName" name="txtDescripcion" value="<?php echo $plantCompra->getDescription(); ?>" disabled>
                    <div class="container mb-2">
                    </div>
                    <input type="text" class="price" id="price" name="txtPrice" value="<?php echo $plantCompra->getPrice(); ?>" disabled>

                    <div class="container mb-3">
                    </div>

                    <div class="col-3">
                        <label class="despacho-1">Cantidad </label>
                        <input type="number" name="txtCant" id="quantity" class="input-number" value="1" min="1" max="' . $plantCompra->getCant() . '" placeholder="1">
                    </div>
                    <div class="col-md-12">
                        <input type="hidden" class="form-control" id="inputId" name="txtShopping" value="<?php echo $plantCompra->getidPlants(); ?>">
                    </div>
                </div>
            </div>

            <div class="col-md-5">

                <div class="">
                </div>
                <div class="">
                </div>
                <div class="">
                </div>

                <div class="col-md-10" style="text-align: left;">
                    <span>Subtotal</span>
                    <span class="right">
                        <input type="text" class="total" id="total" name="txtSubtotal" disabled>

                    </span>
                </div>

                <div class="mb-3">
                </div>

                <div class="col-10  justify-content-center mb-2" style="text-align: center;">
                    <input type="submit" value="Terminar Pedido" class="btn btn-success" name="btnCrearCarshop" id="btnForm">
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
    </div>
    <?php include '../components/footer.php' ?>
</body>

</html>