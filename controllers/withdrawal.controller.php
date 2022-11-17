<?php
require '../models/Withdrawal.php';

class WithdrawalController
{

    private $connectDB;

    function __construct($connectDB)
    {
        $this->connectDB = $connectDB;
    }


    public function getWithdrawalById($id)
    {
        $lista = "";
        $this->connectDB->connect();
        $sql = "SELECT * FROM `withdrawal` WHERE `id`= $id";
        $st = $this->connectDB->query($sql);
        while ($rs = mysqli_fetch_array($st)) {
            $lista = new Withdrawal($rs['id'], $rs['retreat_location']);;
        }
        $this->connectDB->disconnect();
        return $lista;
    }
}
