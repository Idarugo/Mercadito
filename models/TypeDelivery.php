<?php
class TypeDelivery{
	private  $id;
	private  $name;


	function __construct( $id, $name){
		$this->id = $id;
		$this->name = $name;
	}

	public function getid(): int{
		return $this->id;
	}

	public function getNombre(): string{
		return $this->name;
	}
}
?>

