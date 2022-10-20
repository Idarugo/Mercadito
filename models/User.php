<?php
class User{
	private  $id;
	private  $nombre;
	private  $correo;
	private  $password;
    private  $imagen;
	private  $direccion;
	private  $rol;
    private  $estado;

	function __construct( $id, $nombre, $correo, $password, $imagen, $direccion, $rol, $estado){
		$this->id = $id;
		$this->nombre = $nombre;
        $this->correo = $correo;
		$this->password = $password;
        $this->imagen = $imagen;
		$this->direccion = $direccion;
		$this->rol = $rol;
		$this->estado = $estado;
	}

	public function getid() {
		return $this->id;
	}

	public function getNombre() {
		return $this->nombre;
	}

    public function getCorreo() {
		return $this->correo;
	}

    public function getPassword() {
		return $this->password;
	}

    public function getImagen() {
		return $this->imagen;
	}

    public function getDireccion() {
		return $this->direccion;
	}

    public function getRol() {
		return $this->rol;
	}

    public function getEstado() {
		return $this->estado;
	}
}
?>

