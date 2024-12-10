<?php
class Brand extends ConnectDatabase{
    public function ListBrand(){
        $stmt = $this->connect->prepare("SELECT * FROM brand ");
                $stmt->execute();
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function GetBrandById($id){
        $stmt=$this->connect->prepare("SELECT * FROM brand where id=:id");
        $stmt->bindParam(':id',$id,PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}