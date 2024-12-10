<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh Toán</title>
    <link rel="stylesheet" href="style.css"> <!-- Nhúng CSS vào đây -->
</head>
<style>
    /* Reset cơ bản */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Container chính */
.container {
    width: 80%;
    margin: 0 auto;
    padding: 20px;
    font-family: Arial, sans-serif;
}

/* Tiêu đề */
h1 {
    text-align: center;
    margin-bottom: 30px;
    color: #333;
}

/* Chi tiết đơn hàng */
.order-details {
    margin-bottom: 40px;
    font-size: 18px;
}

.order-details p {
    margin: 10px 0;
}

.order-details strong {
    color: #333;
}

/* Nút thanh toán */
.payment-btn {
    text-align: center;
}

.payment-btn .btn-pay {
    background-color: #4CAF50;
    color: white;
    padding: 15px 30px;
    font-size: 18px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.payment-btn .btn-pay:hover {
    background-color: #45a049;
}

/* Nút trở về */
.back-link {
    text-align: center;
    margin-top: 20px;
}

.back-link .btn-back {
    color: #333;
    text-decoration: none;
    font-size: 16px;
    padding: 10px 20px;
    border: 2px solid #333;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.back-link .btn-back:hover {
    background-color: #333;
    color: white;
}

</style>
<body>
    <div class="container">
        <h1>Thông Tin Thanh Toán</h1>

        <div class="order-details">
            <p><strong>Mã Đơn Hàng:</strong> #<?= $order["id"] ?></p>
            <p><strong>Tổng Tiền:</strong> <?= number_format($order["total_amount"], 0, ',', '.') ?> VND</p>
            <p><strong>Phương Thức Thanh Toán:</strong> <?= $order["payment_method"] ?></p>
            <p><strong>Địa Chỉ Giao Hàng:</strong> <?= $order["shipping_address"] ?></p>
            <p><strong>Ghi Chú:</strong> <?= $order["note"] ?></p>
        </div>

        <!-- Nút thanh toán -->
        <div class="payment-btn">
            <form action="process_payment.php" method="POST">
                <button type="submit" class="btn-pay">Thanh Toán</button>
            </form>
        </div>

        <div class="back-link">
            <a href="index.php" class="btn-back">Trở Về</a>
        </div>
    </div>
</body>
</html>
