<?php
class DetailProduct
{
    public function getProductById($id)
    {
        if ($id !== "") {
            include "app/view/Header.php";
            include "app/view/Product/DetailProduct.php";
            include "app/view/Footer.php";
        } else {
            echo "Không có giá trị id truyền vào";
        }
    }
}
