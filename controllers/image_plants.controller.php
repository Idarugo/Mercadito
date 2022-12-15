<?php
require '../models/Images.php';

class ImageController
{

    private $connectDB;

    function __construct($connectDB)
    {
        $this->connectDB = $connectDB;
    }

    public function registerimage($plants, $image1, $image2, $image3, $image4, $image5)
    {
        $this->connectDB->connect();
        $imagen1 = addslashes(file_get_contents($image1['tmp_name']));
        $imagen2 = addslashes(file_get_contents($image2['tmp_name']));
        $imagen3 = addslashes(file_get_contents($image3['tmp_name']));
        $imagen4 = addslashes(file_get_contents($image4['tmp_name']));
        $imagen5 = addslashes(file_get_contents($image5['tmp_name']));
        $sql = "INSERT INTO `image_plants`(`plants`, `image_1`, `image_2`, `image_3`, `image_4`, `image_5`) VALUES ('$plants','$imagen1','$imagen2','$imagen3','$imagen4','$imagen5')";
        $this->connectDB->query($sql);
        if ($this->connectDB->getDB()->affected_rows) {
            echo "<script>
            alert('Imagenes agregado correctamente');
            window.location= '../pages/listimages.php?created'
            </script>";
            return;
        }
        $this->connectDB->disconnect();
        header("location:  ../pages/addproductimages.php?RegisterError");
        return;
    }

    public function getImageById($id)
    {
        $lista = "";
        $this->connectDB->connect();
        $sql = "SELECT * FROM `image_plants` WHERE `id`= $id";
        $st = $this->connectDB->query($sql);
        while ($rs = mysqli_fetch_array($st)) {
            $lista = new Images($rs['id'], $rs['plants'], $rs['image_1'], $rs['image_2'], $rs['image_3'], $rs['image_4'], $rs['image_5']);;
        }
        $this->connectDB->disconnect();
        return $lista;
    }

    public function removeImage($id)
    {
        $this->connectDB->connect();
        $sql = "DELETE FROM image_plants WHERE id = $id";
        $st = $this->connectDB->query($sql);
        $this->connectDB->disconnect();
        header("location:  ../pages/listimages.php?removedimages");
        return;
    }

    public function listimages()
    {
        $image = array();
        $this->connectDB->connect();
        $sql = " SELECT image_plants.id, title, image_1, image_2, image_3, image_4, image_5 FROM image_plants, plants WHERE image_plants.plants=plants.id ";
        $st = $this->connectDB->query($sql);
        while ($rs = mysqli_fetch_array($st)) {
            $image[] = new Images($rs['id'], $rs['title'], $rs['image_1'], $rs['image_2'], $rs['image_3'], $rs['image_4'], $rs['image_5']);;
        }
        $this->connectDB->disconnect();
        return $image;
    }

    public function updateImagen1($id, $plants, $image1)
    {
        $this->connectDB->connect();
        $image1 = addslashes(file_get_contents($image1['tmp_name']));
        $sql = "UPDATE `image_plants` SET `plants`='$plants',`image_1`='$image1'  WHERE `id`='$id'";
        $this->connectDB->query($sql);
        if ($this->connectDB->getDB()->affected_rows) {
            session_start();
            echo "<script>
            alert('Imagen 1 modificado correctamente');
            window.location= '../pages/listimages.php?editedd'
            </script>";
            return;
        }
        return;
    }

    public function updateImagen2($id, $plants, $image2)
    {
        $this->connectDB->connect();
        $image2 = addslashes(file_get_contents($image2['tmp_name']));
        $sql = "UPDATE `image_plants` SET `plants`='$plants',`image_2`='$image2'  WHERE `id`='$id'";
        $this->connectDB->query($sql);
        if ($this->connectDB->getDB()->affected_rows) {
            session_start();
            echo "<script>
            alert('Imagen 2 modificado correctamente');
            window.location= '../pages/listimages.php?editedd'
            </script>";
            return;
        }
        return;
    }


    public function updateImagen3($id, $plants, $image3)
    {
        $this->connectDB->connect();
        $image3 = addslashes(file_get_contents($image3['tmp_name']));
        $sql = "UPDATE `image_plants` SET `plants`='$plants',`image_3`='$image3'  WHERE `id`='$id'";
        $this->connectDB->query($sql);
        if ($this->connectDB->getDB()->affected_rows) {
            session_start();
            echo "<script>
            alert('Imagen 3 modificado correctamente');
            window.location= '../pages/listimages.php?editedd'
            </script>";
            return;
        }
        return;
    }

    public function updateImagen4($id, $plants, $image4)
    {
        $this->connectDB->connect();
        $image4 = addslashes(file_get_contents($image4['tmp_name']));
        $sql = "UPDATE `image_plants` SET `plants`='$plants',`image_4`='$image4'  WHERE `id`='$id'";
        $this->connectDB->query($sql);
        if ($this->connectDB->getDB()->affected_rows) {
            session_start();
            echo "<script>
            alert('Imagen 4 modificado correctamente');
            window.location= '../pages/listimages.php?editedd'
            </script>";
            return;
        }
        return;
    }

    public function updateImagen5($id, $plants, $image5)
    {
        $this->connectDB->connect();
        $image5 = addslashes(file_get_contents($image5['tmp_name']));
        $sql = "UPDATE `image_plants` SET `plants`='$plants',`image_5`='$image5'  WHERE `id`='$id'";
        $this->connectDB->query($sql);
        if ($this->connectDB->getDB()->affected_rows) {
            session_start();
            echo "<script>
            alert('Imagen 5 modificado correctamente');
            window.location= '../pages/listimages.php?editedd'
            </script>";
            return;
        }
        return;
    }
}
