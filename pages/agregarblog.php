<!DOCTYPE html>
<html lang="es">
<head>
    <?php include '../components/head.php' ?>
    <link rel="stylesheet" href="../assets/styles/main.css">
    <link rel="stylesheet" href="../assets/styles/pages/agregarblog.css">
</head>
<body>
    <?php include '../components/header.php' ?>
    <div class="container container-main mt-5">

        <form class="row g-3 justify-content-center">
                <h1 style="text-align: center;">Agregar Blog</h1>
            <div class="col-md-5">
                <label for="imagen" class="form-label">Imagen</label>
                <input class="form-control" type="file" id="formFileMultiple" multiple>
            </div>
            <div class="col-md-5">
                <label for="inputName" class="form-label">Titulo</label>
                <input type="name" class="form-control" id="inputName">
            </div>
            <div class="col-md-10">
                <label for="exampleFormControlTextarea1" class="form-label">Detalle</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="col-md-10">
                <label for="inputName" class="form-label">Fecha</label>
                <input type="name" class="form-control" id="inputName">
            </div>
            <div class="col-5  justify-content-center mb-2" style="text-align: center;">
                <button type="button" class="btn btn-success">Agregar</button>
            </div> 
            <div class="col-5  justify-content-center mb-2" style="text-align: center;">
                <a href="./perfil.php" ><button type="button" class="btn btn-success btn btn-dark"> < Volver</button></a>
            </div>  
        </form>
    </div>
    <?php include '../components/footer.php' ?>
</body>
</html>

