<?php
class BookTime
{
    private  $id;
    private  $dia;
    private  $hora;
    private  $nombre;
    private  $email;
    private  $telefono;

    function __construct($id, $dia, $hora, $nombre, $email, $telefono)
    {
        $this->id = $id;
        $this->dia = $dia;
        $this->hora = $hora;
        $this->nombre = $nombre;
        $this->email = $email;
        $this->telefono = $telefono;
    }

    public function getId(): int
    {
        return $this->id;
    }
    public function getDia(): string
    {
        return $this->dia;
    }
    public function getHora(): string
    {
        return $this->hora;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }
    public function getEmail(): string
    {
        return $this->email;
    }

    public function getTelefono(): string
    {
        return $this->telefono;
    }
}
