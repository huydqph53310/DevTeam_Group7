<?php

class BillModel extends ConnectDatabase
{

    public $connect;
    // Lấy thông tin của bill thông qua id
    public function getBillById($id)
    {
        try {
            //code...
        } catch (Exception $err) {
            //throw $th;
        }
    }

    // Tạo ra một hóa đơn mới

    public function createBill($userId, $totalAmount, $status, $paymentMethod, $shippingAddress, $note)
    {
        $sql = "INSERT INTO bill (users_id, total_amount, status, created_at, payment_method, shipping_address, note) 
                VALUES (:users_id, :total_amount, :status, NOW(), :payment_method, :shipping_address, :note)";
        $stmt = $this->connect->prepare($sql);

        // Thay giá trị nếu cần chuyển đổi kiểu
        if (is_numeric($status)) {
            $status = (string)$status; // Chuyển số thành chuỗi nếu cần
        }

        if (is_numeric($paymentMethod)) {
            $paymentMethod = (string)$paymentMethod; // Chuyển số thành chuỗi nếu cần
        }
        $stmt->bindParam(':users_id', $userId, PDO::PARAM_INT);
        $stmt->bindParam(':total_amount', $totalAmount, PDO::PARAM_STR);
        $stmt->bindParam(':status', $status, PDO::PARAM_STR);
        $stmt->bindParam(':payment_method', $paymentMethod, PDO::PARAM_STR);
        $stmt->bindParam(':shipping_address', $shippingAddress, PDO::PARAM_STR);
        $stmt->bindParam(':note', $note, PDO::PARAM_STR);

        if ($stmt->execute()) {
            return $this->connect->lastInsertId(); // Trả về ID hóa đơn vừa được tạo
        }
        return false; // Trả về false nếu thêm thất bại
    }

    public function addDetailBill($billId, $productId, $quantity, $price)
    {
        $sql = "INSERT INTO detailbill (bill_id, product_id, quantity, price) 
                VALUES (:bill_id, :product_id, :quantity, :price)";
        $stmt = $this->connect->prepare($sql);

        $stmt->bindParam(':bill_id', $billId, PDO::PARAM_INT);
        $stmt->bindParam(':product_id', $productId, PDO::PARAM_INT);
        $stmt->bindParam(':quantity', $quantity, PDO::PARAM_INT);
        $stmt->bindParam(':price', $price, PDO::PARAM_STR);

        return $stmt->execute();
    }



    // Cập nhật hóa đơn theo id
    public function updateBill($id, $data)
    {
        try {
            //code...
        } catch (Exception $err) {
            //throw $th;
        }
    }

    // Xóa hóa đơn nào đó theo id

    public function deleteBill($id)
    {
        try {
            //code...
        } catch (Exception $err) {
            //throw $th;
        }
    }

    // Lấy danh sách của toàn bộ hóa đơn

   public function getOrderById($orderId) {
    // Kết nối đến cơ sở dữ liệu
    // Chuẩn bị câu truy vấn SQL
    $sql = "SELECT * FROM bill WHERE id = :id";
    $stmt = $this->connect->prepare($sql);

    // Bind giá trị cho tham số :id
    $stmt->bindParam(':id', $orderId, PDO::PARAM_INT);

    // Thực thi câu truy vấn
    $stmt->execute();

    // Lấy dữ liệu từ câu truy vấn
    $order = $stmt->fetch(PDO::FETCH_ASSOC);


    return $order;
}
    // lấy danh sách hóa đơn theo ngày

    public function getbillsByDate($id, $data)
    {
        try {
            //code...
        } catch (Exception $err) {
            //throw $th;
        }
    }


    // Gửi dữ liệu tính toán tổng doanh thu tất cả các hóa đơn
    public function getTotalRevenue()
    {
        try {
            $query = "SELECT * FROM bill WHERE users_id = :user_id"; // Điều chỉnh theo user_id nếu cần
            $stmt = $this->connect->prepare($query);
            $stmt->execute(['user_id' => $_SESSION['id']]); // Giả sử user_id lưu trong session         
            // Kiểm tra xem có dữ liệu hay không
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);          
            // Nếu có dữ liệu thì trả về dữ liệu, nếu không thì trả về null
            if (count($result) > 0) {
                return $result; // Trả về dữ liệu
            } else {
                return null; // Trả về null nếu không có dữ liệu
            }
        } catch (Exception $err) {
            //throw $th;
        }
    }
}
