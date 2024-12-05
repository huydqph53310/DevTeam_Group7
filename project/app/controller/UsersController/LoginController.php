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
                if ($this->Validate($_POST["username"], $_POST["password"])) {
                    $tberr = "Username hoặc Passwword đang để trống";
                } else {
                    /// kiểm tra username có chứa ký tự đặc biệt hay không
                    if ($this->CheckChar($_POST["username"])) {
                        $tberr = "Username không được chứa các ký tự đặc biệt";
                    }
                }
                if ($tberr == "") {
                    $data = $this->router->loginClient($_POST["username"]);
                    // khi không còn thông báo lỗi sẽ tiến hành kiểm tra thông tin đăng nhập
                    if (($_POST["username"] ===  $data->username) && ($_POST["password"] == $data->pass)) {
                        $_SESSION["username"] = $data->username;
                        $_SESSION["id"] = $data->CLientId;
                        header("location: ?wh=home");
                    } else {
                        // ngược lại in ra dòng thông báo lỗi
                        $tberr = "Thông tin tài khoản mật khẩu không chính xác!";
                    }
                }
            } 
            include  "app/view/Header.php";
            include  "app/view/User/LoginScr.php";
            include  "app/view/Footer.php";
        }else {
            header("location: ?wh=home");
        }
    }

    // chia function thành các nhóm nhỏ để dễ debug nếu sảy ra lỗi
    public function Validate($username, $password)
    {
        if ($username == "" || $password == "") {
            return true;
        }
        return false;
    }
    // kiểm tra ký tự đặc biệt trước khi đăng nhập
    public function CheckChar($string)
    {
        // Kiểm tra các ký tự đặc biệt trừ chữ cái, số, khoảng trắng
        return preg_match('/[^a-zA-Z0-9 ]/', $string);
    }
}
