<?php
class Comprobante
{
    private  $id;
    private  $cod_venta;
    private  $imagen;



    function __construct($id, $cod_venta, $imagen)
    {
        $this->id = $id;
        $this->cod_venta = $cod_venta;
        $this->imagen = $imagen;
    }

    public function getid(): int
    {
        return $this->id;
    }

    public function getCodVenta(): int
    {
        return $this->cod_venta;
    }
    public function getImagen(): string
    {
        return $this->imagen;
    }
}
