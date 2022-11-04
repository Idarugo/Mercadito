<?php
class Category
{
	private $id;
	private  $banner;
	private $name;

	function __construct($id, $banner, $name)
	{
		$this->id = $id;
		$this->banner = $banner;
		$this->name = $name;
	}

	public function getid(): int
	{
		return $this->id;
	}

	public function getBanner(): string
	{
		return $this->banner;
	}

	public function getName(): string
	{
		return $this->name;
	}
}
