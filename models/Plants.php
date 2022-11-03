<?php
class Plant
{
	private  $id;
	private  $title;
	private  $price;
	private  $description;
	private  $image;
	private  $category;
	private  $cant;
	private  $typeDelivery;
	private  $about;
	private  $tips;
	private  $healthBenefit;
	private  $primaryCare;
	private  $alsoKnownAs;


	function __construct($id, $title, $price, $description, $category, $image, $cant, $typeDelivery, $about, $tips, $healthBenefit, $primaryCare, $alsoKnownAs)
	{
		$this->id = $id;
		$this->title = $title;
		$this->price = $price;
		$this->description = $description;
		$this->image = $image;
		$this->category = $category;
		$this->cant = $cant;
		$this->typeDelivery = $typeDelivery;
		$this->about = $about;
		$this->tips = $tips;
		$this->healthBenefit = $healthBenefit;
		$this->primaryCare = $primaryCare;
		$this->alsoKnownAs = $alsoKnownAs;
	}

	public function getidPlants(): int
	{
		return $this->id;
	}

	public function geTitle(): string
	{
		return $this->title;
	}

	public function getPrice(): string
	{
		return $this->price;
	}

	public function getDescription(): string
	{
		return $this->description;
	}

	public function getImage(): string
	{
		return $this->image;
	}

	public function getCant(): int
	{
		return $this->cant;
	}

	public function getCategory(): int
	{
		return $this->category;
	}

	public function getTypeDelivery(): int
	{
		return $this->typeDelivery;
	}
	public function getAbout(): string
	{
		return $this->about;
	}
	public function getTips(): string
	{
		return $this->tips;
	}
	public function getHealthBenefit(): string
	{
		return $this->healthBenefit;
	}
	public function getPrimaryCare(): string
	{
		return $this->primaryCare;
	}
	public function getAlsoKnownAs(): string
	{
		return $this->alsoKnownAs;
	}
}
