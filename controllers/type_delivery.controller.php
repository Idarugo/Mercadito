<?php
    require '../models/TypeDelivery.php';

    class PlantController {
    
        private $connectDB;

        function __construct( $connectDB)
        {
            $this->connectDB = $connectDB;
        }

        public function ListarTypeDelivery(){
            $this->connectDB->connect();
            $sql = "select * from `type_delivery` ORDER BY `id` ASC ";
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

    }