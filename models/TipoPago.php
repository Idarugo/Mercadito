<?php
class TipoPago
{
    private  $id;
    private  $tipo;


    function __construct($id, $tipo)
    {
        $this->id = $id;
        $this->tipo = $tipo;
    }

    public function getid(): int
    {
        return $this->id;
    }

    public function getTipo(): string
    {
        return $this->tipo;
    }
}
