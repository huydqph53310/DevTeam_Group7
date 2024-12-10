<?php 

class Checkout extends ConnectDatabase {
    public function checkout(){
        $index = 0;
        $cart = (new Carts())->getListProductByIdUser($_SESSION["id"]);
        $totalAmount=0;
        $data = (new ClientModel())->getClientById($_SESSION["id"]);

        if(isset($_POST["btnDatHang"])){
            $billId = (new BillModel())->createBill($_SESSION["id"], $_POST["thanhtien"], 'pending', $_POST["httt_ma"], $data->address, "");
            if ($billId) {
                 var_dump($_POST);

                if (isset($_POST['sanphamgiohang'])) {
                    foreach ($_POST['sanphamgiohang'] as $item) {
                        $productId = $item['sp_ma'];  // Mã sản phẩm
                        $price = $item['gia'];        // Giá sản phẩm
                        $quantity = $item['soluong']; // Số lượng sản phẩm
                        
                        // Thực hiện xử lý dữ liệu tại đây (ví dụ: lưu vào giỏ hàng, cập nhật DB, etc.)
                        (new BillModel())->addDetailBill($billId, $productId, $quantity, $price);
                        header('location: app/view/User/ThanhCong.php');
                    }
                }
                // Thêm chi tiết hóa đơn vào bảng 'detailbill'
            }
        }
        include "app/view/user/checkout.php";
    }
}