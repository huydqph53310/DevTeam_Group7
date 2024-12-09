<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Trang cá nhân- Quản trị F-Mchine</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="public/assets/img/favicon.png" rel="icon">
  <link href="public/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="public/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="public/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="public/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="public/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="public/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="public/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="public/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="public/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
      <div class="d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
          <img src="public/assets/img/logo.png" alt="" />
          <span class="d-none d-lg-block">F-MCHINE</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
      </div>
      <!-- Kết thúc Logo -->

      <div class="search-bar">
        <form
          class="search-form d-flex align-items-center"
          method="POST"
          action="#"
        >
          <input
            type="text"
            name="query"
            placeholder="Tìm kiếm"
            title="Nhập từ khóa tìm kiếm"
          />
          <button type="submit" title="Tìm kiếm">
            <i class="bi bi-search"></i>
          </button>
        </form>
      </div>
      <!-- Kết thúc Thanh Tìm Kiếm -->

      <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">
          <li class="nav-item d-block d-lg-none">
            <a class="nav-link nav-icon search-bar-toggle" href="#">
              <i class="bi bi-search"></i>
            </a>
          </li>
          <!-- Kết thúc Biểu Tượng Tìm Kiếm -->

          <li class="nav-item dropdown">
            <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
              <i class="bi bi-bell"></i>
              <span class="badge bg-primary badge-number">4</span> </a
            ><!-- Kết thúc Biểu Tượng Thông Báo -->

            <ul
              class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications"
            >
              <li class="dropdown-header">
                Bạn có 4 thông báo mới
                <a href="#"
                  ><span class="badge rounded-pill bg-primary p-2 ms-2"
                    >Xem tất cả</span
                  ></a
                >
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>

              <li class="notification-item">
                <i class="bi bi-exclamation-circle text-warning"></i>
                <div>
                  <h4>Lorem Ipsum</h4>
                  <p>Quae dolorem earum veritatis oditseno</p>
                  <p>30 phút trước</p>
                </div>
              </li>

              <li>
                <hr class="dropdown-divider" />
              </li>

              <li class="notification-item">
                <i class="bi bi-x-circle text-danger"></i>
                <div>
                  <h4>Atque rerum nesciunt</h4>
                  <p>Quae dolorem earum veritatis oditseno</p>
                  <p>1 giờ trước</p>
                </div>
              </li>

              <li>
                <hr class="dropdown-divider" />
              </li>

              <li class="notification-item">
                <i class="bi bi-check-circle text-success"></i>
                <div>
                  <h4>Sit rerum fuga</h4>
                  <p>Quae dolorem earum veritatis oditseno</p>
                  <p>2 giờ trước</p>
                </div>
              </li>

              <li>
                <hr class="dropdown-divider" />
              </li>

              <li class="notification-item">
                <i class="bi bi-info-circle text-primary"></i>
                <div>
                  <h4>Dicta reprehenderit</h4>
                  <p>Quae dolorem earum veritatis oditseno</p>
                  <p>4 giờ trước</p>
                </div>
              </li>

              <li>
                <hr class="dropdown-divider" />
              </li>
              <li class="dropdown-footer">
                <a href="#">Xem tất cả thông báo</a>
              </li>
            </ul>
            <!-- Kết thúc Mục Dropdown Thông Báo -->
          </li>
          <!-- Kết thúc Mục Thông Báo -->

          <li class="nav-item dropdown">
            <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
              <i class="bi bi-chat-left-text"></i>
              <span class="badge bg-success badge-number">3</span> </a
            ><!-- Kết thúc Biểu Tượng Tin Nhắn -->

            <ul
              class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages"
            >
              <li class="dropdown-header">
                Bạn có 3 tin nhắn mới
                <a href="#"
                  ><span class="badge rounded-pill bg-primary p-2 ms-2"
                    >Xem tất cả</span
                  ></a
                >
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>

              <li class="message-item">
                <a href="#">
                  <img
                    src="public/assets/img/messages-1.jpg"
                    alt=""
                    class="rounded-circle"
                  />
                  <div>
                    <h4>Maria Hudson</h4>
                    <p>
                      Velit asperiores et ducimus soluta repudiandae labore
                      officia est ut...
                    </p>
                    <p>4 giờ trước</p>
                  </div>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>

              <li class="message-item">
                <a href="#">
                  <img
                    src="public/assets/img/messages-2.jpg"
                    alt=""
                    class="rounded-circle"
                  />
                  <div>
                    <h4>Anna Nelson</h4>
                    <p>
                      Velit asperiores et ducimus soluta repudiandae labore
                      officia est ut...
                    </p>
                    <p>6 giờ trước</p>
                  </div>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>

              <li class="message-item">
                <a href="#">
                  <img
                    src="public/assets/img/messages-3.jpg"
                    alt=""
                    class="rounded-circle"
                  />
                  <div>
                    <h4>David Muldon</h4>
                    <p>
                      Velit asperiores et ducimus soluta repudiandae labore
                      officia est ut...
                    </p>
                    <p>8 giờ trước</p>
                  </div>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>

              <li class="dropdown-footer">
                <a href="#">Xem tất cả tin nhắn</a>
              </li>
            </ul>
            <!-- Kết thúc Mục Dropdown Tin Nhắn -->
          </li>
          <!-- Kết thúc Mục Tin Nhắn -->

          <li class="nav-item dropdown pe-3">
            <a
              class="nav-link nav-profile d-flex align-items-center pe-0"
              href="#"
              data-bs-toggle="dropdown"
            >
              <img
                src="public/assets/img/avata.png"
                alt="Profile"
                class="rounded-circle"
              />
              <span class="d-none d-md-block dropdown-toggle ps-2"
                >ADMIN</span
              > </a
            ><!-- Kết thúc Biểu Tượng Hồ Sơ -->

            <ul
              class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile"
            >
              <li class="dropdown-header">
                <h6>Kevin Anderson</h6>
                <span>Web Designer</span>
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>

              <li>
                <a
                  class="dropdown-item d-flex align-items-center"
                  href="Profile_user.html"
                >
                  <i class="bi bi-person"></i>
                  <span>Hồ Sơ Của Tôi</span>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>

              <li>
                <a
                  class="dropdown-item d-flex align-items-center"
                  href="Profile_user.html"
                >
                  <i class="bi bi-gear"></i>
                  <span>Cài Đặt Tài Khoản</span>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>

              <li>
                <a
                  class="dropdown-item d-flex align-items-center"
                  href="Profile_user.html"
                >
                  <i class="bi bi-question-circle"></i>
                  <span>Cần Giúp Đỡ?</span>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>

              <li>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <i class="bi bi-box-arrow-right"></i>
                  <span>Đăng Xuất</span>
                </a>
              </li>
            </ul>
            <!-- Kết thúc Mục Dropdown Hồ Sơ -->
          </li>
          <!-- Kết thúc Mục Hồ Sơ -->
        </ul>
      </nav>
      <!-- Kết thúc Điều Hướng Biểu Tượng -->
    </header>
    <!-- Kết thúc Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        <a class="nav-link collapsed" href="index.html">
          <i class="bi bi-grid"></i>
          <span>Tổng Quan</span>
        </a>
      </li>
      <!-- End Dashboard Nav -->
      <li class="nav-item">
        <a
          class="nav-link collapsed"
          data-bs-target="#forms-nav"
          data-bs-toggle="collapse"
          href="#"
        >
          <i class="bi bi-journal-text"></i><span>Biểu Mẫu</span
          ><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul
          id="forms-nav"
          class="nav-content collapse"
          data-bs-parent="#sidebar-nav"
        >
          <li>
            <a href="Add_product.html">
              <i class="bi bi-circle"></i><span>Thêm sản phẩm</span>
            </a>
          </li>
          <li>
            <a href="Add_post.html">
              <i class="bi bi-circle"></i><span>Thêm bài viết</span>
            </a>
          </li>
          <li>
            <a href="Add_user.html">
              <i class="bi bi-circle"></i><span>Tạo tài khoản</span>
            </a>
          </li>

        </ul>
      </li>
      <!-- End Forms Nav -->

      <li class="nav-item">
        <a
          class="nav-link collapsed"
          data-bs-target="#tables-nav"
          data-bs-toggle="collapse"
          href="#"
        >
          <i class="bi bi-layout-text-window-reverse"></i><span>Bảng</span
          ><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul
          id="tables-nav"
          class="nav-content collapse"
          data-bs-parent="#sidebar-nav"
        >
          <li>
            <a href="Show_user.html">
              <i class="bi bi-circle"></i><span>Danh Sách Tài khoản</span>
            </a>
          </li>
          <li>
            <a href="Show_product.html">
              <i class="bi bi-circle"></i><span>Danh sách sản phẩm</span>
            </a>
          </li>
          <li>
            <a href="donhang.html">
              <i class="bi bi-circle"></i><span>Danh sách đơn hàng</span>
            </a>
          </li>
        </ul>
      </li>
      <!-- End Tables Nav -->
      <li class="nav-heading">Trang</li>

      <li class="nav-item">
        <a class="nav-link " href="Profile_user.html">
          <i class="bi bi-person"></i>
          <span>Hồ Sơ</span>
        </a>
      </li>
      <!-- End Profile Page Nav -->
    </ul>
  </aside>
   <!-- ======= End Sidebar ======= -->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Tài khoản</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Admin</a></li>
          <li class="breadcrumb-item active">Tài khoản</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="public/assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
              <h2>ADMIN</h2>
              <h3>Web Designer</h3>
              <div class="social-links mt-2">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

        </div>
        <div class="col-xl-8">
          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">
        
                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Tổng quan</button>
                </li>
        
                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Chỉnh sửa hồ sơ</button>
                </li>
        
                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Cài đặt</button>
                </li>
        
                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Đổi mật khẩu</button>
                </li>
        
              </ul>
              <div class="tab-content pt-2">
        
                <!-- Tab Tổng quan -->
                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">Giới thiệu</h5>
                  <p class="small fst-italic">Đây là đoạn mô tả về người dùng, nơi bạn có thể chia sẻ các thông tin cá nhân, sở thích hoặc bất kỳ chi tiết nào khác mà bạn muốn hiển thị.</p>
        
                  <h5 class="card-title">Chi tiết hồ sơ</h5>
        
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Họ và tên</div>
                    <div class="col-lg-9 col-md-8">Nguyễn Văn A</div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8">nguyen.vana@example.com</div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Địa chỉ</div>
                    <div class="col-lg-9 col-md-8">13 Trịnh Văn Bô - Nam Từ Liêm - Hà Nội</div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Ngày sinh</div>
                    <div class="col-lg-9 col-md-8">01/01/1990</div>
                  </div>
                </div>
        
                <!-- Tab Chỉnh sửa hồ sơ -->
                <div class="tab-pane fade profile-edit" id="profile-edit">
                  <h5 class="card-title">Chỉnh sửa hồ sơ</h5>
                  <form>
                    <div class="row mb-3">
                      <label for="inputFullName" class="col-sm-2 col-form-label">Họ và tên</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputFullName" value="Nguyễn Văn A">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail" value="nguyen.vana@example.com">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="inputFullName" class="col-sm-2 col-form-label">Địa chỉ</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputAddress" value="13 Trịnh Văn Bô - Nam Từ Liêm - Hà Nội">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="inputDOB" class="col-sm-2 col-form-label">Ngày sinh</label>
                      <div class="col-sm-10">
                        <input type="date" class="form-control" id="inputDOB" value="1990-01-01">
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Cập nhật thông tin</button>
                  </form>
                </div>
        
                <!-- Tab Cài đặt -->
                <div class="tab-pane fade profile-settings" id="profile-settings">
                  <h5 class="card-title">Cài đặt</h5>
                  <p>Ở đây bạn có thể thay đổi các cài đặt liên quan đến tài khoản của mình.</p>
                  <!-- Các tùy chọn cài đặt có thể thêm vào ở đây -->
                </div>
        
                <!-- Tab Đổi mật khẩu -->
                <div class="tab-pane fade profile-change-password" id="profile-change-password">
                  <h5 class="card-title">Đổi mật khẩu</h5>
                  <form>
                    <div class="row mb-3">
                      <label for="inputOldPassword" class="col-sm-2 col-form-label">Mật khẩu cũ</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputOldPassword" placeholder="Nhập mật khẩu cũ">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="inputNewPassword" class="col-sm-2 col-form-label">Mật khẩu mới</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputNewPassword" placeholder="Nhập mật khẩu mới">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="inputConfirmPassword" class="col-sm-2 col-form-label">Xác nhận mật khẩu mới</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputConfirmPassword" placeholder="Xác nhận mật khẩu mới">
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Đổi mật khẩu</button>
                  </form>
                </div>
        
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </section>

  </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
      <div class="copyright">
        &copy; Bản quyền <strong><span>Dev-Team</span></strong
        >. Tất cả quyền lợi được bảo lưu.
      </div>
      <div class="credits">
        <!-- Tất cả các liên kết trong footer nên được giữ nguyên. -->
        <!-- Bạn có thể xóa các liên kết chỉ khi bạn đã mua phiên bản trả phí. -->
        <!-- Thông tin giấy phép: https://bootstrapmade.com/license/ -->
        <!-- Mua phiên bản trả phí với form liên hệ PHP/AJAX hoạt động: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
        Thiết kế bởi <a href="index.html">Dev Team</a>
      </div>
    </footer>
    <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="public/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="public/assets/vendor/chart.js/chart.umd.js"></script>
  <script src="public/assets/vendor/echarts/echarts.min.js"></script>
  <script src="public/assets/vendor/quill/quill.js"></script>
  <script src="public/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="public/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="public/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="public/assets/js/main.js"></script>

</body>

</html>