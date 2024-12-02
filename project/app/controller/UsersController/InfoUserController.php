<?php
class InfoUserController extends ConnectDatabase
{
    public $router;
    public function InfoClient()
    {
        $this->router = new ClientModel();
        if (isset($_SESSION["id"])) {
            $data = $this->router->getClientById($_SESSION["id"]);
            include  __DIR__ . "/../../view/Header.php";
            include  __DIR__ . "/../../view/User/InfoUser.php";
            include  __DIR__ . "/../../view/Footer.php";
            // include "app/view/User/clientz.php";
        } else {
            include "app/view/Disconnect.php";
        }
    }
}
