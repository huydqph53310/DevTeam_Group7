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
            // Nếu tìm thấy sản phẩm, bao gồm các view
            include_once __DIR__ . "/../../../app/view/Header.php";
            include_once __DIR__ . "/../../../app/view/Product/DetailProduct.php";  // Truyền $product vào đây
            include_once __DIR__ . "/../../../app/view/Footer.php";
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
