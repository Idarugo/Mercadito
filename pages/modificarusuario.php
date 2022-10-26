<?php
      
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <?php include '../components/head.php' ?>
    <link rel="stylesheet" href="../assets/styles/main.css">
    <link rel="stylesheet" href="../assets/styles/pages/modificarusuario.css">
</head>
<body>
    <?php include '../components/header.php' ?>
    <div class="container container-main">
        <h1>Información personal</h1>
        <p>Por favor verifique su información personal antes de modificarla.</p>
        <form action="../routes/user.routes.php" method="POST" class="row g-3 justify-content-center" >
             <div class="col-md-10">
                <center><img class="rounded" src="../assets/images/icono-usuario.png" alt="..."></center>
            </div>
            <div class="col-md-5">
                <label for="inputName" class="form-label"><?php echo $nombre;?></label>
                <input type="name" class="form-control" id="inputName" name="txtNombre">
            </div>
            <div class="col-md-5">
                <label for="inputEmail4" class="form-label"><?php echo $correo;?></label>
                <input type="email" class="form-control" id="inputEmail4"  name="txtCorreo">
            </div>
            <div class="col-md-5">
                <label for="validationCustom03" class="form-label">Direccion</label>
                <input type="text" class="form-control" id="validationCustom03"  name="txtDireccion" required>
            </div> 
            <div class="col-md-5">
                <label for="inputEmail4" class="form-label"></label>
                <input type="password" class="form-control" id="inputEmail4"  name="txtPass">
            </div>
            <div class="col-md-10">
                <input class="form-control" type="file" id="formFileMultiple" name="txtImagen" multiple>
            </div>
            <div class="col-5  justify-content-center mb-2" style="text-align: center;">
            <button type="button" class="btn btn-success"  name="btnModificarCuenta">Modificar</button>
            </div>    
            <div class="col-5  justify-content-center mb-2" style="text-align: center;">
                <a href="./perfil.php" ><button type="button" class="btn btn-success btn btn-dark"> < Volver</button></a>
            </div>    
         </form>
     </div>
    <?php include '../components/footer.php' ?>
</body>
</html>


