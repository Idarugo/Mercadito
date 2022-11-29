<?php

class ShoppingCarro
{
    private $id;
    private $user;
    private $imagen;
    private $title;
    private $quantity;
    private $cantidad;
    private $cant;

    function __construct($id, $user, $imagen, $title, $quantity, $cantidad, $cant)
    {
        $this->id = $id;
        $this->user = $user;
        $this->imagen = $imagen;
        $this->title = $title;
        $this->quantity = $quantity;
        $this->cantidad = $cantidad;
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
    public function getImagen(): string
    {
        return $this->imagen;
    }
    public function getTitle(): string
    {
        return $this->title;
    }
    public function getQuantity(): string
    {
        return $this->quantity;
    }
    public function getCantidad(): string
    {
        return $this->cantidad;
    }
    public function getCant(): int
    {
        return $this->cant;
    }
}
