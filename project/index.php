<?php
session_start();

const  BASE_URL = "http://localhost/DevTeam_Group7/project/";
include_once 'config/Config.php';
include_once 'config/ConnectDatabase.php';
include_once 'app/controller/RouterController.php';
// config
include_once 'config/Config.php';
include_once 'config/ConnectDatabase.php';
// model
include_once 'app/model/user/ClientModel.php';
include_once 'app/model/ProductmModel/Product.php';
// controller
include_once 'app/controller/AdminController/AdminController.php';
include_once 'app/controller/RouterController.php';
include_once 'app/controller/UsersController/InfoUserController.php';
include_once 'app/controller/UsersController/RegisterController.php';
include_once 'app/controller/UsersController/LogoutController.php';
include_once 'app/controller/UsersController/LoginController.php';
include_once 'app/controller/UsersController/ListOrders.php';
include_once 'app/controller/Product/DetailProduct.php';
include_once 'app/controller/Product/ListProduct.php';
include_once 'log/WriteLog.php';
// trang này chỉ sử dụng điều hướng không có logic
/// nhúng các file cần thiết nào đấy
// include_once "app/controller/Client/ClientController.php";
//include_once "project/app/controller/Admin/SwitchQuery.php";

//include_once
// gọi thằng cha trở về
$router = new RouterController();
// $Clientcontroller = new ClientController();
// $checkConnect = new ConnectDatabase();
// logic điều hướng
switch ($router->GETURL()) {
    case "":
        (new ListProduct())->ListProduct();
        header("location: ?wh=home");
        break;
    case "home":
        $router->Trangchu();
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
    case "test":
        include "app/view/Header.php";
        include "app/view/test.php";
        include "app/view/Footer.php";
        break;
    case "disconnect":
        include "app/view/Disconnect.php";
        break;
    default:
        include "app/view/404.php";
        break;
}
