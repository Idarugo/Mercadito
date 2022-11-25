<?php
require '../core/bootstraper.php';
require '../controllers/shopping_carro.controller.php';
if (!isset($_GET['id'])) {
    header("location:  ./products.php");
}

$shoppingcant = new ShoppingCarrito($connectDB);
$shopping = $shoppingcant->selectShopping($_GET['id']);

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

        <form action="../routes/shopping_cant.routes.php" method="POST" class="row g-3 justify-content-center" enctype="multipart/form-data">


            <h1 style="text-align: center;">Carrito de compra</h1>
            <h4 class="mensaje-compra" style="text-align: center;">Continúe explorando
                <a class="btn-texto" href="../pages/tiendaonline.php">aquí.</a>
            </h4>

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


            <?php
            if ($shopping == "") {
                echo '<a href="../pages/products.php"><img class="img_mensaje" src="../assets/images/categories/no-hay-producto.png"></a>';
            } else {
                echo '
            <div class="row align-items-start col-md-5">
                <div class="col-4">
                    <img name="txtImagen" class="compra1"  src="data:imagen/jpg;base64,' . base64_encode($shopping->getImagen()) . '" alt="">
                </div>
                <div class="col-8">
                    <input type="text" class="titulo form-control" id="inputName" name="txtTitle" value="' . $shopping->getTitle() . '" disabled>
                    <div class="container mb-3">
                    </div>
                    <div class="container mb-2">
                    </div>
                    <input type="text" class="price" id="price" name="txtPrice" value="' . $shopping->getQuantity() . '"disabled>

                    <div class="container mb-3">
                    </div>

                    <div class="col-3">
                        <label class="despacho-1">Cantidad </label>
                        <input type="number" name="txtCant" id="quantity" class="input-number" value="1" min="1" max="' . $shopping->getCantidad() . '" placeholder="1">
                    </div>
                    <div class="col-md-12">
                        <input type="hidden" class="form-control" id="inputId" name="txtShopping" value="<?php echo $plantCompra->getidPlants(); ?>">
                    </div>
                </div>
            </div>


            <div class="col-md-5">


                <div class="subtotal col-10">
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

                <div class="">
                </div>

                <div class="col-10 mb justify-content-center" style="text-align: center;">
                    <p class="colorenvio">* El envío personalizado es solo para las comunas: Rancagua, Machali, Graneros, Las Cabras</p>
                </div>

            </div>
            ';
            }
            ?>
        </form>
    </div>
    <?php include '../components/footer.php' ?>
</body>

</html>