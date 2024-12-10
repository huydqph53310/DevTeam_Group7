<?php
class ListOdersController{
    public function GetListOder(){
        $oders=(new Oder())->listOder();
        if(isset($_POST['smf'])){
            $id = $_POST['id'];
            $status = $_POST['status'];
            $tus = "";
            if($status == "Đang xử lý") $tus = "pending";
            elseif ($status == "Hoàn thành") $tus = "paid";
            else $tus = "cancelled";
            (new ChiTietBillModel)->updateDetailBills($id, $tus);
            header("Location: " . "?wh=" .(new RouterController())->getUrl());
            exit;
        }
        include_once "app/view/AdminManagner/donhang.php";
    }
}