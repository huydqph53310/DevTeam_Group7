<?php
class DetailProduct
{
    public function getProductById($id)
    {

       // Kiểm tra id có hợp lệ không
    if (!empty($id) && is_numeric($id)) {
        // Gọi model để lấy sản phẩm theo id
        $product = (new Product())->GetProductById($id);
        $brand = (new Product())->GetBrandById($product["brand_id"]);
        $config = (new Product())->GetConfigById($product["config_id"]);

        if ($product) {
            if(isset($_POST["muangay"])){
                $index = 0;
        $cart = (new Product())->GetProductById($id);
        $totalAmount=0;
        $data = (new ClientModel())->getClientById($_SESSION["id"]);

        // if(isset($_POST["btnDatHang"])){
        //     $billId = (new BillModel())->createBill($_SESSION["id"], $_POST["thanhtien"], 'pending', $_POST["httt_ma"], $data->address, "");
        //     if ($billId) {
        //          var_dump($_POST);

        //         if (isset($_POST['sanphamgiohang'])) {
        //             foreach ($_POST['sanphamgiohang'] as $item) {
        //                 $productId = $item['sp_ma'];  // Mã sản phẩm
        //                 $price = $item['gia'];        // Giá sản phẩm
        //                 $quantity = $item['soluong']; // Số lượng sản phẩm
                        
        //                 // Thực hiện xử lý dữ liệu tại đây (ví dụ: lưu vào giỏ hàng, cập nhật DB, etc.)
        //                 (new BillModel())->addDetailBill($billId, $productId, $quantity, $price);
        //                 header('location: app/view/User/ThanhCong.php');
        //             }
        //         }
        //         // Thêm chi tiết hóa đơn vào bảng 'detailbill'
        //     }
        // }
        include "app/view/user/checkout.php";
            }
            if(isset($_POST["addtocart"])){
                header("location: ?wh=add&id=".$id);
            }
            // Nếu tìm thấy sản phẩm, bao gồm các view
            include_once "app/view/Header.php";
            include_once "app/view/Product/DetailProduct.php";  // Truyền $product vào đây
            include_once "app/view/Footer.php";
        } else {
            // Nếu không tìm thấy sản phẩm, hiển thị thông báo
            echo "Sản phẩm không tồn tại.";
        }
    } else {
        // Nếu id không hợp lệ, hiển thị thông báo lỗi
        echo "Không có giá trị id truyền vào hoặc id không hợp lệ.";
    }
    }
}
