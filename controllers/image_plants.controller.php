<?php
require '../models/Images.php';

class ImagesController
{

    private $connectDB;

    function __construct($connectDB)
    {
        $this->connectDB = $connectDB;
    }

    public function registerimage($image2, $image3, $image4, $image5, $image6)
    {
        $this->connectDB->connect();
        $sql = "INSERT INTO `image_plants`(`image_2`, `image_3`, `image_4`, `image_5`, `image_6`) VALUES ('$image2','$image3','$image4','$image5','$image6')";
        $this->connectDB->query($sql);
        if ($this->connectDB->getDB()->affected_rows) {
            $this->connectDB->disconnect();
            header("location:  ../pages/agregarproductos.php?created");
            return;
        }
        $this->connectDB->disconnect();
        header("location:  ../pages/agregarproductos.php?RegisterError");
        return;
    }
}
