<?php
class Users{
	private int $id;
	private string $nombre;
	private string $correo;
	private string $password;
    private string $imagen;
	private string $direccion;
	private int $rol;
    private int $estado;

	public function Users(int $id,string $nombre,string $correo,string $password,string $imagen,string $direccion,int $rol,int $estado){
		$this->id = $id;
		$this->nombre = $nombre;
        $this->correo = $correo;
		$this->password = $password;
        $this->imagen = $imagen;
		$this->direccion = $direccion;
		$this->rol = $rol;
		$this->estado = $estado;
	}

	public function getid(): int{
		return $this->id;
	}

	public function getNombre(): string{
		return $this->nombre;
	}

    public function getCorreo(): string{
		return $this->correo;
	}

    public function getPassword(): string{
		return $this->password;
	}

    public function getImagen(): string{
		return $this->imagen;
	}

    public function getDireccion(): string{
		return $this->direccion;
	}

    public function getRol(): int{
		return $this->rol;
	}

    public function getEstado(): int{
		return $this->estado;
	}
}
?>

