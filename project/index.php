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
include_once 'app/model/ProductmModel/AddCart.php';
include_once 'app/model/ProductmModel/Carts.php';
include_once 'app/model/User.php';
include_once 'app/model/Oder.php';


// controller
// include_once 'app/controller/AdminController/AdminController.php';
include_once 'app/controller/RouterController.php';
include_once 'app/controller/AdminController/ListAccountController.php';
include_once 'app/controller/AdminController/ListProductController.php';
include_once 'app/controller/AdminController/ListOdersController.php';
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
    case "add":
        (new AddCart())->AddCart($_SESSION["id"],$router->getId(), 1);
        header("location: ?wh=home&i=false&id=1");
        break;
    case "admin":
        include "app/view/AdminManagner/HomeAdmin.php";
        break;
    case "CreateItem":
        include "app/view/AdminManagner/Add_product.php";
        break;
    case "checkout":
        include "app/view/user/checkout.php";
        break;
    case "create":
        include "app/view/Product/CreateQr.php";
        break;
    case "hethongcuahang":
        include "app/view/Header.php";
        include "app/view/ListShopAddress.php";
        include "app/view/Footer.php";
        break;
    case "lienhe":
        include "app/view/Header.php";
        include "app/view/LienHe.php";
        include "app/view/Footer.php";
        break;
    case "test":
        include "app/view/Header.php";
        include "app/view/test.php";
        include "app/view/Footer.php";
        break;
    case "disconnect":
        include "app/view/Disconnect.php";
        break;
    case "listAcc":
        (new ListAccountController())->GetListAccount();
        break;
    case "listProduct":
        (new ListProductController())->GetListProduct();
        break;
    case "ListOders":
        (new ListOdersController())->GetListOder();
        break;
    default:
        include "app/view/404.php";
        break;
}
