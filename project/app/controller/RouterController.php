<?php
class RouterController extends ConnectDatabase
{

    public function Trangchu()
    {
        include_once "app/view/Header.php";
        include_once "app/view/Home.php";
        include_once "app/view/Footer.php";
    }


    public function getUrl()
    {
        $act = "";
        if (isset($_GET["wh"])) {
            $act = $_GET["wh"];
            return $act;
        }
    }
    public function getId()
    {
        $id = "";
        if (isset($_GET["id"])) {
            $id = $_GET["id"];
            return $id;
        }
    }
}
