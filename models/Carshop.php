<?php
class Carshop
{
	private  $id;
	private  $name;
	private  $amount;
	private  $price;
	private  $subtotal;
	private  $delivery;
	private  $billing;


	function __construct($id, $name, $amount, $price, $subtotal, $delivery, $billing)
	{
		$this->id = $id;
		$this->name = $name;
		$this->amount = $amount;
		$this->price = $price;
		$this->subtotal = $subtotal;
		$this->delivery = $delivery;
		$this->billing = $billing;
	}

	public function getid(): int
	{
		return $this->id;
	}
	public function getName(): string
	{
		return $this->name;
	}

	public function getAmount(): string
	{
		return $this->amount;
	}
	public function getPrice(): string
	{
		return $this->price;
	}

	public function getSubtotal(): string
	{
		return $this->subtotal;
	}

	public function getDelivery(): int
	{
		return $this->delivery;
	}

	public function getBilling(): int
	{
		return $this->billing;
	}
}
