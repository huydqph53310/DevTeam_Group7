<?php 
class ListProduct extends ConnectDatabase{
    public $connect;
    public function ListProduct(){
        $this->connect = new Product();
        $product = $this->connect->ListProduct();
    }
    public function listLaptop(){
        $product = (new Product())->TopListProductPriceDESC(12);
        include "app/view/Header.php";
        include "app/view/Product/ListDetailProduct.php";
        include "app/view/Footer.php";
    }
}