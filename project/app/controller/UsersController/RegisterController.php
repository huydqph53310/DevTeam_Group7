<?php
class RegisterController extends ConnectDatabase
{
    public $connect;
    public $router;

    public function Regsiter()
    {
        // link header trang
        $this->router = new ClientModel();
        if (!isset($_SESSION["username"])) {
            $tberr = "";
            $tbsus = "";
            $createUser = new Client();
            if (isset($_POST["regsiter"])) {
                // sau khi nhấn submit
                $createUser = new Client(
                    null,
                    $_POST["name"],
                    strtolower($_POST["username"]), // đưa nó về viết thường trước khi đẩy lên database
                    $_POST["password"],
                    $_POST["email"],
                    phone: $_POST["phone"],
                    address: $this->getAddress($_POST['tinh'], $_POST['huyen'], $_POST['xa'])
                );
                if ($createUser->name == "" || $createUser->username == "" || $createUser->pass == "" || $createUser->email == "" || $createUser->phone == "") {
                    $tberr = "Các trường này là bắt buộc";
                } else {
                    // sau khi kiểm tra trống thì sẽ kiểm tra đến ký tự đặc biệt để tránh tấn công sql
                    if ($this->CheckChar($createUser->username)) {
                        $tberr = "Username không được chứa các ký tự đặc biệt";
                    }
                    // if (isset($_POST['dieukhoan']) && $_POST["dieukhoan"] == 0) {
                    //     $tberr = "Bạn chưa đồng ý với điều khoản của công ty";
                    // }
                    if ($this->CheckRepeatUsername($createUser->username)) {
                        $tberr = "UserName đã có người dùng hãy chọn username khác";
                    }
                    if ($this->CheckTrim($createUser->username)) {
                        $tberr = "UserName không được có khoảng trống";
                    }
                }
                if ($tberr == "") {
                    $tbsus = "Đăng Ký tài khoản thành công";
                    $this->router->reigisterClient($createUser);
                }
            }
            include "app/view/Header.php";
            include "app/view/User/RegsiterScr.php";
            include "app/view/Footer.php";
        } else {
            header("location: ?wh=home");
        }
    }

    public function CheckChar($string)
    {
        // Kiểm tra các ký tự đặc biệt trừ chữ cái, số, khoảng trắng
        return preg_match('/[^a-zA-Z0-9 ]/', $string);
    }

    public function CheckTrim($string)
    {
        return preg_match('/\b\w+\s+\w+\b/', $string);
    }
    public function CheckRepeatUsername($username)
    {
        $data =  $this->router->CheckUsername($username);
        return $this->router->CheckUsername($username);
    }

    public function getAddress($tinhCode, $huyenCode, $xaCode)
    {
        $data = json_decode(file_get_contents(filename: 'app/api/tree.json'), true);
        $tinhName = isset($data[$tinhCode]) ? $data[$tinhCode]['name'] : 'Không tìm thấy Tỉnh'; // kiểm tra tỉnh
        $huyenName = isset($data[$tinhCode]['quan-huyen'][$huyenCode]) ? $data[$tinhCode]['quan-huyen'][$huyenCode]['name'] : 'Không tìm thấy Huyện';
        $xaName = isset($data[$tinhCode]['quan-huyen'][$huyenCode]['xa-phuong'][$xaCode]) ? $data[$tinhCode]['quan-huyen'][$huyenCode]['xa-phuong'][$xaCode]['name'] : 'Không tìm thấy Xã';
        return  $xaName . " - " . $huyenName . " - " . $tinhName;
    }
}
