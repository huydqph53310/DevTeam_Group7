<?php
session_start();

// config
include_once __DIR__ . '/../../config/Config.php';
include_once __DIR__ . '/../../config/ConnectDatabase.php';
// model
include_once __DIR__ . '/../../app/model/user/ClientModel.php';
include_once __DIR__ . '/../../app/model/ProductmModel/Product.php';
// controller
include_once __DIR__ . '/../../app/controller/AdminController/AdminController.php';
include_once __DIR__ . '/../../app/controller/RouterController.php';
include_once __DIR__ . '/../../app/controller/UsersController/InfoUserController.php';
include_once __DIR__ . '/../../app/controller/UsersController/RegisterController.php';
include_once __DIR__ . '/../../app/controller/UsersController/LogoutController.php';
include_once __DIR__ . '/../../app/controller/UsersController/LoginController.php';
include_once __DIR__ . '/../../app/controller/UsersController/ListOrders.php';
include_once __DIR__ . '/../../app/controller/Product/DetailProduct.php';
include_once __DIR__ . '/../../log/WriteLog.php';


$userRouter = new RouterController();

switch ($userRouter->getUrl()) {
    case "":
        header("location: ?wh=home");
        break;
    case "home":
        $userRouter->Trangchu();
        break;
    case "login":
        $login = new LoginController();
        $login->login();
        break;
    case "orders":
        $orders = new ListOrders();
        $orders->getOrderById();
        break;
    case "reg":
        $reg = new RegisterController();
        $reg->Regsiter();
        break;
    case "logout":
        $logout = new LogoutController();
        $logout->Logout();
        break;
    case "client":
        $client = new InfoUserController();
        $client->InfoClient();
        break;
    case "sanpham":
        $sanpham = new DetailProduct();
        $sanpham->getProductById($userRouter->getId());
        break;
    default:
        # code...
        break;
}
