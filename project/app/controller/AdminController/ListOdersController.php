<?php
class ListOdersController{
    public function GetListOder(){
        $oders=(new Oder())->listOder();
        include_once "app/view/AdminManagner/donhang.php";
    }
}