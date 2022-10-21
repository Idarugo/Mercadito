<!DOCTYPE html>
<html lang="es">
<head>
    <?php include '../components/head.php' ?>
    <link rel="stylesheet" href="../assets/styles/main.css">
    <link rel="stylesheet" href="../assets/styles/pages/contactenos.css">
</head>
<body>
    <?php include '../components/header.php' ?>
    <section class="container-fluid banner mb-3" style="padding-top: 40px !important;">
        <div class="banner__img"></div>
        <h1>¡CONTÁCTANOS!</h1>
        <p>Escríbenos y en breve los pondremos en contacto contigo</p>
    </section>

    <form class="row g-3 justify-content-center">
        <h3 style="text-align: center;">¡CONTÁCTANOS!</h3>
        <div class="col-md-5">
            <label for="inputName" class="form-label">Nombre</label>
            <input type="name" class="form-control" id="inputName">
        </div>
        <div class="col-md-5">
            <label for="inputEmail4" class="form-label">CORREO ELECTRÓNICO</label>
            <input type="email" class="form-control" id="inputEmail4">
        </div>
        <div class="mb-3 col-10">
            <label for="exampleFormControlTextarea1" class="form-label">MENSAJE</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="col-10  justify-content-center mb-2" style="text-align: center;">
        <button type="button" class="btn btn-success">Enviar</button>
        </div>  
        <div class="col-md-10" style="text-align: center;">
           <h4>Información</h4>
        </div>
        <div class="col-md-10" style="text-align: center;">
            <p>Correo:contacto@mercadito.cl</p>
            <p>Telefono:+56 9 0000 0000</p>
        </div>   
         </form>
    </div>
    <?php include '../components/footer.php' ?>
</body>
</html>