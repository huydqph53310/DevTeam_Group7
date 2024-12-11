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

    public function TopListProductPriceDESC($quantity)
    {
        try {
            $stmt = $this->connect->prepare("SELECT * FROM `products` ORDER BY price DESC LIMIT $quantity");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Throwable $th) {
            //throw $th;
        }
    }

    public function LocSanPhamTheoIDBrand($id)
    {
        try {
            $stmt = $this->connect->prepare("SELECT * FROM `products` WHERE `brand_id` = $id");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Throwable $th) {
            //throw $th;
        }
    }

    // đọc số ảnh trong file
    function countImagesByNamePattern($directory) {
        if (!is_dir($directory)) {
            return "Thư mục không tồn tại.";
        }
        $count = 0;
        $i = 0;
        while (file_exists($directory . '/' . $i . '.png')) {
            $count++;
            $i++;
        }
        return $count;
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

    public function TopBrandDESC()
    {
        try {
            $stmt = $this->connect->prepare("SELECT b.brand_id, b.name, COUNT(p.product_id) AS `product_count` FROM `products` p JOIN brand b ON p.brand_id = b.brand_id GROUP BY b.brand_id, b.name ORDER BY product_count DESC LIMIT 5;");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Throwable $th) {
            //throw $th;
        }
    }

    function getBrandNameById($id_brand) {
        try {
            // Chuẩn bị và thực thi truy vấn
            $stmt = $this->connect->prepare("SELECT * FROM brand WHERE brand_id = :id_brand");
            $stmt->bindParam(':id_brand', $id_brand, PDO::PARAM_INT);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result['name'] ?? null;
        } catch (PDOException $e) {
            // Xử lý lỗi
            echo "Error: " . $e->getMessage();
            return null;
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
