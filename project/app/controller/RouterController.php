<?php
class RouterController extends ConnectDatabase
{

    public function Trangchu()
    {
        include_once "app/view/Home.php";
    }


    public function getUrl()
    {
        $act = "";
        if (isset($_GET["wh"])) {
            $act = $_GET["wh"];
            return $act;
        }
    }
}
