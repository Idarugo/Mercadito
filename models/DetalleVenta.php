<?php

class DetalleVenta
{
    private $id;
    private $cod_pro;
    private $cod_venta;
    private $cantidad;
    private $total;

    function __construct($id, $cod_pro, $cod_venta, $cantidad, $total)
    {
        $this->id = $id;
        $this->cod_pro = $cod_pro;
        $this->cod_venta = $cod_venta;
        $this->cantidad = $cantidad;
        $this->total = $total;
    }

    public function getid(): int
    {
        return $this->id;
    }
    public function getCodPro(): int
    {
        return $this->cod_pro;
    }
    public function getCodVenta(): int
    {
        return $this->cod_venta;
    }
    public function getCantidad(): int
    {
        return $this->cantidad;
    }
    public function getTotal(): int
    {
        return $this->total;
    }
}
