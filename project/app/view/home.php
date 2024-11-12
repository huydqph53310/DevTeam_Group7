<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEV SHOP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css"
        rel="stylesheet">

    <style>
        /* Custom styles */
        .custom-header {
            background: linear-gradient(45deg, #6a11cb, #2575fc);
            color: white;
            padding: 20px 0;
        }

        .custom-nav {
            background-color: #f8f9fa;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .carousel-item img {
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card {
            border-radius: 15px;
            transition: all 0.3s ease;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .btn-primary {
            background-color: #6a11cb;
            border-color: #6a11cb;
        }

        .btn-primary:hover {
            background-color: #2575fc;
            border-color: #2575fc;
        }

        footer {
            background-color: #343a40;
            color: white;
            padding: 40px 0;
        }

        footer a {
            color: #adb5bd;
            transition: color 0.3s ease;
        }

        footer a:hover {
            color: #f8f9fa;
        }

        .section-title {
            font-weight: 600;
            text-transform: uppercase;
            margin-bottom: 30px;
            position: relative;
            display: inline-block;
        }

        .section-title::after {
            content: '';
            width: 50px;
            height: 4px;
            background-color: #6a11cb;
            position: absolute;
            left: 0;
            bottom: -10px;
        }

        .col-md-3 {
            padding-top: 20px;
        }

        .link {
            text-decoration: none;
            color: black;
        }

        /* Custom styles for the vertical menu */
        .vertical-menu .dropdown-menu {
            display: none;
            position: absolute;
            left: 100%;
            top: 0;
            min-width: 250px;
            margin-left: 0;
        }

        .vertical-menu .dropdown:hover>.dropdown-menu {
            display: block;
        }

        .dropdown-submenu {
            position: relative;
        }

        .dropdown-submenu .dropdown-menu {
            top: 0;
            left: 100%;
            margin-top: -1px;
        }

        .dropdown-item {
            cursor: pointer;
        }

        /* css san pham */
        .product-card {
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            padding: 15px;
            font-family: Arial, sans-serif;
            position: relative;
        }

        .discount-badge {
            position: absolute;
            top: 10px;
            left: 10px;
            background-color: #ff4d4d;
            color: white;
            padding: 5px;
            font-size: 12px;
            border-radius: 3px;
        }

        .installment-badge {
            font-size: 12px;
            color: #555;
            padding: 3px;
            background-color: #f0f0f5;
            border-radius: 5px;
            display: inline-block;
            margin-top: 5px;
        }

        .product-title {
            font-size: 14px;
            font-weight: bold;
            color: #333;
            margin-top: 10px;
        }

        .price-info {
            font-size: 14px;
            color: #555;
            text-align: center;
            margin-top: 5px;
        }

        .old-price {
            color: #999;
            text-decoration: line-through;
            font-size: 12px;
        }

        .new-price {
            color: #ff4d4d;
            font-size: 16px;
            font-weight: bold;
        }

        .color-options {
            display: flex;
            justify-content: center;
            gap: 5px;
            margin-top: 10px;
        }

        .color-options span {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            border: 1px solid #ddd;
            display: inline-block;
            cursor: pointer;
        }

        /* Điều chỉnh nút dung lượng */
        .storage-options {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 10px;
        }

        .storage-options button {
            border: 1px solid #ddd;
            background: white;
            height: 20px;
            font-size: 12px;
            cursor: pointer;
            border-radius: 5px;
        }

        .storage-options button.active {
            border-color: #ff4d4d;
            color: #ff4d4d;
        }

        /* khuyen mai */
        .offer-section {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .carousel-inner img {
            border-radius: 10px;
            max-height: 200px;
            object-fit: cover;
            width: 100%;
        }

        .carousel-control-prev,
        .carousel-control-next {
            width: 5%;
        }

        .offer-title {
            font-weight: bold;
            font-size: 24px;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>

    <!-- Header -->
    <header class="custom-header">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="logo">
                <h1 class="h3">LOGO</h1>
            </div>
            <div class="search-bar w-50">
                <input type="text" class="form-control" placeholder="Tìm kiếm sản phẩm...">
            </div>
            <div class="user">
                <?php if (!isset($_SESSION["username"])) { ?>
                    <div class="account-popup">
                        <div class="d-flex">
                            <a href="?wh=login"
                                class="btn btn-light me-2 shadow-sm border border-primary text-primary d-flex align-items-center">
                                <i class="bi bi-box-arrow-in-right me-1"></i> Đăng nhập
                            </a>
                            <a href="?wh=reg" class="btn btn-primary shadow-sm d-flex align-items-center">
                                <i class="bi bi-person-plus-fill me-1"></i> Đăng ký
                            </a>
                        </div>
                    </div>
                <?php } else { ?>
                    <a href="?wh=client" class="text-decoration-none text-dark d-flex align-items-center">
                        <i class="bi bi-person-circle me-2"></i> Xin chào, <?= $_SESSION["username"] ?>
                    </a>
                <?php } ?>
            </div>

        </div>
    </header>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg custom-nav py-3">
        <div class="container">
            <a class="navbar-brand" href="#">Trang chủ</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Sản phẩm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Danh mục</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Liên hệ</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    <!-- Main Content -->
    <main class="container mt-4">
        <div class="row">
            <!-- Danh mục sản phẩm (Vertical Menu) -->
            <div class="col-md-3">
                <div class="vertical-menu list-group">
                    <h5 class="text-center mb-4">Danh mục sản phẩm</h5>
                    <div class="dropdown">
                        <a class="list-group-item list-group-item-action dropdown-toggle" href="#" id="laptopMenu"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Laptop
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="laptopMenu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle" href="#">Dell</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Máy văn phòng</a></li>
                                    <li><a class="dropdown-item" href="#">Đồ họa</a></li>
                                    <li><a class="dropdown-item" href="#">Gaming</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle" href="#">HP</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Máy văn phòng</a></li>
                                    <li><a class="dropdown-item" href="#">Đồ họa</a></li>
                                    <li><a class="dropdown-item" href="#">Gaming</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle" href="#">Apple</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Máy văn phòng</a></li>
                                    <li><a class="dropdown-item" href="#">Đồ họa</a></li>
                                    <li><a class="dropdown-item" href="#">Gaming</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <a class="list-group-item list-group-item-action dropdown-toggle" href="#" id="accessoriesMenu"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Phụ kiện
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="accessoriesMenu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle" href="#">Tai nghe</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Tai nghe không dây</a></li>
                                    <li><a class="dropdown-item" href="#">Tai nghe có dây</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle" href="#">Chuột</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Chuột không dây</a></li>
                                    <li><a class="dropdown-item" href="#">Chuột có dây</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Slider -->
            <div class="col-md-9">
                <div id="carouselExampleIndicators" class="carousel slide mb-5" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://via.placeholder.com/1200x400" class="d-block w-100" alt="Slide 1">
                        </div>
                        <div class="carousel-item">
                            <img src="https://via.placeholder.com/1200x400" class="d-block w-100" alt="Slide 2">
                        </div>
                        <div class="carousel-item">
                            <img src="https://via.placeholder.com/1200x400" class="d-block w-100" alt="Slide 3">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>

        <!-- sản phẩm hot -->


        <div class="container my-3">
            <h3 class="section-title">HOT NHẤT TẠI DEV SHOP</h3>
            <div class="row">
                <div class="col-md-2">
                    <div class="product-card">
                        <div class="discount-badge">-18%</div>
                        <div class="product-image text-center">
                            <img src="https://cdn2.fptshop.com.vn/unsafe/180x0/filters:quality(100)/2022_9_30_638001582834179158_lenovo-gaming-legion-5-15iah7-xam-dd.jpg"
                                alt="Samsung Galaxy S24 Ultra" class="img-fluid">
                        </div>

                        <div class="installment-badge text-center">Trả góp 0%</div>

                        <div class="price-info">
                            <span class="old-price">33.990.000 đ</span><br>
                            <span class="new-price">27.990.000 đ</span>
                        </div>

                        <div class="product-title text-center">Laptop lenovo Ideapad</div>

                        <div class="color-options">
                            <span style="background-color: #333;"></span>
                            <span style="background-color: #888;"></span>
                            <span style="background-color: #ccc;"></span>
                        </div>

                        <div class="storage-options">
                            <button class="active">256GB</button>
                            <button>512GB</button>
                            <button>1TB</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="product-card">
                        <div class="discount-badge">-18%</div>
                        <div class="product-image text-center">
                            <img src="https://cdn2.fptshop.com.vn/unsafe/180x0/filters:quality(100)/2022_9_30_638001582834179158_lenovo-gaming-legion-5-15iah7-xam-dd.jpg"
                                alt="Samsung Galaxy S24 Ultra" class="img-fluid">
                        </div>

                        <div class="installment-badge text-center">Trả góp 0%</div>

                        <div class="price-info">
                            <span class="old-price">33.990.000 đ</span><br>
                            <span class="new-price">27.990.000 đ</span>
                        </div>

                        <div class="product-title text-center">Laptop lenovo Ideapad</div>

                        <div class="color-options">
                            <span style="background-color: #333;"></span>
                            <span style="background-color: #888;"></span>
                            <span style="background-color: #ccc;"></span>
                        </div>

                        <div class="storage-options">
                            <button class="active">256GB</button>
                            <button>512GB</button>
                            <button>1TB</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="product-card">
                        <div class="discount-badge">-18%</div>
                        <div class="product-image text-center">
                            <img src="https://cdn2.fptshop.com.vn/unsafe/180x0/filters:quality(100)/2022_9_30_638001582834179158_lenovo-gaming-legion-5-15iah7-xam-dd.jpg"
                                alt="Samsung Galaxy S24 Ultra" class="img-fluid">
                        </div>

                        <div class="installment-badge text-center">Trả góp 0%</div>

                        <div class="price-info">
                            <span class="old-price">33.990.000 đ</span><br>
                            <span class="new-price">27.990.000 đ</span>
                        </div>

                        <div class="product-title text-center">Laptop lenovo Ideapad</div>

                        <div class="color-options">
                            <span style="background-color: #333;"></span>
                            <span style="background-color: #888;"></span>
                            <span style="background-color: #ccc;"></span>
                        </div>

                        <div class="storage-options">
                            <button class="active">256GB</button>
                            <button>512GB</button>
                            <button>1TB</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="product-card">
                        <div class="discount-badge">-18%</div>
                        <div class="product-image text-center">
                            <img src="https://cdn2.fptshop.com.vn/unsafe/180x0/filters:quality(100)/2022_9_30_638001582834179158_lenovo-gaming-legion-5-15iah7-xam-dd.jpg"
                                alt="Samsung Galaxy S24 Ultra" class="img-fluid">
                        </div>

                        <div class="installment-badge text-center">Trả góp 0%</div>

                        <div class="price-info">
                            <span class="old-price">33.990.000 đ</span><br>
                            <span class="new-price">27.990.000 đ</span>
                        </div>

                        <div class="product-title text-center">Laptop lenovo Ideapad</div>

                        <div class="color-options">
                            <span style="background-color: #333;"></span>
                            <span style="background-color: #888;"></span>
                            <span style="background-color: #ccc;"></span>
                        </div>

                        <div class="storage-options">
                            <button class="active">256GB</button>
                            <button>512GB</button>
                            <button>1TB</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="product-card">
                        <div class="discount-badge">-18%</div>
                        <div class="product-image text-center">
                            <img src="https://cdn2.fptshop.com.vn/unsafe/180x0/filters:quality(100)/2022_9_30_638001582834179158_lenovo-gaming-legion-5-15iah7-xam-dd.jpg"
                                alt="Samsung Galaxy S24 Ultra" class="img-fluid">
                        </div>

                        <div class="installment-badge text-center">Trả góp 0%</div>

                        <div class="price-info">
                            <span class="old-price">33.990.000 đ</span><br>
                            <span class="new-price">27.990.000 đ</span>
                        </div>

                        <div class="product-title text-center">Laptop lenovo Ideapad</div>

                        <div class="color-options">
                            <span style="background-color: #333;"></span>
                            <span style="background-color: #888;"></span>
                            <span style="background-color: #ccc;"></span>
                        </div>

                        <div class="storage-options">
                            <button class="active">256GB</button>
                            <button>512GB</button>
                            <button>1TB</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="product-card">
                        <div class="discount-badge">-18%</div>
                        <div class="product-image text-center">
                            <img src="https://cdn2.fptshop.com.vn/unsafe/180x0/filters:quality(100)/2022_9_30_638001582834179158_lenovo-gaming-legion-5-15iah7-xam-dd.jpg"
                                alt="Samsung Galaxy S24 Ultra" class="img-fluid">
                        </div>

                        <div class="installment-badge text-center">Trả góp 0%</div>

                        <div class="price-info">
                            <span class="old-price">33.990.000 đ</span><br>
                            <span class="new-price">27.990.000 đ</span>
                        </div>

                        <div class="product-title text-center">Laptop lenovo Ideapad</div>

                        <div class="color-options">
                            <span style="background-color: #333;"></span>
                            <span style="background-color: #888;"></span>
                            <span style="background-color: #ccc;"></span>
                        </div>

                        <div class="storage-options">
                            <button class="active">256GB</button>
                            <button>512GB</button>
                            <button>1TB</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--khuyn mai  -->
        <div class="container my-3">
            <div class="offer-section">
                <div class="offer-title">Ưu đãi thanh toán</div>
                <div id="offerCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <!-- Slide 1 -->
                        <div class="carousel-item active">
                            <img src="https://via.placeholder.com/800x200?text=Ưu+đãi+1" alt="Ưu đãi 1">
                        </div>
                        <!-- Slide 2 -->
                        <div class="carousel-item">
                            <img src="https://via.placeholder.com/800x200?text=Ưu+đãi+2" alt="Ưu đãi 2">
                        </div>
                        <!-- Slide 3 -->
                        <div class="carousel-item">
                            <img src="https://via.placeholder.com/800x200?text=Ưu+đãi+3" alt="Ưu đãi 3">
                        </div>
                    </div>
                    <!-- Điều khiển trượt -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#offerCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#offerCarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>


        <!-- GỢI Ý CHO BẠN -->
        <section class="highlighted-products mb-5">
            <h2 class="section-title">GỢI Ý CHO BẠN</h2>
            <div class="row">
                <!-- Repeatable Product Card -->
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://via.placeholder.com/200" class="card-img-top" alt="Product 3">
                        <div class="card-body text-center">
                            <h5 class="card-title">Sản phẩm 3</h5>
                            <p class="card-text">Mô tả sản phẩm 3</p>
                            <a href="#" class="btn btn-primary">Mua ngay</a>
                        </div>
                    </div>
                </div>
                <!-- Repeatable Product Cards -->
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>Thông tin liên hệ</h5>
                    <p>Địa chỉ: 123 Đường ABC, Thành phố XYZ</p>
                    <p>Email: contact@example.com</p>
                    <p>Điện thoại: 0123 456 789</p>
                </div>
                <div class="col-md-4">
                    <h5>Liên kết nhanh</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Chính sách bảo hành</a></li>
                        <li><a href="#">Chính sách đổi trả</a></li>
                        <li><a href="#">Hướng dẫn mua hàng</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Kết nối với chúng tôi</h5>
                    <a href="#" class="text-white me-2"><i class="bi bi-facebook"></i> Facebook</a>
                    <a href="#" class="text-white me-2"><i class="bi bi-twitter"></i> Twitter</a>
                    <a href="#" class="text-white"><i class="bi bi-instagram"></i> Instagram</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>