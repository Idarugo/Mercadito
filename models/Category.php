<?php
class Category{
	private $id;
	private $category;

	function __construct($id,$category){
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

