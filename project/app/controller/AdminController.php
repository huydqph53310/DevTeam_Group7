<?php

class AdminController
{
    public $connect;
    public $swuser;

    public function __construct()
    {
        $this->connect = new ConnectDatabase();
        // $this->swuser = new SwitchQuery();
    }

    public function __destruct() {}

    public function Trangchu()
    {
        $status = $this->connect->statusConnect;
        include "app/view/Home.php";
    }

    public function GETURL()
    {
        $wh = "";
        if (isset($_GET["wh"])) {
            $wh = $_GET["wh"];
            return $wh;
        }
    }
    public function GETID()
    {
        $id = "";
        if (isset($_GET["id"])) {
            $id = $_GET["id"];
            return $id;
        }
    }

    // kiểm tra xem database đã conect chưa
}
