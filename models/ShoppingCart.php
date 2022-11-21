<?php
class ShoppingCart
{
    private $id;
    private  $plants;
    private $users;

    function __construct($id, $plants, $users)
    {
        $this->id = $id;
        $this->plants = $plants;
        $this->users = $users;
    }

    public function getid(): int
    {
        return $this->id;
    }

    public function getPlants(): int
    {
        return $this->plants;
    }

    public function getUsers(): int
    {
        return $this->users;
    }
}
