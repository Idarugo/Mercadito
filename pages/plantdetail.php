<!DOCTYPE html>
<html lang="es">
<head>
    <?php include '../components/head.php' ?>
    <link rel="stylesheet" href="../assets/styles/main.css">
    <link rel="stylesheet" href="../assets/styles/pages/plantdetail.css">
</head>
<body>
    <?php include '../components/header.php' ?>
    <div class="container container-main">

    <div class="row" style="margin-top: 20px;">
        <div class="col aling-self-center" >
        <img class="img_plant" src="../assets/images/fondoplanta-temporal.jpg">
            <div class="row mt-2">
                <div class="col-2">
                    <img class="img_plant-min" src="../assets/images/fondoplanta-temporal.jpg" alt="">
                </div>

                <div class="col-2">
                    <img class="img_plant-min" src="../assets/images/fondoplanta-temporal.jpg" alt="">
                </div>

                <div class="col-2">
                    <img class="img_plant-min" src="../assets/images/fondoplanta-temporal.jpg" alt="">
                </div>

                <div class="col-2">
                    <img class="img_plant-min" src="../assets/images/fondoplanta-temporal.jpg" alt="">
                </div>

                <div class="col-2">
                     <img class="img_plant-min" src="../assets/images/fondoplanta-temporal.jpg" alt="">
                </div>
            </div>

        </div>

        <div class="col aling-self-center" >

            <h2 class="title" style="margin: 10px;">Titulo</h2>

            <span style="margin: 10px;"><del>$31.990</del></span> 
            <span>$27.191</span>
            <span>Ahorras 15%</span>

            <li type="disc" class="despacho" style="margin: 10px;">Listo para ser despachado</li>



            <p class="clasificacion">
                <input id="radio1" type="radio" name="estrellas" value="5">
                <label for="radio1">★</label>
                <input id="radio2" type="radio" name="estrellas" value="4">
                <label for="radio2">★</label>
                <input id="radio3" type="radio" name="estrellas" value="3">
                <label for="radio3">★</label>
                <input id="radio4" type="radio" name="estrellas" value="2">
                <label for="radio4">★</label>
                <input id="radio5" type="radio" name="estrellas" value="1">
                <label for="radio5">★</label>
            </p>

            <button class="btn-agregar">
                <span> Agregar al carrito </span>
            </button>

            <button class="btn-comprar">
                <a href="../pages/carrodecompra.php"> Comprar Ahora</a>
            </button>

            <font style="vertical-align: inherit;">
                <p><LI>Las Baby Susan pueden llegar verdes o variegadas, según disponibilidad.</LI></p>
                <p><LI>Baby Susan, la planta, mide 20-30 centímetros de alto aproximadamente, la altura final llegó al macetero.</LI></p> 
                <p><LI>Foto referencial, las plantas varían en tamaño y cantidad de hojas.</LI></p>

            </font>
                

            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Acerca de
                    </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Tips 
                    </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Cuidados principales
                    </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        También conocido como 
                    </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php include '../components/footer.php' ?>
</body>
</html>


