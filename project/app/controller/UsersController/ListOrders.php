<?php
class ListOrders
{

    public function getOrderById()
    {
        if (isset($_SESSION["id"])) {
            include "app/view/Header.php";
            include "app/view/User/Orders.php";
            include "app/view/Footer.php";
        } else {
            echo "Không có giá trị id truyền vào";
        }
    }
}