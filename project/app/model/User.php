<?php 
class User extends ConnectDatabase{
    public function listUser(){
        $stmt=$this->connect->prepare("select * from users");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}