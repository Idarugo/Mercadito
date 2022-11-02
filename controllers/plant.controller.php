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
        public function getAllPlantsByIdCategory($id){
            $lista = array();
            $this->connectDB->connect();
            $sql = "SELECT * FROM `plants` WHERE `category`= $id";
            $st = $this->connectDB->query($sql);
            while($rs = mysqli_fetch_array($st)){
                $lista[] = new Plant($rs['id'],$rs['title'],$rs['price'],$rs['description'],$rs['category'],$rs['image'],$rs['cant'],$rs['type_delivery']);;
            }
            $this->connectDB->disconnect();
            return $lista;
        }
        public function select(){
            $lista = array();
            $this->connectDB->connect();
            $sql = " SELECT * FROM `plants`";
            $st = $this->connectDB->query($sql);
            while($rs = mysqli_fetch_array($st)){
                $lista[] = new Plant($rs['id'],$rs['title'],$rs['price'],$rs['description'],$rs['category'],$rs['image'],$rs['cant'],$rs['type_delivery']);;
            }
            $this->connectDB->disconnect();
            return $lista;
        }

        public function eliminarplant($id){
            $this->connectDB->connect();
            $sql = "DELETE FROM plants WHERE id = $id";
            $st = $this->connectDB->query($sql);
            $this->connectDB->disconnect();
          }

        
    }


?> 