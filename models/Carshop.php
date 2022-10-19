<?php
class Carshop{
	private int $id;
	private int $plant;
	private int $user;
	private int $date;


	public function Carshop(int $id,int $plant,int $user,int $date){
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

    public function getDate(): int{
		return $this->date;
	}
}
?>

