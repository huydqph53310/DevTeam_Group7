<!DOCTYPE html>
<html lang="vi" class="h-100">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Thanh Toán F-MCHINE</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="public/assets/vendor/bootstrap/css/bootstrap.min.css" type="text/css">
    <!-- Font awesome -->
    <link rel="stylesheet" href="public/assets/vendor/font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Custom css - Các file css do chúng ta tự viết -->
    <link rel="stylesheet" href="public/assets/css/app.css" type="text/css">
</head>

<body>
    <main role="main">
        <!-- Block content - Đục lỗ trên giao diện bố cục chung, đặt tên là `content` -->
        <div class="container mt-4">
            <form class="needs-validation" name="frmthanhtoan" method="post"
                action="#">
                <input type="hidden" name="kh_tendangnhap" value="<?= $data->username ?>">
                <div class="py-5 text-center">
                    <i class="fa fa-credit-card fa-4x" aria-hidden="true"></i>
                    <h2>Thanh toán</h2>
                    <p class="lead">Vui lòng kiểm tra thông tin Khách hàng, thông tin Giỏ hàng trước khi Đặt hàng.</p>
                </div>

                <div class="row">
                    <div class="col-md-4 order-md-2 mb-4">
                        <h4 class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-muted">Giỏ hàng</span>
                            <span class="badge badge-secondary badge-pill">2</span>
                        </h4>
                        <ul class="list-group mb-3">
                            <?php
                            $totalQuantity = 0;
                            foreach ((new Carts())->getListProductByIdUser($_SESSION["id"]) as $items) {
                                $index++; ?>
                                <input type="hidden" name="sanphamgiohang[<?= $index ?>][sp_ma]" value="<?= $items['product_id'] ?>">
                                <input type="hidden" name="sanphamgiohang[<?= $index ?>][gia]" value="<?= $items['price'] ?>">
                                <input type="hidden" name="sanphamgiohang[<?= $index ?>][soluong]" value="<?= $items['quantity'] ?>">
                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-0"><?= $items["product_name"] ?></h6>
                                        <small class="text-muted"><?= number_format($items["price"] * 24000, 0, ',', '.') ?> x <?= $items["quantity"] ?></small>
                                    </div>
                                    <span class="text-muted"><?= number_format($items["price"] * 24000 * $items["quantity"], 0, ',', '.') ?>₫</span>
                                </li>
                            <?php  } ?>
                            <?php
                            foreach ($cart as $item) {
                                $totalAmount += $item['price'] * $item['quantity'];  // Tính tổng giá trị của từng sản phẩm
                            }
                            ?>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Tổng thành tiền</span>
                                <input type="hidden" name="thanhtien" value="<?= $totalAmount ?>">
                                <strong><?= number_format($totalAmount * 24000, 0, ',', '.') ?>₫</strong>
                            </li>
                        </ul>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Mã khuyến mãi">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-secondary">Xác nhận</button>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-8 order-md-1">
                        <h4 class="mb-3">Thông tin khách hàng</h4>

                        <div class="row">
                            <div class="col-md-12">
                                <label for="kh_ten">Họ tên</label>
                                <input type="text" class="form-control" name="kh_ten" id="kh_ten"
                                    value="<?= $data->name ?>" readonly="">
                            </div>
                            <div class="col-md-12">
                                <label for="kh_diachi">Địa chỉ</label>
                                <input type="text" class="form-control" name="kh_diachi" id="kh_diachi"
                                    value="<?= $data->address ?>" readonly="">
                            </div>
                            <div class="col-md-12">
                                <label for="kh_dienthoai">Điện thoại</label>
                                <input type="text" class="form-control" name="kh_dienthoai" id="kh_dienthoai"
                                    value="<?= $data->phone ?>" readonly="">
                            </div>
                            <div class="col-md-12">
                                <label for="kh_email">Email</label>
                                <input type="text" class="form-control" name="kh_email" id="kh_email"
                                    value="<?= $data->email ?>" readonly="">
                            </div>
                        </div>

                        <h4 class="mb-3">Hình thức thanh toán</h4>

                        <div class="d-block my-3">
                            <div class="custom-control custom-radio">
                                <input id="httt-1" name="httt_ma" type="radio" class="custom-control-input" required="" value="1" onclick="togglePayButton()">
                                <label class="custom-control-label" for="httt-1">Tiền mặt</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="httt-2" name="httt_ma" type="radio" class="custom-control-input" required="" value="2" onclick="togglePayButton()">
                                <label class="custom-control-label" for="httt-2">Chuyển khoản</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="httt-3" name="httt_ma" type="radio" class="custom-control-input" required="" value="3" onclick="togglePayButton()">
                                <label class="custom-control-label" for="httt-3">Ship COD</label>
                            </div>
                        </div>
                        <hr class="mb-4">
                        <button type="button" class="btn btn-success btn-lg btn-block" data-bs-toggle="modal" data-bs-target="#qrModal" id="payButton" style="display: none;">Thanh Toán</button>
                        <!-- Nút Thanh Toán -->
                        <!-- <button class="btn btn-success btn-lg btn-block" type="submit" name="pay" id="payButton" style="display: none;">Thanh Toán</button> -->

                        <!-- Nút Đặt Hàng -->
                        <button class="btn btn-primary btn-lg btn-block" type="submit" name="btnDatHang">Đặt hàng</button>
                    </div>
                </div>
            </form>

        </div>
        <!-- End block content -->
    </main>
    <script>
        // Hàm kiểm tra và hiển thị/ẩn nút Thanh Toán
        function togglePayButton() {
            // Lấy tất cả radio buttons
            const paymentMethods = document.querySelectorAll('input[name="httt_ma"]');
            let isTransferSelected = false;

            // Kiểm tra xem có radio nào có giá trị "2" (Chuyển khoản) được chọn không
            paymentMethods.forEach(function(radio) {
                if (radio.value == "2" && radio.checked) {
                    isTransferSelected = true;
                }
            });

            // Hiển thị nút Thanh Toán nếu chọn "Chuyển khoản", ẩn nếu không
            const payButton = document.getElementById('payButton');
            if (isTransferSelected) {
                payButton.style.display = 'inline-block'; // Hiện nút Thanh Toán
            } else {
                payButton.style.display = 'none'; // Ẩn nút Thanh Toán
            }
        }
    </script>
    <!-- Modal -->
     <form action="" method="post">
    <div class="modal fade" id="qrModal" tabindex="-1" aria-labelledby="qrModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md"> <!-- Thêm modal-dialog-centered -->
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="qrModalLabel">Thanh Toán</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <p style="color: #8ddadf;"><strong>Quét mã QR bên dưới để thanh toán:</strong></p>
                    <img src="public/img/qr.png" alt="QR Code" class="img-fluid" style="max-width: 300px; height: auto;">

                    <p style="color: red;">Nhà hàng chỉ nhận thanh toán trực tuyến khi đặt hàng trên Website</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <button type="submit" class="btn btn-info" data-bs-dismiss="modal" name="pay" value="paid">Đã Thanh Toán</button>

                </div>
            </div>
        </div>
    </div>
    </form>

    <script>
        // Lấy các phần tử cần dùng
        const modalOverlay = document.getElementById("modalOverlay");
        const payButtons = document.querySelectorAll(".btn");
        const closeModalBtn = document.getElementById("closeModalBtn");

        // Hiển thị modal khi nhấn "Thanh Toán"
        payButtons.forEach(button => {
            button.addEventListener("click", () => {
                modalOverlay.style.display = "flex"; // Hiển thị modal
            });
        });

        // Ẩn modal khi nhấn "Đóng"
        closeModalBtn.addEventListener("click", () => {
            modalOverlay.style.display = "none"; // Ẩn modal
        });
    </script>
    <!-- footer -->
    <footer class="footer mt-auto py-3">
        <div class="container">
            <span>Bản quyền © bởi <a href="https://QUATECH.ID.vn">DEV-TEAM</a> - <script>
                    document.write(new Date().getFullYear());
                </script>.</span>
            <span class="text-muted">FPT POLYTECHNIC- THỰC HỌC THỰC NGHIỆP</span>
        </div>
    </footer>
    <!-- end footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="public/assets/vendor/jquery/jquery.min.js"></script>
    <script src="public/assets/vendor/popperjs/popper.min.js"></script>
    <script src="public/assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Custom script - Các file js do mình tự viết -->
    <script src="public/assets/assets/js/app.js"></script>

</body>

</html>