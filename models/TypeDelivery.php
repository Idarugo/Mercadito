<?php
class TypeDelivery{
	private int $id;
	private string $name;


	function __construct(int $id,string $name){
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

