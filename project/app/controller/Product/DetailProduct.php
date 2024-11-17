<?php
class DetailProduct
{
    public function getProductById($id)
    {
        if ($id !== "") {
            include_once "app/view/Header.php";
            include_once "app/view/Product/DetailProduct.php";
            include_once "app/view/Footer.php";
        } else {
            echo "Không có giá trị id truyền vào";
        }
    }
}
