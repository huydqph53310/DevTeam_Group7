<?php
class InfoUserController extends ConnectDatabase
{
    public $router;
    public function InfoClient()
    {
        $this->router = new ClientModel();
        if (isset($_SESSION["id"])) {
            $data = $this->router->getClientById($_SESSION["id"]);
            include  "app/view/Header.php";
            include  "app/view/User/InfoUser.php";
            include  "app/view/Footer.php";
            // include "app/view/User/clientz.php";
        } else {
            include "app/view/Disconnect.php";
        }
    }
}
