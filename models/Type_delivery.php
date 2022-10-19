<?php
class Type_delivery{
	private int $id;
	private string $name;


	public function Type_delivery(int $id,string $name){
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

