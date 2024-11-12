<?php
class LogoutController extends ConnectDatabase
{
    public function Logout()
    {
        // Kiểm tra nếu người dùng đã đăng nhập
        if (isset($_SESSION['user_id'])) {
            // Hủy bỏ tất cả các biến session
            $_SESSION = [];

            // Nếu bạn muốn xóa cookie của session
            if (ini_get("session.use_cookies")) {
                $params = session_get_cookie_params();
                setcookie(
                    session_name(),
                    '',
                    time() - 42000,
                    $params["path"],
                    $params["domain"],
                    $params["secure"],
                    $params["httponly"]
                );
            }

            // Hủy session
            session_destroy();
        }
        session_unset();

        // Chuyển hướng người dùng đến trang đăng nhập hoặc trang chủ
        header("Location: ?wh=");
        exit();
    }
}
