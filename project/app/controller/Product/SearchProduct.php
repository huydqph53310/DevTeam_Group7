<?php
class SearchProduct{
    public function SearchProducts()
{
    if (isset($_GET['search']) && !empty($_GET['search'])) {
        $searchTerm = $_GET['search'];  // Lấy từ khóa tìm kiếm
        $productModel = new Product();  // Giả sử Product là model xử lý dữ liệu sản phẩm
        $products = $productModel->searchProductsByName($searchTerm);  // Truy vấn tìm kiếm
        include_once "app/view/Header.php";
        include_once "app/view/Product/SearchResults.php";  // Gọi view để hiển thị kết quả
        include_once "app/view/Footer.php";
    } else {
        echo "Vui lòng nhập từ khóa tìm kiếm.";
    }
}

}