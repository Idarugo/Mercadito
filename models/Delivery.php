<?php
class Delivery
{
    private  $id;
    private  $send;
    private  $withdrawal;


    function __construct($id, $send, $withdrawal)
    {
        $this->id = $id;
        $this->send = $send;
        $this->withdrawal = $withdrawal;
    }

    public function getid(): int
    {
        return $this->id;
    }

    public function getSend(): int
    {
        return $this->send;
    }

    public function getWithdrawal(): int
    {
        return $this->withdrawal;
    }
}
