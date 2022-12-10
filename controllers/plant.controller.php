<?php
require '../models/Plants.php';

class PlantController
{

    private $connectDB;

    function __construct($connectDB)
    {
        $this->connectDB = $connectDB;
    }

    public function registerPlants($title, $price, $description, $category, $image, $cant, $about, $tips, $healthBenefit, $primaryCare, $alsoKnownAs)
    {
        $this->connectDB->connect();
        $image = addslashes(file_get_contents($image['tmp_name']));
        $sql = "INSERT INTO `plants`(`title`, `price`, `description`, `category`, `image`, `cant` , `about`, `tips`, `health_benefit`, `primary_care`, `also_known_as`) VALUES ('$title','$price','$description','$category','$image','$cant','$about','$tips','$healthBenefit','$primaryCare','$alsoKnownAs')";
        $this->connectDB->query($sql);
        if ($this->connectDB->getDB()->affected_rows) {
            $this->connectDB->disconnect();
            echo "<script>
            alert('Producto agregado correctamente');
            window.location= '../pages/addproductimages.php?created'
            </script>";
            return;
        }
        $this->connectDB->disconnect();
        header("location:  ../pages/agregarproductos.php?RegisterError");

        return;
    }

    public function getPlant($id)
    {
        session_start();
        $this->connectDB->connect();
        $sql = "SELECT * FROM plants";
        $resp = $this->connectDB->query($sql);
        $list = array();
        while ($rs = mysqli_fetch_array($resp)) {
            $plants = new Plant($rs[0], $rs[1], $rs[2], $rs[3], $rs[4], $rs[5], $rs[6], $rs[7], $rs[8], $rs[9], $rs[10], $rs[11]);
            $list[] = $plants;
        }
        $_SESSION['plants'] = $list;
        $this->connectDB->disconnect();
        header("location:  $id");
        return;
    }

    public function getAllPlantsByIdCategory($id)
    {
        $lista = array();
        $this->connectDB->connect();
        $sql = "SELECT * FROM `plants` WHERE `category`= $id";
        $st = $this->connectDB->query($sql);
        while ($rs = mysqli_fetch_array($st)) {
            $lista[] = new Plant($rs['id'], $rs['title'], $rs['price'], $rs['description'], $rs['category'], $rs['image'], $rs['cant'], $rs['about'], $rs['tips'], $rs['health_benefit'], $rs['primary_care'], $rs['also_known_as']);;
        }
        $this->connectDB->disconnect();
        return $lista;
    }

    public function getPlantById($id)
    {
        $plant = "";
        $this->connectDB->connect();
        $sql = "SELECT plants.id, title, price, description, category.category as name, image, cant, about, tips, health_benefit, primary_care, also_known_as FROM plants , category WHERE plants.category=category.id ORDER BY `id` ASC ";
        $st = $this->connectDB->query($sql);
        while ($rs = mysqli_fetch_array($st)) {
            $plant = new Plant($rs['id'], $rs['title'], $rs['price'], $rs['description'], $rs['name'], $rs['image'], $rs['cant'], $rs['about'], $rs['tips'], $rs['health_benefit'], $rs['primary_care'], $rs['also_known_as']);;
        }
        $this->connectDB->disconnect();
        return $plant;
    }

    public function getPlantByIdCarro($id)
    {
        $lista = "";
        $this->connectDB->connect();
        $sql = "SELECT * FROM `plants` WHERE `id`= $id";
        $st = $this->connectDB->query($sql);
        while ($rs = mysqli_fetch_array($st)) {
            $lista = new Plant($rs['id'], $rs['title'], $rs['price'], $rs['description'], $rs['category'], $rs['image'], $rs['cant'], $rs['about'], $rs['tips'], $rs['health_benefit'], $rs['primary_care'], $rs['also_known_as']);;
        }
        $this->connectDB->disconnect();
        return $lista;
    }

    public function getPlantByIdInfo($id)
    {
        $lista = "";
        $this->connectDB->connect();
        $sql = "SELECT * FROM `plants` WHERE `id`= $id";
        $st = $this->connectDB->query($sql);
        while ($rs = mysqli_fetch_array($st)) {
            $lista = new Plant($rs['id'], $rs['title'], $rs['price'], $rs['description'], $rs['category'], $rs['image'], $rs['cant'], $rs['about'], $rs['tips'], $rs['health_benefit'], $rs['primary_care'], $rs['also_known_as']);;
        }
        $this->connectDB->disconnect();
        return $lista;
    }

