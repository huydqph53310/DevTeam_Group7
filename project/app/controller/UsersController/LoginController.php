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
        }
    }
}