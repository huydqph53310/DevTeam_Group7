<?php
// Dùng chung hàm connect với thằng cha
class Product extends ConnectDatabase
{
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

    public function ListProduct()
    {
        $stmt = $this->connect->prepare("select * from products");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function TopListProductPriceDESC()
    {
        try {
            $stmt = $this->connect->prepare("SELECT * FROM `products` ORDER BY price DESC LIMIT 6");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Throwable $th) {
            //throw $th;
        }
    }
    public function TopProductCountClickDESC()
    {
        try {
            $stmt = $this->connect->prepare("SELECT * FROM `products` ORDER BY countclick DESC LIMIT 8");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Throwable $th) {
            //throw $th;
        }
    }
    public function SearchProductsByName($searchTerm)
    {
        $searchTerm = '%' . $searchTerm . '%';  // Thêm dấu % để tìm kiếm theo kiểu LIKE
        $sql = "SELECT * FROM products WHERE name LIKE :searchTerm";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(':searchTerm', $searchTerm);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);  // Trả về tất cả sản phẩm tìm được
    }
    public function GetProductById($id)
    { {
            try {
                $stmt = $this->connect->prepare("SELECT * FROM `products` WHERE product_id = :id;");
                $stmt->bindParam(':id', $id, PDO::PARAM_INT);
                $stmt->execute();
                return $stmt->fetch(PDO::FETCH_ASSOC); // Trả về dữ liệu sản phẩm dưới dạng mảng
            } catch (Exception $e) {
                // echo "Lỗi truy vấn: " . $e->getMessage();
                // nên đổ log vào admin thay vì là đổ lỗi ở đây
                // $logMessage = "Lỗi truy vấn: " . $e->getMessage() . " at " . date('[Y-m-d H:i:s]');
                // error_log($logMessage . PHP_EOL, 3, $this->filePath);
                return null;
            }
        }
    }
    public function GetBrandById($id)
    { {
            try {
                $stmt = $this->connect->prepare("SELECT * FROM `brand` WHERE brand_id = :id;");
                $stmt->bindParam(':id', $id, PDO::PARAM_INT);
                $stmt->execute();
                return $stmt->fetch(PDO::FETCH_ASSOC); // Trả về dữ liệu sản phẩm dưới dạng mảng
            } catch (Exception $e) {
                // echo "Lỗi truy vấn: " . $e->getMessage();
                // nên đổ log vào admin thay vì là đổ lỗi ở đây
                // $logMessage = "Lỗi truy vấn: " . $e->getMessage() . " at " . date('[Y-m-d H:i:s]');
                // error_log($logMessage . PHP_EOL, 3, $this->filePath);
                return null;
            }
        }
    }
    public function GetConfigById($id)
    { {
            try {
                $stmt = $this->connect->prepare("SELECT * FROM `hardware_configurations` WHERE config_id = :id;");
                $stmt->bindParam(':id', $id, PDO::PARAM_INT);
                $stmt->execute();
                return $stmt->fetch(PDO::FETCH_ASSOC); // Trả về dữ liệu sản phẩm dưới dạng mảng
            } catch (Exception $e) {
                // echo "Lỗi truy vấn: " . $e->getMessage();
                // nên đổ log vào admin thay vì là đổ lỗi ở đây
                // $logMessage = "Lỗi truy vấn: " . $e->getMessage() . " at " . date('[Y-m-d H:i:s]');
                // error_log($logMessage . PHP_EOL, 3, $this->filePath);
                return null;
            }
        }
    }
}
