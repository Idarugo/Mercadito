<?php
class Plant{
	private  $id;
	private  $title;
	private  $price;
	private  $description;
	private  $image;
	private  $category;
	private  $cant;
	private  $typeDelivery;

	function __construct( $id, $title, $price, $description, $category,$image, $cant, $typeDelivery){
		$this->id = $id;
		$this->title = $title;
		$this->price = $price;
		$this->description = $description;
		$this->image = $image;
		$this->category = $category;
		$this->cant = $cant;
		$this->typeDelivery = $typeDelivery;

	}

	public function getidPlants(): int{
		return $this->id;
	}

	public function geTitle(): string{
		return $this->title;
	}

	public function getPrice(): string{
		return $this->price;
	}

	public function getDescription(): string{
		return $this->description;
	}

	public function getImage(): string{
		return $this->image;
	}
	
	public function getCant(): int{
		return $this->cant;
	}

	public function getCategory(): int{
		return $this->category;
	}

	public function getTypeDelivery(): int{
		return $this->typeDelivery;
	}

}
?>

