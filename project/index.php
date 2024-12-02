<?php
session_start();

const  BASE_URL = "http://localhost/DevTeam_Group7/project/";
include_once 'config/Config.php';
include_once 'config/ConnectDatabase.php';
include_once 'app/controller/RouterController.php';

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
        header("location: router/user");
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
