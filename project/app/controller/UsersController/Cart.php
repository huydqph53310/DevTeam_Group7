<?php 
class Cart extends ConnectDatabase {
    public function Cart(){
        if($_SESSION["id"]){
            include  "app/view/Header.php";
            include  "app/view/User/Cart.php";
            include  "app/view/Footer.php";
        }else{
            header("location: ?wh=home");
        }
    }
}