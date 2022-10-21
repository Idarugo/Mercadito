<!DOCTYPE html>
<html lang="es">
<head>
    <?php include '../components/head.php' ?>
    <link rel="stylesheet" href="../assets/styles/main.css">
    <link rel="stylesheet" href="../assets/styles/pages/listarproductos.css">
</head>
<body>
    <?php include '../components/header.php' ?>
    <div class="container container-main">
       <h1>Productos</h1>
       <form class="row g-3 justify-content-center"> 
        <table class="styled-table">
            <tr>
                <td><strong>Nombre</strong></td>
                <td><strong>Categoria</strong></td>
                <td><strong>Descripcion</strong></td>
                <td><strong>Precio</strong></td>
                <td><strong>Cantidad</strong></td>
                <td><strong>Tipo de Entrega</strong></td>
                <td><strong>Imagen</strong></td>
                <td><strong>Editar</strong></td>
                <td><strong>Eliminar</strong></td>

            </tr>

            <tr>
                <td>Laura (Lavanda)</td>
                <td>Planta Exterior</td>
                <td>¡Laura, lavanda, es el complemento perfecto para tu hogar! Es una de nuestras plantas de exterior con flores favoritas y tiene muchos beneficios tanto para el medio ambiente como para tu salud, es decorativa y tiene un rico aroma. Tiene características que te ayudan a combatir el insomnio, el estrés y otras características que te interesan.</td>
                <td>$19.990</td>
                <td>6</td>
                <td>Despacho a Domicilio</td>
                <td>IMAGEN</td>
                <td>Editar</td>
                <td>Eliminar</td>
            </tr>
        </table>
         <div class="col-5  justify-content-center mb-2" style="text-align: center;">
             <a href="./agregarproductos.php" ><button type="button" class="btn btn-success">Agregar Producto</button></a>
         </div>  
         <div class="col-5  justify-content-center mb-2" style="text-align: center;">
             <a href="./perfil.php" ><button type="button" class="btn btn-success btn btn-dark"> < Volver</button></a>
         </div> 
       </form>
    </div>
    <?php include '../components/footer.php' ?>
</body>
</html>


