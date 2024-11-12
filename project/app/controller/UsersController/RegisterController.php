<?php
class RegisterController extends ConnectDatabase
{
    public $connect;
    public $router;

    public function Regsiter()
    {
        $this->router = new ClientModel();
        if (!isset($_SESSION["username"])) {
            $tberr = "";
            $tbsus = "";
            $createUser = new Client();
            if (isset($_POST["regsiter"])) {
                $createUser = new Client(
                    null,
                    $_POST["name"],
                    strtolower($_POST["username"]),
                    $_POST["password"],
                    $_POST["email"],
                    phone: $_POST["phone"]
                );
                if ($createUser->name == "" || $createUser->username == "" || $createUser->pass == "" || $createUser->email == "" || $createUser->phone == "") {
                    $tberr = "Các trường này là bắt buộc";
                }
                if ($tberr == "") {
                    $tbsus = "Đăng Ký tài khoản thành công";
                    $this->router->reigisterClient($createUser);
                }
            }
        } else {
            header("Location: ?wh=");
        }
        include "app/view/User/RegsiterScr.php";
    }
}
