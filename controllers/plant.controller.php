<?php
    require '../models/Plants.php';

    class PlantController {
    
        private $connectDB;

        function __construct( $connectDB)
        {
            $this->connectDB = $connectDB;
        }

        public function get($category){
            // select * from plants where category = $category
        }

        public function getPlant($id){
            //  select * from plants where id = $id
        }

        
    }


?> 