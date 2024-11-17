<?php
// Dùng chung hàm connect với thằng cha
class Product extends ConnectDatabase
{
    // public $connect;

    // // trỏ khi db connect vào controller
    // public function __construct()
    // {
    //     parent::__construct();
    // }

    // // trả về null khi db không dùng

    // public function __destruct()
    // {
    //     parent::__destruct();
    // }

    // Them moi san pham 
    // -> here

    public function InsertProduct(object $obj)
    {
        try {
            //code...
        } catch (Exception $err) {
            //throw $th;      
        }
    }

    public function EditProduct(object $obj, $id)
    {
        try {
            //code...
        } catch (Exception $err) {
            //throw $th;      
        }
    }


    public function Delete($id)
    {
        try {
            //code...
        } catch (Exception $err) {
            //throw $th;      
        }
    }

    public function GetProductById($id)
    {
        {
            try {
                $stmt = $this->connect->prepare("SELECT * FROM products WHERE id = :id");
                $stmt->bindParam(':id', $id, PDO::PARAM_INT);
                $stmt->execute();
                return $stmt->fetch(PDO::FETCH_ASSOC); // Trả về dữ liệu sản phẩm dưới dạng mảng
            } catch (Exception $e) {
                echo "Lỗi truy vấn: " . $e->getMessage();
                return null;
            }
        }
    }
}
