<?php
    require '../models/Plants.php';

    class PlantController {
    
        private $connectDB;

        function __construct( $connectDB)
        {
            $this->connectDB = $connectDB;
        }

        public function get($category){
            $this->connectDB->connect();
            $sql = "SELECT `id`, `category` FROM `category` WHERE 1";          
             $this->connectDB->query($sql);
            $st = $this->mi->query($sql);
            while ($rs = mysqli_fetch_array($st)) {
              $id = $rs['id'];
              $category = $rs['category'];
              $c   = new Category($id,$category);
              $lista[] = $c;
            }
            $this->connectDB->disconnect();
            return $lista;
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