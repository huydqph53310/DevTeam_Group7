<?php
class ListOrders
{
    public $router;

    public function getOrderById()
    {
        $this->router = new ClientModel();

        if (isset($_SESSION["id"])) {
            $data = $this->router->getClientById($_SESSION["id"]);
            $orders = (new BillModel())->getTotalRevenue();
            include  "app/view/Header.php";
            include  "app/view/User/Orders.php";
            include  "app/view/Footer.php";
        } else {
            echo "Không có giá trị id truyền vào";
        }
    }
}
