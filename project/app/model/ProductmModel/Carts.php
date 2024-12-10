<?php 
class Carts extends ConnectDatabase{
    public $connect;
    function getListProductByIdUser($userId) {
        try {
            // 1. Lấy `cart_id` từ bảng `giohang`
            $sqlGetCart = "SELECT cart_id FROM carts WHERE user_id = :user_id";
            $stmtGetCart = $this->connect->prepare($sqlGetCart);
            $stmtGetCart->bindParam(':user_id', $userId);
            $stmtGetCart->execute();
    
            if ($stmtGetCart->rowCount() === 0) {
                return []; // Trả về mảng rỗng nếu không có giỏ hàng
            }
    
            $cartId = $stmtGetCart->fetch(PDO::FETCH_ASSOC)['cart_id'];
    
            // 2. Lấy dữ liệu từ bảng `cart_item` kết hợp với bảng `products`
            $sqlGetItems = "
                SELECT 
                    ci.cart_item_id,
                    ci.product_id,
                    ci.quantity,
                    ci.price,
                    ci.created_at,
                    p.product_name,
                    p.brand_id
                FROM cart_items ci
                JOIN products p ON ci.product_id = p.product_id
                WHERE ci.cart_id = :cart_id
            ";
            $stmtGetItems = $this->connect->prepare($sqlGetItems);
            $stmtGetItems->bindParam(':cart_id', $cartId);
            $stmtGetItems->execute();
    
            // Trả về danh sách sản phẩm trong giỏ hàng
            return $stmtGetItems->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Lỗi: " . $e->getMessage();
            return false;
        }
    }
    
}