<?php
class ListOrders
{

    public function getOrderById()
    {
        if (isset($_SESSION["id"])) {
            include  __DIR__ . "/../../view/Header.php";
            include  __DIR__ . "/../../view/User/Orders.php";
            include  __DIR__ . "/../../view/Footer.php";
        } else {
            echo "Không có giá trị id truyền vào";
        }
    }
}
