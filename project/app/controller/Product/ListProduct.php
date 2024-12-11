<?php 
class ListProduct extends ConnectDatabase{
    public $connect;
    public function ListProduct(){
        $this->connect = new Product();
        $product = $this->connect->ListProduct();
    }
    public function listLaptop(){
        $topBrand = (new Product())->TopBrandDESC();
        if((new RouterController())->getId() !=  null){
            $product = (new Product())->LocSanPhamTheoIDBrand((new RouterController())->getId());
        }else{
            $product = (new Product())->TopListProductPriceDESC(18);
        }
        include "app/view/Header.php";
        include "app/view/Product/ListDetailProduct.php";
        include "app/view/Footer.php";
    }
}