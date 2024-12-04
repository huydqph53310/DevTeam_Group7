<?php 
class ListProduct extends ConnectDatabase{
    public $connect;
    public function ListProduct(){
        $this.$connect = new Product();
        $product = $this->connect->ListProduct();
    }
}