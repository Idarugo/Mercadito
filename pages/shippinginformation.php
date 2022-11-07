<?php
require '../core/bootstraper.php';
require '../controllers/plant.controller.php';
require '../controllers/image_plants.controller.php';
if (!isset($_GET['id'])) {
    header("location:  ./products.php");
}
$plants = new PlantController($connectDB);
$infoplant = $plants->getPlantByIdInfo($_GET['id']);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include '../components/head.php' ?>
    <link rel="stylesheet" href="../assets/styles/main.css">
    <link rel="stylesheet" href="../assets/styles/pages/shippinginformation.css">
</head>

<body>
    <?php include '../components/header.php' ?>
    <div class="container-fluid">

        <div class="container container-main gx-5">

            <?php
            if ($infoplant == "") {
                echo '<a href="../pages/products.php"><img class="img_mensaje" src="../assets/images/categories/no-hay-producto.png"></a>';
            } else {
                echo '
            <div class="row ">
                <div class="left col-6">
                    <form action="">
                        <div class="form-group ">
                            <h5 class="caja-3">Información de contacto</h5>
                            <div class="row">
                                <div class="col-12">
                                    <input type="text" class="form-control" id="inputAddress2" placeholder="Correo electronico">
                                </div>
                            </div>
                        </div>
                        </br>

                        <div class="form-group ">
                            <h5 class="nom-pago">Pago</h5>
                            <h6>Forma de entrega</h6>
                            <div class="caja">
                                <div class="">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" disabled>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Enviar
                                        </label>
                                    </div>
                                    <hr size="2px" color="black" />
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2" checked>
                                        <label class="form-check-label" for="exampleRadios2">
                                            Retiro
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        </br>

                        <div class="form-group ">
                            <h5 class="nom-pago">Lugar de retiro</h5>
                            <div class="caja">
                                <div class="">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            La Rubiana 319, Rancagua
                                        </label>
                                    </div>

                                </div>
                            </div>
                        </div>

                        </br>
                        <div class="row">
                            <div class="col">
                                <a href="./agregarblog.php"><button type="button" class="btn btn-outline-secondary">
                                        < Volver a información</button></a>
                            </div>
                            <div class="col-4">
                                <a href="./payment.php"><button type="button" class="btn btn-outline-success">Finalizar el Pedido</button></a>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="right col-6  d-flex">
                    <tbody data-order-summary-section="line-items">
                        <tr class="product" data-product-id="6898364055722" data-variant-id="42969838321921" data-product-type="Árboles" data-customer-ready-visible="">
                            <td class="product__image">
                                <div class="product-thumbnail ">
                                    <div class="product-thumbnail__wrapper">
                                        <img class="product-thumbnail__image" src="data:imagen/jpg;base64,' . base64_encode($infoplant->getImage()) . '">
                                    </div>
                                    <span class="product-thumbnail__quantity" aria-hidden="true">' . $infoplant->getCant() . ' </span>
                                </div>

                            </td>
                            <th class="product__description" scope="row">
                                <span class="product__description__name order-summary__emphasis">' . $infoplant->geTitle() . ' - ' . $infoplant->getDescription() . ' </span>
                            </th>
                            <td class="product__quantity">
                                <span class="visually-hidden">
                                    2
                                </span>
                            </td>
                            <td class="product__price">
                                <span class="order-summary__emphasis skeleton-while-loading" style="padding-left: 200px;">$' . $infoplant->getPrice() . ' </span>
                            </td>
                        </tr>
                    </tbody>
                </div>
            </div>
            ';
            }
            ?>
        </div>
    </div>
    <?php include '../components/footer.php' ?>
</body>

</html>