    public function getPlantByIdPayment($id)
    {
        $lista = "";
        $this->connectDB->connect();
        $sql = "SELECT * FROM `plants` WHERE `id`= $id";
        $st = $this->connectDB->query($sql);
        while ($rs = mysqli_fetch_array($st)) {
            $lista = new Plant($rs['id'], $rs['title'], $rs['price'], $rs['description'], $rs['category'], $rs['image'], $rs['cant'], $rs['about'], $rs['tips'], $rs['health_benefit'], $rs['primary_care'], $rs['also_known_as']);;
        }
        $this->connectDB->disconnect();
        return $lista;
    }


    public function select()
    {
        $lista = array();
        $this->connectDB->connect();
        $sql = "SELECT plants.id, title, price, description, category.category as name, image, cant, about, tips, health_benefit, primary_care, also_known_as FROM plants , category WHERE plants.category=category.id ORDER BY `id` ASC ";
        $st = $this->connectDB->query($sql);
        while ($rs = mysqli_fetch_array($st)) {
            $lista[] = new Plant($rs['id'], $rs['title'], $rs['price'], $rs['description'], $rs['name'], $rs['image'], $rs['cant'], $rs['about'], $rs['tips'], $rs['health_benefit'], $rs['primary_care'], $rs['also_known_as']);;
        }
        $this->connectDB->disconnect();
        return $lista;
    }

    public function removePlant($id)
    {
        $this->connectDB->connect();
        $sql = "DELETE FROM plants WHERE id = $id";
        $st = $this->connectDB->query($sql);
        $this->connectDB->disconnect();
        header("location:  ../pages/listarproductos.php?removedplant");
        return;
    }

    public function ListProduct()
    {
        $lista = array();
        $this->connectDB->connect();
        $sql = "select * from `plants` ORDER BY `id` ASC ";
        $st = $this->connectDB->query($sql);
        while ($rs = mysqli_fetch_array($st)) {
            $id = $rs['id'];
            $title = $rs['title'];
            $price = $rs['price'];
            $description = $rs['description'];
            $image = $rs['image'];
            $category = $rs['category'];
            $cant = $rs['cant'];
            $about = $rs['about'];
            $tips = $rs['tips'];
            $healthBenefit = $rs['health_benefit'];
            $primaryCare = $rs['primary_care'];
            $alsoKnownAs = $rs['also_known_as'];
            $p   = new Plant($id, $title, $price, $description, $image, $category, $cant, $about, $tips, $healthBenefit, $primaryCare, $alsoKnownAs);
            $lista[] = $p;
        }

        $this->connectDB->disconnect();
        return $lista;
    }

    public function updateProduct($id, $title, $price, $description, $category, $cant, $about, $tips, $healthBenefit, $primaryCare, $alsoKnownAs)

    {
        $this->connectDB->connect();
        $sql = "UPDATE `plants` SET `title`='$title',`price`='$price',`description`='$description',`category`='$category',`cant`='$cant',`about`='$about', `tips`='$tips',`health_benefit`='$healthBenefit',`primary_care`='$primaryCare',`also_known_as`='$alsoKnownAs'WHERE `id`='$id'";
        $this->connectDB->query($sql);
        if ($this->connectDB->getDB()->affected_rows) {
            session_start();
            header("location:  ../pages/listarproductos.php?edited");
            return;
        }
        $this->connectDB->disconnect();
        //header("location:  ../pages/modificarusuario.php?ModifiedError");
        return;
    }

    public function selecupdateCategory()
    {
        $lista = array();
        $this->connectDB->connect();
        $sql = "SELECT id, category as name FROM category ORDER BY `id` ASC ";
        $st = $this->connectDB->query($sql);
        while ($rs = mysqli_fetch_array($st)) {
            $lista[] = new Category($rs['id'], $rs['getBanner'], $rs['name']);;
        }
        $this->connectDB->disconnect();
        return $lista;
    }

    public function productosId()
    {
        $this->connectDB->connect();
        $sql = "SELECT SUM(cant) as cantidad FROM plants";
        $st = $this->connectDB->query($sql);
        $val = mysqli_fetch_assoc($st);
        $this->connectDB->disconnect();
        return $val["cantidad"];
    }



    public function updateImagenProduct($id, $image)
    {
        $this->connectDB->connect();
        $image = addslashes(file_get_contents($image['tmp_name']));
        $sql = "UPDATE `plants` SET `image`='$image' WHERE `id`='$id'";
        $this->connectDB->query($sql);
        if ($this->connectDB->getDB()->affected_rows) {
            session_start();
            echo "<script>
            alert('Imagen del producto se ha modificado correctamente');
            window.location= '../pages/listarproductos.php?created'
            </script>";
            return;;
        }
        $this->connectDB->disconnect();
        //header("location:  ../pages/modificarusuario.php?ModifiedError");
        return;
    }
}
