<?php 

class AddCart extends ConnectDatabase{
    public $connect;
    public function AddCart($userId,$productId, $quantity){
        try {
                  // 1. Lấy giá sản phẩm từ bảng `products`
        $sqlGetPrice = "SELECT price FROM products WHERE product_id = :product_id";
        $stmtGetPrice = $this->connect->prepare($sqlGetPrice);
        $stmtGetPrice->bindParam(':product_id', $productId);
        $stmtGetPrice->execute();

        if ($stmtGetPrice->rowCount() === 0) {
            return "Sản phẩm với ID = $productId không tồn tại.";
        }

        $price = $stmtGetPrice->fetch(PDO::FETCH_ASSOC)['price'];

        // 2. Kiểm tra và lấy `cart_id` của user
        $sqlCheckCart = "SELECT cart_id FROM carts WHERE user_id = :user_id";
        $stmtCheckCart = $this->connect->prepare($sqlCheckCart);
        $stmtCheckCart->bindParam(':user_id', $userId);
        $stmtCheckCart->execute();

        if ($stmtCheckCart->rowCount() > 0) {
            $cartId = $stmtCheckCart->fetch(PDO::FETCH_ASSOC)['cart_id'];
        } else {
            // Nếu chưa có giỏ hàng, thêm mới
            $sqlInsertCart = "INSERT INTO carts (user_id, created_at) VALUES (:user_id, :created_at)";
            $stmtInsertCart = $this->connect->prepare($sqlInsertCart);
            $createdAt = date('Y-m-d H:i:s');
            $stmtInsertCart->bindParam(':user_id', $userId);
            $stmtInsertCart->bindParam(':created_at', $createdAt);
            $stmtInsertCart->execute();

            $cartId = $this->connect->lastInsertId();
        }

        // 3. Kiểm tra sản phẩm trong giỏ hàng
        $sqlCheckItem = "SELECT * FROM cart_items WHERE cart_id = :cart_id AND product_id = :product_id";
        $stmtCheckItem = $this->connect->prepare($sqlCheckItem);
        $stmtCheckItem->bindParam(':cart_id', $cartId);
        $stmtCheckItem->bindParam(':product_id', $productId);
        $stmtCheckItem->execute();

        if ($stmtCheckItem->rowCount() > 0) {
            // Nếu sản phẩm đã tồn tại, cập nhật số lượng
            $sqlUpdateItem = "UPDATE cart_items SET 
                                quantity = quantity + :quantity, 
                                created_at = :created_at 
                              WHERE cart_id = :cart_id AND product_id = :product_id";
            $stmtUpdateItem = $this->connect->prepare($sqlUpdateItem);
            $stmtUpdateItem->bindParam(':quantity', $quantity);
            $stmtUpdateItem->bindParam(':created_at', $createdAt);
            $stmtUpdateItem->bindParam(':cart_id', $cartId);
            $stmtUpdateItem->bindParam(':product_id', $productId);
            $stmtUpdateItem->execute();
        } else {
            // Nếu chưa tồn tại, thêm sản phẩm vào giỏ hàng
            $sqlInsertItem = "INSERT INTO cart_items (cart_id, product_id, quantity, price, created_at) 
                              VALUES (:cart_id, :product_id, :quantity, :price, :created_at)";
            $stmtInsertItem = $this->connect->prepare($sqlInsertItem);
            $stmtInsertItem->bindParam(':cart_id', $cartId);
            $stmtInsertItem->bindParam(':product_id', $productId);
            $stmtInsertItem->bindParam(':quantity', $quantity);
            $stmtInsertItem->bindParam(':price', $price);
            $stmtInsertItem->bindParam(':created_at', $createdAt);
            $stmtInsertItem->execute();
        }

        // 4. Reload lại trang
        header("Location: " . "?wh=" .(new RouterController())->getUrl());
        } catch (PDOException $e) {
            // Xử lý lỗi
            echo "Lỗi: " . $e->getMessage();
            return false;
         }
    }
}