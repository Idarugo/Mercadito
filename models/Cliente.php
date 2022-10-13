<?php
class Cliente{
	private $id;
	private $nombre;
	private $apellido;
	private $correo;
	private $pas;


	public function Usuario($id,$nombre,$apellido,$correo,$pas){
		$this->id = $id;
		$this->nombre = $nombre;
		$this->apellido = $apellido;
		$this->correo = $correo;
		$this->pas = $pas;
	}

	public function getidUsu(){
		return $this->id;
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function getApellido(){
		return $this->apellido;
	}

	public function getCorreo(){
		return $this->correo;
	}

	public function getPassword(){
		return $this->pas;
	}
}
?>

