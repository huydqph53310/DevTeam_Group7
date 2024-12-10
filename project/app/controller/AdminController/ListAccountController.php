<?php
class ListAccountController{
    public function GetListAccount(){
        $accounts=(new User())->listUser();
        include_once "app/view/AdminManagner/Show_user.php";
    }
}