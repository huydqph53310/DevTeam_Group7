<?php 

class Viewpay extends ConnectDatabase {

// process_payment.php
public function viewpay(){
    $order = (new BillModel())->getTotalRevenue();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Giả sử thanh toán thành công
        // Cập nhật trạng thái đơn hàng thành "Đã Thanh Toán"
        
        // Kết nối cơ sở dữ liệu và cập nhật trạng thái
        // Example code: cập nhật vào cơ sở dữ liệu (có thể tùy chỉnh theo hệ thống của bạn)
    
        $order_id = $_POST['order_id']; // Lấy thông tin từ form
        $status = 'paid'; // Trạng thái đã thanh toán
    
        // Cập nhật trạng thái đơn hàng trong cơ sở dữ liệu
        $query = "UPDATE bill SET status = :status WHERE id = :order_id";
        // Đảm bảo rằng bạn đã thực hiện kết nối với cơ sở dữ liệu và thực thi query
    
        // Giả lập thông báo thành công
        echo "Thanh toán thành công!";
        header('Location: thank_you.php'); // Chuyển hướng đến trang cảm ơn hoặc trang khác
        exit;
    }
    include "app/view/User/viewpay.php";
}

}