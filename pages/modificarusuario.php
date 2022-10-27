
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
            <div class="col-md-10">
                <center><img class="rounded"  src="data:imagen/jpg;base64,<?php echo base64_encode($user->getImagen()); ?>" ></center>
            </div>
        <form action="../routes/user.routes.php" method="POST" class="row g-3 justify-content-center" enctype="multipart/form-data" >
            <div class="col-md-10">
                <input type="hidden" class="form-control" id="inputId"  name="txtId" value="<?php echo $user->getId();?>">
            </div> 
            <div class="col-md-5">
                <label for="inputName" class="form-label">Nombre</label>
                <input type="name" class="form-control" id="inputName" name="txtNombre" value="<?php echo $user->getNombre();?>">
            </div>
            <div class="col-md-5">
                <label for="inputEmail4" class="form-label">Correo</label>
                <input type="email" class="form-control" id="inputEmail4"  name="txtCorreo" value="<?php echo $user->getCorreo();?>">
            </div>
            <div class="col-md-5">
                <label for="validationCustom03" class="form-label">Direccion</label>
                <input type="text" class="form-control" id="validationCustom03"  name="txtDireccion" value="<?php echo $user->getDireccion();?>" required>
            </div> 
            <div class="col-md-5">
                <label for="inputEmail4" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="txtPass"  name="txtPass" value="<?php echo $user->getPass();?>"  onclick="Toggle()">
                <script>
                        function Toggle() {
                            var temp = document.getElementById("txtPass");
                            if (temp.type === "password") {
                                temp.type = "text";
                            }
                            else {
                                temp.type = "password";
                            }
                        }
                </script>
            </div>
            <div class="col-md-10">
                <input class="form-control" type="file" id="formFileMultiple" name="txtImagen" multiple>
            </div>
            <div class="col-5  justify-content-center mb-2" style="text-align: center;">
            <input  type="submit" value="Modificar" class="btn btn-success" name="btnModificarCuenta" id="btnForm">
            
            </div>    
            <div class="col-5  justify-content-center mb-2" style="text-align: center;">
                <a href="./perfil.php" ><button type="button" class="btn btn-success btn btn-dark"> < Volver</button></a>
            </div>    
         </form>
     </div>
    <?php include '../components/footer.php' ?>
</body>
</html>


