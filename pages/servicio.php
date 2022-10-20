<!DOCTYPE html>
<html lang="es">
<head>
    <?php include '../components/head.php' ?>
    <link rel="stylesheet" href="../assets/styles/main.css">
    <link rel="stylesheet" href="../assets/styles/pages/servicio.css">
</head>
<body>
    <?php include '../components/header.php' ?>
    <section class="container-fluid banner">
        <div class="banner__img"></div>
        <h1>Servicio</h1>
        <p>A domicilios y empresa</p>
    </section>

    <div class="container container-main mt-5">
        <div class="row justify-content-center">
            <div class="col-10">
                <p>En<strong style="color: #6ab041;"> Mercadito</strong> tenemos la misión de  <strong style="color: #6ab041;">darle vida a los ambientes</strong> , trayendo lo mejor de la naturaleza a hogares, lugares de trabajo y espacios personales.</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-10">
                <p>Actualmente nos hemos desarrollado en el área de <strong style="color: #6ab041;">creación, asesoría y mantención de espacios verdes </strong>  en hoteles, oficinas, restaurantes, tiendas, centros comerciales y muchos otros lugares que necesitan de un espacio verde.</p>
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

    <h4 class="caption mb-5">COTIZA CON NOSOTROS</h4>

    <form class="row g-3 justify-content-center">
        <div class="col-md-5">
            <label for="inputName" class="form-label">Nombre</label>
            <input type="name" class="form-control" id="inputName">
        </div>
        <div class="col-md-5">
            <label for="inputEmail4" class="form-label">CORREO ELECTRÓNICO</label>
            <input type="email" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-10">
            <label for="inputState" class="form-label">SERVICIO</label>
            <select id="inputState" class="form-select">
                <option selected>Seleccione Un Servicio</option>
                <option>Trasplante de Plantas</option>
                <option>Asesoria/Mantención de Plantas</option>
                <option>Diseño de interior / Paisajismo</option>
            </select>
        </div>
        <div class="col-10">
         <label for="inputAddress2" class="form-label">NÚMERO DE TELEFONO</label>
         <input type="text" class="form-control" id="inputAddress2" placeholder="">
        </div>
        <div class="mb-3 col-10">
            <label for="exampleFormControlTextarea1" class="form-label">MENSAJE</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="col-10  justify-content-center mb-2" style="text-align: center;">
        <button type="button" class="btn btn-success">COTIZAR</button>
        </div>    
         </form>
    </div>
    <?php include '../components/footer.php' ?>

    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/633c689854f06e12d8986a31/1gehvh4su';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>
</html>