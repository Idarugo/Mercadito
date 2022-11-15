<!DOCTYPE html>
<html lang="es">

<head>
    <?php include '../components/head.php' ?>
    <link rel="stylesheet" href="../assets/styles/main.css">
    <link rel="stylesheet" href="../assets/styles/pages/servicio.css">
</head>

<body>
    <?php include '../components/header.php' ?>
    <section class="container-fluid banner " style="padding-top: 40px !important;">
        <div class="banner__img"></div>
        <h1>Servicios</h1>
        <p>A domicilios y empresa</p>
    </section>

    <div class="container container-main mt-5">
        <div class="row justify-content-center">
            <div class="col-10">
                <p>En<strong style="color: #6ab041;"> Mercadito</strong> tenemos la misión de <strong style="color: #6ab041;">darle vida a los ambientes</strong> , trayendo lo mejor de la naturaleza a hogares, lugares de trabajo y espacios personales.</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-10">
                <p>Actualmente nos hemos desarrollado en el área de <strong style="color: #6ab041;">creación, asesoría y mantención de espacios verdes </strong> en hoteles, oficinas, restaurantes, tiendas, centros comerciales y muchos otros lugares que necesitan de un espacio verde.</p>
            </div>
        </div>

        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <img class="redondo" src="../assets/images/servicio-1.jpg">
                    <h4 style="color: #6ab041;">PAISAJISMO</h4>
                </div>
                <div class="col">
                    <img class="redondo" src="../assets/images/servicio-2.jpg">
                    <h4 style="color: #6ab041;">DISEÑO DE INTERIORES</h4>
                </div>
                <div class="col">
                    <img class="redondo" src="../assets/images/servicio-3.jpg">
                    <h4 style="color: #6ab041;">MANTENCIÓN DE PLANTAS</h4>
                </div>
            </div>
        </div>

        <div class="container text-center mb-2">
            <script src="https://apps.elfsight.com/p/platform.js" defer></script>
            <div class="elfsight-app-352e0bab-718d-46ff-9d27-3fd78fa0ed55"></div>
        </div>



        <h4 class="caption mb-2">Agenda tu hora</h4>
        <h5 class="text-center mb-2">Te invitamos a planificar tu visita a nuestro Vivero para un acceso más .</h5>
        <h6 class="text-center mb-2">¡Te esperamos!</h6>


        <form action="../routes/book.routes.php" method="POST" class="row g-3 justify-content-center">

            <h6 class="col-md-10">Ingresar Horario</h6>

            <div class="col-md-5">
                <label for="inputName" class="form-label">Dia</label>
                <input type="date" class="form-control" id="inputName" name="txtDia">
            </div>
            <div class="col-md-5">
                <label for="inputEmail4" class="form-label">Hora</label>
                <input type="time" class="form-control" id="inputEmail4" name="txtHora">
            </div>

            <h6 class="col-md-10">Ingresa tus datos</h6>

            <div class="col-md-5">
                <label for="inputName" class="form-label">Nombre</label>
                <input type="name" class="form-control" id="inputName" name="txtNombre">
            </div>
            <div class="col-md-5">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail4" name="txtEmail">
            </div>
            <div class="col-10">
                <label for="inputAddress2" class="form-label">Telefono</label>
                <input type="phone" class="form-control" id="inputAddress2" placeholder="" name="txtTelefono">
            </div>

            <div class="col-10  justify-content-center mb-2" style="text-align: center;">
                <input type="submit" value="Reserva tu Hora" class="btn btn-success" name="btnCrearBook" id="btnForm">
            </div>
        </form>
    </div>
    <?php include '../components/footer.php' ?>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/633c689854f06e12d8986a31/1gehvh4su';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
</body>

</html>