<?php
    require '../models/Plants.php';

    class PlantController {
    
        private $connectDB;

        function __construct( $connectDB)
        {
            $this->connectDB = $connectDB;
        }


        public function registerPlants($title,$price,$description,$category,$image,$cant,$typeDelivery){
            $this->connectDB->connect();
            $sql = "INSERT INTO `plants`(`title`, `price`, `description`, `category`, `image`, `cant`, `type_delivery`) VALUES ('$title','$price','$description','$category','$image','$cant','$typeDelivery')";
            $this->connectDB->query($sql);
            if($this->connectDB->getDB()->affected_rows){
                $this->connectDB->disconnect();
                header("location:  ../pages/agregarproductos.php?created");
                return;
            }
            $this->connectDB->disconnect();
            header("location:  ../pages/agregarproductos.php?RegisterError");
            return;
        }

 

        public function getPlant($id){
            session_start();
            $this->connectDB->connect();
            $sql = "SELECT * FROM plants";
            $resp = $this->connectDB->query($sql);
            $list = array();
            while($rs = mysqli_fetch_array($resp)){
                $plants = new Plant($rs[0],$rs[1],$rs[2],$rs[3],$rs[4],$rs[5],$rs[6],$rs[7],$rs[8],$rs[9],$rs[10]);
                $list[] = $plants;
            }
            $_SESSION['plants'] = $list;
            $this->connectDB->disconnect();
            header("location:  $id");
            return;
        }

        
    }


?> 