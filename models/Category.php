<?php
class Category{
	private int $id;
	private string $category;

	function __construct(int $id,string $category){
		$this->id = $id;
		$this->category = $category;
	}

	public function getid(): int{
		return $this->id;
	}

	public function getCategory(): string{
		return $this->category;
	}
}
?>

