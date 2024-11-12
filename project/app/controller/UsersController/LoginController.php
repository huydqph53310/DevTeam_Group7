<?php
class LoginController extends ConnectDatabase
{
    public $connect;

    public $router;
    public function Login()
    {
        $tberr = "";
        $tbsus = "";
        $this->router = new ClientModel();
        if (!isset($_SESSION["username"])) {
            if (isset($_POST["Login"])) {
                if ($_POST["username"] == "" || $_POST["password"] == "") {
                    $tberr = "Email, password Đang trống phải không?";
                }
                if ($tberr == "") {
                    $data = $this->router->loginClient($_POST["username"]);
                    if (($_POST["username"] ==  $data->username) && ($_POST["password"] == $data->pass)) {
                        $tbsus = "Đăng Nhập thành công";
                        $_SESSION["username"] = $_POST["username"];
                        $_SESSION["id"] = $data->CLientId;
                        header("Location: ?wh=");
                    } else {
                        $tberr = "Thông tin tài khoản mật khẩu không chính sác!";
                    }
                    // echo $data->username;
                    // echo $data->password;

                    // var_dump($data->username);
                }
                // var_dump($_POST);
            }
        } else {
            header("Location: ?wh=");
        }
        include "app/view/User/LoginScr.php";
    }
}
