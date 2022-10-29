<?php
    require '../models/TypeDelivery.php';

    class DeliveryController {

        private $connectDB;

        function __construct( $connectDB)
        {
            $this->connectDB = $connectDB;
        }

        public function ListarDelivery(){
            $lista = array();
            $this->connectDB->connect();
            $sql = "select * from `type_delivery` ORDER BY `id` ASC ";
            $st = $this->connectDB->query($sql);
            while ($rs = mysqli_fetch_array($st)) {
              $id = $rs['id'];
              $name = $rs['name'];
              $d   = new TypeDelivery($id,$name);
              $lista[] = $d;
            }
            $this->connectDB->disconnect();            
            return $lista;
          }

    } 
 


