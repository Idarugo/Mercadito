<?php
class ShoppingCart
{
    private $id;
    private  $plants;

    function __construct($id, $plants)
    {
        $this->id = $id;
        $this->plants = $plants;
    }

    public function getid(): int
    {
        return $this->id;
    }

    public function getPlants(): int
    {
        return $this->plants;
    }
}
