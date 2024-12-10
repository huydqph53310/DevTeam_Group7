<?php
class RouterController extends ConnectDatabase
{
    public $connect;
    public function Trangchu()
    {
        if(isset($_POST["Addtocard"])){
            var_dump($_POST);
        }
        $product = (new Product())->TopListProductPriceDESC(12);
        $allProduct = (new Product())->ListProduct();
        $allCountCllick = (new Product())->TopProductCountClickDESC();
        $topBrand = (new Product())->TopBrandDESC();
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
    
    public function getparams()
    {
        $i = "";
        if (isset($_GET["i"])) {
            $i = $_GET["i"];
            return $i;
        }
    }
}
