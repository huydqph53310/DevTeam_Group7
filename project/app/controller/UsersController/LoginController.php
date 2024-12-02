<?php
class LoginController{
    public function login(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $username=trim($_POST['username']);
            $password=trim($_POST['password']);
            $user=(new Login) ->GetUserByUsername($username);
            if($user&& password_verify($password,$user['password'])){
                $_SESSION['user_id']=$user['id'];
                $_SESSION['username']=$user['username'];
                header("Location: index.php");
            }
            else
            {
                $error="Ten dang nhap hoac mat khau khong dung";
            }
<<<<<<< HEAD
=======
            include_once __DIR__ . '/../../view/Header.php';
            include_once  __DIR__ . "'/../../view/User/LoginScr.php";
            include_once  __DIR__ . "'/../../view/Footer.php";
>>>>>>> 2bff0f29088e48c8ee65ef198c699cb6a6db48fb
        }
    }
}