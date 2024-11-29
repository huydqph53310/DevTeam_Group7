<?php
class Login extends ConnectDatabase
{
    public function GetUserByUsername($username){
        $stmt=$this->connect->prepare("select * from users where username =:username");
        $stmt->execute(['username'=> $username]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}