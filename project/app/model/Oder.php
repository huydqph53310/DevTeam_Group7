<?php 
class Oder extends ConnectDatabase{
    public function listOder(){
        $stmt=$this->connect->prepare("select * from bill ");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}