<?php
class ListProductController{
    public function GetListProduct(){
        $products=(new Product())->ListProduct();
        include_once "app/view/AdminManagner/Show_product.php";
    }
    

}