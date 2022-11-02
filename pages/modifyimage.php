
<!DOCTYPE html>
<html lang="es">
<head>
    <?php include '../components/head.php' ?>
    <link rel="stylesheet" href="../assets/styles/main.css">
    <link rel="stylesheet" href="../assets/styles/pages/modifyimage.css">
</head>
<body>
    <?php include '../components/header.php' ?>
    <div class="container container-main">
        <h1>Cambiar Imagen</h1>
            <div class="col-md-12">
                <center><img  class="rounded"  src="data:imagen/jpg;base64,<?php echo base64_encode($user->getImagen()); ?>"></center>
            </div>
        <form action="../routes/user.routes.php" method="POST" class="row g-3 justify-content-center" enctype="multipart/form-data" >
             <div class="col-md-10">
                <input type="hidden" class="form-control" id="inputId"  name="txtId" value="<?php echo $user->getId();?>">
            </div>     
            <div class="col-md-10">
                <input class="form-control" type="file" id="formFileMultiple" name="txtImagen" multiple>
            </div>
            <div class="col-5  justify-content-center mb-2" style="text-align: center;">
            <input  type="submit" value="Modificar" class="btn btn-success" name="btnModificarImagen" id="btnForm">
            </div>    
            <div class="col-5  justify-content-center mb-2" style="text-align: center;">
                <a href="./modificarusuario.php" ><button type="button" class="btn btn-success btn btn-dark"> < Volver</button></a>
            </div>    
         </form>
     </div>
    <?php include '../components/footer.php' ?>
</body>
</html>


