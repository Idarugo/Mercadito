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
    <div class="container container-main">
<<<<<<< HEAD:pages/agregarproductos.php
        <h1 class="text-principal" style="text-align:center">Agregar Producto</h1>

           <form class="caja-agregarplanta">
            <label for="nombre">Nombre del producto</label>
            <input type="text" placeholder="Nombre">
            <label for="lang">Categoria</label>
            <select name="categoria" class="menu">
                <option value="1">Plantas de Interior</option>
                <option value="2">Plantas de Exterior</option>
                <option value="3">Plantas Medicinales</option>
                <option value="4">Maceteros</option>
                <option value="5">Accesorios</option>
                <option value="6">Ofertas</option>
                <option value="7">Nuevos Productos</option>
                <option value="8">Insumos</option>
            </select>
            <label for="descripcion">Descripcion</label>
            <textarea placeholder="Descripcion" class="cajatexto"></textarea>
            <label for="precio">Precio</label>
            <input type="precio" placeholder="Precio">
            <label for="cantidad">Cantidad</label>
            <input type="number" name="numero">

            <label for="lang">Tipo de Entrega</label>
            <select name="entrega" class="menu">
                <option value="1">Despacho a Domicilio</option>
                <option value="2">Retira tu Compra</option>
            </select>
            <div class="mb-3">
                <label for="formFileMultiple" class="form-label">Imagen</label>
                <input class="form-control" type="file" id="formFileMultiple" multiple> 
            </div>    
        <input type="imagen" placeholder="Imagen de la planta">
            <input class="submit" name="submit" type="submit" value="Guardar">
=======
        <h1 class="text-principal text-center mt-4">Agregar Planta</h1>

           <form class="caja-agregarplanta">
            <div class="mb-3 mt-4">
                <label for="nombre">Nombre</label>
                <input type="text" placeholder="Nombre">
            </div>
            <div class="mb-3">
                <label for="lang">Categoria</label>
                <select name="categoria" class="menu">
                    <option value="1">Plantas de Interior</option>
                    <option value="2">Plantas de Exterior</option>
                    <option value="3">Plantas Medicinales</option>
                    <option value="4">Maceteros</option>
                    <option value="5">Accesorios</option>
                    <option value="6">Ofertas</option>
                    <option value="7">Nuevos Productos</option>
                    <option value="8">Insumos</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="descripcion">Descripcion</label>
                <textarea placeholder="Descripcion"></textarea>
            </div>
            <div class="mb-3">
                <label for="precio">Precio</label>
                <input type="precio" placeholder="Precio">
            </div>
            <div class="mb-3">
                <label for="cantidad">Cantidad</label>
                <input type="number" name="numero">
            </div>

            <div class="mb-3">
                <label for="lang">Tipo de Entrega</label>
                <select name="entrega" class="menu">
                    <option value="1">Despacho a Domicilio</option>
                    <option value="2">Retira tu Compra</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="imagen">Imagen de la Planta</label>
                <input type="imagen" placeholder="Imagen de la planta">
            </div>
            <input class="submit mt-3" name="submit" type="submit" value="Guardar">
>>>>>>> c24c05f09d6caaecf2a5229e73fd3d4eeb9b81ba:pages/agregarplantas.php
          </form>
    </div>
    <?php include '../components/footer.php' ?>
</body>
</html>


