<?php 
class ListProduct{
    public function ListProduct(){
       $products=json_encode((new Product)->ListProduct(), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
        file_put_contents("products.json",$products);
    }
}