<?php
class ListOrders
{
    public $router;

    public function getOrderById()
    {
        $this->router = new ClientModel();

        if (isset($_SESSION["id"])) {
            $data = $this->router->getClientById($_SESSION["id"]);

            include  __DIR__ . "/../../view/Header.php";
            include  __DIR__ . "/../../view/User/Orders.php";
            include  __DIR__ . "/../../view/Footer.php";
        } else {
            echo "Không có giá trị id truyền vào";
        }
    }
}
