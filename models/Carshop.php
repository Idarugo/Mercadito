<?php
class Carshop{
	private int $id;
	private int $plant;
	private int $user;
	private string $date;

	function __construct(int $id,int $plant,int $user, string $date){
		$this->id = $id;
		$this->plant = $plant;
        $this->user = $user;
		$this->date = $date;

	}

	public function getid(): int{
		return $this->id;
	}

	public function getPlant(): int{
		return $this->plant;
	}

    public function getUser(): int{
		return $this->user;
	}

    public function getDate(): string{
		return $this->date;
	}
}
?>

