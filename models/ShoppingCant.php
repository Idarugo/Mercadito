<?php

class Shopping
{
    private $id;
    private $user;
    private $plant;
    private $cant;

    function __construct($id, $user, $plant, $cant)
    {
        $this->id = $id;
        $this->users = $user;
        $this->plants = $plant;
        $this->cant = $cant;
    }

    public function getid(): int
    {
        return $this->id;
    }
    public function getUser(): int
    {
        return $this->user;
    }
    public function getPlant(): int
    {
        return $this->plant;
    }
    public function getCant(): int
    {
        return $this->cant;
    }
}
