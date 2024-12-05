<?php 
class ChangePassController extends ConnectDatabase{
    public function ChangePass(){
        include  "app/view/Header.php";
        include  "app/view/User/ChangePass.php";
        include  "app/view/Footer.php";
    }
}