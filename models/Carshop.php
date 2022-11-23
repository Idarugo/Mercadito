<?php
class Carshop
{
	private  $id;
	private  $name;
	private  $description;
	private  $amount;
	private  $subtotal;
	private  $shopping_cart;


	function __construct($id, $name, $description, $amount, $subtotal, $shopping_cart)
	{
		$this->id = $id;
		$this->name = $name;
		$this->description = $description;
		$this->amount = $amount;
		$this->subtotal = $subtotal;
		$this->shopping_cart = $shopping_cart;
	}

	public function getid(): int
	{
		return $this->id;
	}
	public function getName(): string
	{
		return $this->name;
	}

	public function getDescription(): string
	{
		return $this->description;
	}

	public function getAmount(): string
	{
		return $this->amount;
	}
	public function getSubtotal(): string
	{
		return $this->subtotal;
	}

	public function getShopping_cart(): int
	{
		return $this->shopping_cart;
	}

	public function getBilling(): int
	{
		return $this->billing;
	}
}
