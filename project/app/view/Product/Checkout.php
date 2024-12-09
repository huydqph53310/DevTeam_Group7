<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <!-- Link Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <div class="row">
            <!-- Form thông tin khách hàng -->
            <div class="col-md-6">
                <h2 class="mb-4">Thông tin khách hàng</h2>
                <form action="process_checkout.php" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label">Họ và tên</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nhập họ và tên" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Nhập email" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Số điện thoại</label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Nhập số điện thoại" required>
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Địa chỉ</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="Nhập địa chỉ giao hàng" required>
                    </div>
                </form>
            </div>

            <!-- Tóm tắt giỏ hàng -->
            <div class="col-md-6">
                <h2 class="mb-4">Tóm tắt giỏ hàng</h2>
                <div class="card">
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Sản phẩm A
                                <span>500,000 VND</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Sản phẩm B
                                <span>300,000 VND</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Sản phẩm C
                                <span>200,000 VND</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center fw-bold">
                                Tổng cộng
                                <span>1,000,000 VND</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Nút Thanh Toán -->
        <div class="row mt-4">
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-success btn-lg">Thanh toán</button>
            </div>
        </div>
    </div>

    <!-- Link Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
