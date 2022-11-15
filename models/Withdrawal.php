<?php
class Withdrawal
{
    private  $id;
    private  $retreat_location;


    function __construct($id, $retreat_location)
    {
        $this->id = $id;
        $this->seretreat_locationnd = $retreat_location;
    }

    public function getid(): int
    {
        return $this->id;
    }

    public function getRetreat_location(): string
    {
        return $this->retreat_location;
    }
}
