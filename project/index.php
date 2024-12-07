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
// include_once 'app/controller/AdminController/AdminController.php';
include_once 'app/controller/RouterController.php';
include_once 'app/controller/UsersController/InfoUserController.php';
include_once 'app/controller/UsersController/Cart.php';
include_once 'app/controller/UsersController/ChangePassController.php';
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
        (new LoginController())->Login();
        break;
    case "orders":
        (new ListOrders())->getOrderById();
        break;
    case "reg":
        (new RegisterController())->Regsiter();
        break;
    case "logout":
        (new LogoutController())->Logout();
        break;
    case "client":
        (new InfoUserController())->InfoClient();
        break;
    case "sanpham":
        (new DetailProduct())->getProductById($router->getId());
        break;
    case "changepassword":
        (new ChangePassController())->ChangePass();
        break;
    case "cart":
        (new Cart())->Cart();
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
