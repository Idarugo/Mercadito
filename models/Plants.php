<?php
class Plants{
	private int $id;
	private string $title;
	private string $price;
	private string $description;
	private string $image;
	private int $cant;
	private int $type;




	public function Plants(int $id,string $title,string $price,string $description,string $image,int $cant,int $type){
		$this->id = $id;
		$this->title = $title;
		$this->price = $price;
		$this->description = $description;
		$this->image = $image;
		$this->cant = $cant;
		$this->type = $type;

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

	public function getType(): int{
		return $this->type;
	}

}
?>

