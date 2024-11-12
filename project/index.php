<?php
// trang này chỉ sử dụng điều hướng không có logic
/// nhúng các file cần thiết nào đấy
include_once "config/Config.php";
include_once "config/ConnectDatabase.php";
//model
include_once "app/model/user/ClientModel.php";
// // include_once "project/app/model/user/SwitchQueryUser.php";
// include_once "app/model/admin/usermanager/users.php";
// include_once "app/model/admin/usermanager/datauser.php";
session_start();
// //controller
include_once "app/controller/RouterController.php";
include_once "app/controller/UsersController/InfoUserController.php";
include_once "app/controller/UsersController/RegisterController.php";
include_once "app/controller/UsersController/LogoutController.php";
include_once "app/controller/UsersController/LoginController.php";
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
        header("location: ?wh=home");
        break;
    case "home":
        $router->Trangchu();
        break;
    case "login":
        $login = new LoginController();
        $login->login();
        break;
    case "reg":
        $reg = new RegisterController();
        $reg->Regsiter();
    case "logout":
        $logout = new LogoutController();
        $logout->Logout();
        break;
    case "client":
        $client = new InfoUserController();
        $client->InfoClient();

        break;
    case "disconnect":
        include "app/view/Disconnect.php";
        break;
    default:
        include "app/view/404.php";
        break;
}
