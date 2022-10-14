<?php
class Cliente{
	private int $id;
	private string $nombre;
	private string $apellido;
	private string $correo;
	private string $pas;


	public function Usuario(int $id,string $nombre,string $apellido,string $correo,string $pas){
		$this->id = $id;
		$this->nombre = $nombre;
		$this->apellido = $apellido;
		$this->correo = $correo;
		$this->pas = $pas;
	}

	public function getidUsu(): int{
		return $this->id;
	}

	public function getNombre(): string{
		return $this->nombre;
	}

	public function getApellido(): string{
		return $this->apellido;
	}

	public function getCorreo(): string{
		return $this->correo;
	}

	public function getPassword(): string{
		return $this->pas;
	}
}
?>

