<!DOCTYPE html>
<html lang="es">
<head>
    <?php include '../components/head.php' ?>
    <link rel="stylesheet" href="../assets/styles/main.css">
    <link rel="stylesheet" href="../assets/styles/pages/agregarproductos.css">
    <link rel="stylesheet" href="../assets/styles/components/forms.css">
</head>
<body>
    <?php include '../components/header.php' ?>
    <div class="container container-main mt-5">

        <form class="row g-3 justify-content-center">
                <h1 style="text-align: center;">Agregar Productos</h1>
            <div class="col-md-5">
                <label for="inputName" class="form-label">Nombre</label>
                <input type="name" class="form-control" id="inputName">
            </div>
            <div class="col-md-5">
                <label for="inputState" class="form-label">Categoria</label>
                <select id="inputState" class="form-select">
                    <option selected>Seleccione Una Categoria</option>
                    <option>Plantas de Interior</option>
                    <option>Plantas de Exterior</option>
                    <option>Plantas Medicinales</option>
                    <option>Maceteros</option>
                    <option>Accesorios</option>
                    <option>Ofertas</option>
                    <option>Nuevos Productos</option>
                    <option>Insumos</option>
                </select>
            </div>
            <div class="col-md-10">
                <label for="inputName" class="form-label">Descripcion</label>
                <input type="name" class="form-control" id="inputName">
            </div>
            <div class="col-5">
                <label for="inputAddress2" class="form-label">Precio</label>
                <input type="precio" class="form-control" id="inputAddress2" placeholder="">
            </div>
            <div class="col-5">
                <label for="inputAddress2" class="form-label">Cantidad</label>
                <input type="number" class="form-control" id="inputAddress2" placeholder="">
            </div>
            <div class="col-md-10">
                <label for="inputState" class="form-label">Tipo de Entrega</label>
                <select id="inputState" class="form-select">
                    <option selected>Seleccione Tipo de Entrega</option>
                    <option>Despacho a Domicilio</option>
                    <option>Retira tu Compra</option>
                </select>
            </div>
            <div class="col-md-10">
                <label for="imagen" class="form-label">Imagen de la Planta</label>
                <input class="form-control" type="file" id="formFileMultiple" multiple>
            </div>
            <div class="col-10  justify-content-center mb-2" style="text-align: center;">
                <button type="button" class="btn btn-success">Agregar</button>
            </div> 
        </form>
    </div>
    <?php include '../components/footer.php' ?>
</body>
</html>


