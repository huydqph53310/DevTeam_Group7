<?php

class Viewpay extends ConnectDatabase
{

    // process_payment.php
    public function viewpay()
    {
        if ($_SESSION["username"]) {
            $order = (new BillModel())->getTotalRevenue();
            if (isset($_POST["back"])) {
                (new ChiTietBillModel())->updatePaystatuslBills((new RouterController())->getId(), 'paid');
                header("location: app/view/User/ThanhCong.php");
            }
            include "app/view/User/viewpay.php";
        } else {
            header("location: ?wh=home");
        }
    }
}
