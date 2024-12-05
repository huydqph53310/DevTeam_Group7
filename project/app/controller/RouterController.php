<?php
class RouterController extends ConnectDatabase
{

    public $connect;

    public function Trangchu()
    {
        $this->connect = new Product();
        $product = $this->connect->TopListProductPriceDESC();
        $allProduct = $this->connect->ListProduct();
        $allCountCllick = $this->connect->TopProductCountClickDESC();
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

    public function urlCheck(){
        $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";

        // Lấy tên miền và đường dẫn
        $full_url = $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        $index = "/project";
        $position = stripos($full_url, $index);
        return $position;
        // echo "URL hiện tại: " . $full_url;
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
