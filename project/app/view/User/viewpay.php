<?php
// Lấy id từ URL
$orderId = isset($_GET['id']) ? $_GET['id'] : 0;

// Kết nối cơ sở dữ liệu và lấy thông tin đơn hàng
$order = (new BillModel())->getOrderById($orderId);

// Kiểm tra xem đơn hàng có tồn tại không
if (!$order) {
    echo "Không tìm thấy đơn hàng.";
    exit;
}

?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh Toán</title>
    <link rel="stylesheet" href="style.css"> <!-- Nhúng CSS vào đây -->
    <!-- Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS và Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<style>
    /* Đảm bảo phần tử chiếm toàn bộ chiều rộng màn hình */
.order-details, .qr-code {
    width: 100%;
    max-width: 600px; /* Điều chỉnh chiều rộng tối đa */
    margin: 20px auto; /* Căn giữa và tạo khoảng cách bên trên và dưới */
    padding: 20px;
    box-sizing: border-box;
    background-color: #f9f9f9; /* Màu nền sáng cho phần tử */
    border-radius: 8px; /* Bo góc mềm mại */
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Tạo bóng nhẹ cho phần tử */
}

/* Căn chỉnh nội dung */
.order-details p {
    margin: 10px 0; /* Khoảng cách giữa các đoạn */
    font-size: 16px;
    line-height: 1.6;
}

/* Định dạng QR Code */
.qr-code {
    text-align: center; /* Căn giữa nội dung */
}

.qr-code img {
    max-width: 100%; /* Hình ảnh sẽ có chiều rộng tối đa là 100% */
    height: auto; /* Giữ tỷ lệ khung hình */
    margin-top: 10px;
}

/* Đảm bảo văn bản strong nổi bật hơn */
strong {
    font-weight: bold;
    color: #333; /* Màu chữ đậm */
}

/* Mobile responsiveness: Cải thiện cho màn hình nhỏ */
@media (max-width: 768px) {
    .order-details, .qr-code {
        padding: 15px;
        margin: 15px;
    }

    .order-details p {
        font-size: 14px;
    }
}

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
<!-- Modal Thanh Toán Thành Công -->
<div class="modal fade" id="paymentSuccessModal" tabindex="-1" role="dialog" aria-labelledby="paymentSuccessModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="paymentSuccessModalLabel">Thanh Toán Thành Công</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Cảm ơn bạn đã thực hiện thanh toán. Đơn hàng của bạn đã được xử lý thành công.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="redirectToHome()">Trở về Trang Chủ</button>
                </div>
            </div>
        </div>
    </div>
<script>
        // Hàm xử lý khi form được submit
        function handlePayment(event) {
            event.preventDefault(); // Ngăn chặn form gửi ngay lập tức

            // Hiển thị modal
            $('#paymentSuccessModal').modal('show');
        }

        // Hàm chuyển hướng về trang chủ
        function redirectToHome() {
            window.location.href = "?wh=home";
        }
    </script>
    <div class="container">
        <form action="" method="post">
        <h1>Thông Tin Thanh Toán</h1>

        <div class="order-details">
            <p><strong>Mã Đơn Hàng:</strong> #<?= $order["id"] ?></p>
            <p><strong>Tổng Tiền:</strong> <?= number_format($order["total_amount"] * 24000, 0, ',', '.') ?> VND</p>
            <p><strong>Phương Thức Thanh Toán:</strong> <?= $order["payment_method"] ?></p>
            <p><strong>Địa Chỉ Giao Hàng:</strong> <?= $order["shipping_address"] ?></p>
            <p><strong>Ghi Chú:</strong> <?= $order["note"] ?></p>
        </div>

        <!-- Hiển thị QR Code -->
        <div class="qr-code">
            <p><strong>QR Code Thanh Toán:</strong></p>
            <img src="public/img/qr.png" alt="QR Code Thanh Toán">
        </div>


        <!-- Nút thanh toán -->
        <div class="payment-btn">
            <button type="submit" name="back" class="btn btn-success" id="btnPay" data-toggle="modal" data-target="#paymentSuccessModal">Thanh Toán</button>
        </div>

        <div class="back-link">
            <a href="index.php" class="btn-back">Trở Về</a>
        </div>
        </form>
    </div>
</body>

</html>