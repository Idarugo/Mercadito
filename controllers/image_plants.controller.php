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
        $sql = "INSERT INTO `image_plants`( `plants`, `image_1`, `image_2`, `image_3`, `image_4`, `image_5`) VALUES ('$plants','$image1','$image2','$image3','$image4','$image5')";
        $this->connectDB->query($sql);
        if ($this->connectDB->getDB()->affected_rows) {
            $this->connectDB->disconnect();
            echo "<script>
            alert('Imagenes agregado correctamente');
            window.location= '../pages/addproductimages.php?created'
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
        $sql = "SELECT * FROM `image_plants` WHERE `plants`= $id";
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
        $sql = " SELECT * FROM `image_plants`";
        $st = $this->connectDB->query($sql);
        while ($rs = mysqli_fetch_array($st)) {
            $image[] = new Images($rs['id'], $rs['plants'], $rs['image_1'], $rs['image_2'], $rs['image_3'], $rs['image_4'], $rs['image_5']);;
        }
        $this->connectDB->disconnect();
        return $image;
    }

    public function updateImagen($id, $plants, $image1, $image2, $image3, $image4, $image5)
    {
        $this->connectDB->connect();
        $image1 = addslashes(file_get_contents($image1['tmp_name']));
        $image2 = addslashes(file_get_contents($image2['tmp_name']));
        $image3 = addslashes(file_get_contents($image3['tmp_name']));
        $image4 = addslashes(file_get_contents($image4['tmp_name']));
        $image5 = addslashes(file_get_contents($image5['tmp_name']));
        $sql = "UPDATE `image_plants` SET `plants`='$plants',`image_1`='$image1',`image_2`='$image2',`image_3`='$image3' ,`image_4`='$image4' ,`image_5`='$image5' WHERE `id`='$id'";
        $this->connectDB->query($sql);
        if ($this->connectDB->getDB()->affected_rows) {
            session_start();
            session_unset();
            session_destroy();
            $this->connectDB->disconnect();
            header("location:  ../pages/listimages.php?edited");
            return;
        }
        $this->connectDB->disconnect();
        //header("location:  ../pages/modificarusuario.php?ModifiedError");
        return;
    }
}
