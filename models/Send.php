<?php
class Send
{
    private  $id;
    private  $address;
    private  $commune;
    private  $phone;


    function __construct($id, $address, $commune, $phone)
    {
        $this->id = $id;
        $this->address = $address;
        $this->commune = $commune;
        $this->phone = $phone;
    }

    public function getid(): int
    {
        return $this->id;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function getCommune(): string
    {
        return $this->commune;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }
}
