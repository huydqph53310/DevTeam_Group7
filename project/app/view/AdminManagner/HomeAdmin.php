<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Trang chủ- Quản trị F-Mchine</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="public/assets/img/favicon.png" rel="icon" />
    <link href="public/assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect" />
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link
      href="public/assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="public/assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="public/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="public/assets/vendor/quill/quill.snow.css" rel="stylesheet" />
    <link href="public/assets/vendor/quill/quill.bubble.css" rel="stylesheet" />
    <link href="public/assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="public/assets/vendor/simple-datatables/style.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="public/assets/css/style.css" rel="stylesheet" />

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
          <a class="nav-link " href="?wh=admin">
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
              <a href="?wh=CreateItem">
                <i class="bi bi-circle"></i><span>Thêm sản phẩm</span>
              </a>
            </li>
            <li>
              <a href="?wh=AddPost">
                <i class="bi bi-circle"></i><span>Thêm bài viết</span>
              </a>
            </li>
            <li>
              <a href="?wh=AddAcc">
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
              <a href="?wh=listAcc">
                <i class="bi bi-circle"></i><span>Danh Sách Tài khoản</span>
              </a>
            </li>
            <li>
              <a href="?wh=listProduct">
                <i class="bi bi-circle"></i><span>Danh sách sản phẩm</span>
              </a>
            </li>
            <li>
              <a href="?wh=ListOders">
                <i class="bi bi-circle"></i><span>Danh sách đơn hàng</span>
              </a>
            </li>
          </ul>
        </li>
        <!-- End Tables Nav -->
        <li class="nav-heading">Trang</li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="?wh=Profile">
            <i class="bi bi-person"></i>
            <span>Hồ Sơ</span>
          </a>
        </li>
        <!-- End Profile Page Nav -->
      </ul>
    </aside>
    <!-- End Sidebar-->

    <main id="main" class="main">
      <div class="pagetitle">
        <h1>Tổng quan</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
            <li class="breadcrumb-item active">Tổng quan</li>
          </ol>
        </nav>
      </div>
      <!-- End Page Title -->

      <section class="section dashboard">
        <div class="row">
          <!-- Left side columns -->
          <div class="col-lg-8">
            <div class="row">
              <!-- Sales Card -->
              <div class="col-xxl-4 col-md-6">
                <div class="card info-card sales-card">
                  <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"
                      ><i class="bi bi-three-dots"></i
                    ></a>
                    <ul
                      class="dropdown-menu dropdown-menu-end dropdown-menu-arrow"
                    >
                      <li class="dropdown-header text-start">
                        <h6>Bộ lọc</h6>
                      </li>

                      <li><a class="dropdown-item" href="#">Hôm nay</a></li>
                      <li><a class="dropdown-item" href="#">Tháng này</a></li>
                      <li><a class="dropdown-item" href="#">Năm nay</a></li>
                    </ul>
                  </div>

                  <div class="card-body">
                    <h5 class="card-title">Sales <span>| Hôm nay</span></h5>

                    <div class="d-flex align-items-center">
                      <div
                        class="card-icon rounded-circle d-flex align-items-center justify-content-center"
                      >
                        <i class="bi bi-cart"></i>
                      </div>
                      <div class="ps-3">
                        <h6>145</h6>
                        <span class="text-success small pt-1 fw-bold">12%</span>
                        <span class="text-muted small pt-2 ps-1">Tăng</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Sales Card -->

              <!-- Revenue Card -->
              <div class="col-xxl-4 col-md-6">
                <div class="card info-card revenue-card">
                  <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"
                      ><i class="bi bi-three-dots"></i
                    ></a>
                    <ul
                      class="dropdown-menu dropdown-menu-end dropdown-menu-arrow"
                    >
                      <li class="dropdown-header text-start">
                        <h6>Filter</h6>
                      </li>

                      <li><a class="dropdown-item" href="#">Hôm nay</a></li>
                      <li><a class="dropdown-item" href="#">Tháng này</a></li>
                      <li><a class="dropdown-item" href="#">Năm nay</a></li>
                    </ul>
                  </div>

                  <div class="card-body">
                    <h5 class="card-title">Revenue <span>| Tháng này</span></h5>

                    <div class="d-flex align-items-center">
                      <div
                        class="card-icon rounded-circle d-flex align-items-center justify-content-center"
                      >
                        <i class="bi bi-currency-dollar"></i>
                      </div>
                      <div class="ps-3">
                        <h6>$3,264</h6>
                        <span class="text-success small pt-1 fw-bold">8%</span>
                        <span class="text-muted small pt-2 ps-1">Tăng</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Revenue Card -->

              <!-- Customers Card -->
              <div class="col-xxl-4 col-xl-12">
                <div class="card info-card customers-card">
                  <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"
                      ><i class="bi bi-three-dots"></i
                    ></a>
                    <ul
                      class="dropdown-menu dropdown-menu-end dropdown-menu-arrow"
                    >
                      <li class="dropdown-header text-start">
                        <h6>Filter</h6>
                      </li>

                      <li><a class="dropdown-item" href="#">Hôm nay</a></li>
                      <li><a class="dropdown-item" href="#">Tháng này</a></li>
                      <li><a class="dropdown-item" href="#">Năm nay</a></li>
                    </ul>
                  </div>

                  <div class="card-body">
                    <h5 class="card-title">Customers <span>| Năm nay</span></h5>

                    <div class="d-flex align-items-center">
                      <div
                        class="card-icon rounded-circle d-flex align-items-center justify-content-center"
                      >
                        <i class="bi bi-people"></i>
                      </div>
                      <div class="ps-3">
                        <h6>1244</h6>
                        <span class="text-danger small pt-1 fw-bold">12%</span>
                        <span class="text-muted small pt-2 ps-1">Tăng</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Customers Card -->

              <!-- Báo cáo -->
              <div class="col-12">
                <div class="card">
                  <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"
                      ><i class="bi bi-three-dots"></i
                    ></a>
                    <ul
                      class="dropdown-menu dropdown-menu-end dropdown-menu-arrow"
                    >
                      <li class="dropdown-header text-start">
                        <h6>Bộ lọc</h6>
                      </li>

                      <li><a class="dropdown-item" href="#">Hôm nay</a></li>
                      <li><a class="dropdown-item" href="#">Tháng này</a></li>
                      <li><a class="dropdown-item" href="#">Năm nay</a></li>
                    </ul>
                  </div>

                  <div class="card-body">
                    <h5 class="card-title">Báo cáo <span>/Hôm nay</span></h5>

                    <!-- Biểu đồ đường -->
                    <div id="reportsChart"></div>

                    <script>
                      document.addEventListener("DOMContentLoaded", () => {
                        new ApexCharts(
                          document.querySelector("#reportsChart"),
                          {
                            series: [
                              {
                                name: "Doanh số",
                                data: [31, 40, 28, 51, 42, 82, 56],
                              },
                              {
                                name: "Doanh thu",
                                data: [11, 32, 45, 32, 34, 52, 41],
                              },
                              {
                                name: "Khách hàng",
                                data: [15, 11, 32, 18, 9, 24, 11],
                              },
                            ],
                            chart: {
                              height: 350,
                              type: "area",
                              toolbar: {
                                show: false,
                              },
                            },
                            markers: {
                              size: 4,
                            },
                            colors: ["#4154f1", "#2eca6a", "#ff771d"],
                            fill: {
                              type: "gradient",
                              gradient: {
                                shadeIntensity: 1,
                                opacityFrom: 0.3,
                                opacityTo: 0.4,
                                stops: [0, 90, 100],
                              },
                            },
                            dataLabels: {
                              enabled: false,
                            },
                            stroke: {
                              curve: "smooth",
                              width: 2,
                            },
                            xaxis: {
                              type: "datetime",
                              categories: [
                                "2018-09-19T00:00:00.000Z",
                                "2018-09-19T01:30:00.000Z",
                                "2018-09-19T02:30:00.000Z",
                                "2018-09-19T03:30:00.000Z",
                                "2018-09-19T04:30:00.000Z",
                                "2018-09-19T05:30:00.000Z",
                                "2018-09-19T06:30:00.000Z",
                              ],
                            },
                            tooltip: {
                              x: {
                                format: "dd/MM/yy HH:mm",
                              },
                            },
                          }
                        ).render();
                      });
                    </script>
                    <!-- Kết thúc Biểu đồ đường -->
                  </div>
                </div>
              </div>
              <!-- Kết thúc Báo cáo -->

              <!-- Giao dịch Mới -->
              <div class="col-12">
                <div class="card recent-sales overflow-auto">
                  <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"
                      ><i class="bi bi-three-dots"></i
                    ></a>
                    <ul
                      class="dropdown-menu dropdown-menu-end dropdown-menu-arrow"
                    >
                      <li class="dropdown-header text-start">
                        <h6>Bộ lọc</h6>
                      </li>

                      <li><a class="dropdown-item" href="#">Hôm nay</a></li>
                      <li><a class="dropdown-item" href="#">Tháng này</a></li>
                      <li><a class="dropdown-item" href="#">Năm nay</a></li>
                    </ul>
                  </div>

                  <div class="card-body">
                    <h5 class="card-title">
                      Giao dịch Mới <span>| Hôm nay</span>
                    </h5>

                    <table class="table table-borderless datatable">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Khách hàng</th>
                          <th scope="col">Sản phẩm</th>
                          <th scope="col">Giá</th>
                          <th scope="col">Trạng thái</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row"><a href="#">#2457</a></th>
                          <td>Brandon Jacob</td>
                          <td>
                            <a href="#" class="text-primary"
                              >At praesentium minu</a
                            >
                          </td>
                          <td>$64</td>
                          <td>
                            <span class="badge bg-success">Đã duyệt</span>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row"><a href="#">#2147</a></th>
                          <td>Bridie Kessler</td>
                          <td>
                            <a href="#" class="text-primary"
                              >Blanditiis dolor omnis similique</a
                            >
                          </td>
                          <td>$47</td>
                          <td>
                            <span class="badge bg-warning">Đang chờ</span>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row"><a href="#">#2049</a></th>
                          <td>Ashleigh Langosh</td>
                          <td>
                            <a href="#" class="text-primary"
                              >At recusandae consectetur</a
                            >
                          </td>
                          <td>$147</td>
                          <td>
                            <span class="badge bg-success">Đã duyệt</span>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row"><a href="#">#2644</a></th>
                          <td>Angus Grady</td>
                          <td>
                            <a href="#" class="text-primary"
                              >Ut voluptatem id earum et</a
                            >
                          </td>
                          <td>$67</td>
                          <td>
                            <span class="badge bg-danger">Bị từ chối</span>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row"><a href="#">#2644</a></th>
                          <td>Raheem Lehner</td>
                          <td>
                            <a href="#" class="text-primary"
                              >Sunt similique distinctio</a
                            >
                          </td>
                          <td>$165</td>
                          <td>
                            <span class="badge bg-success">Đã duyệt</span>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!-- Kết thúc Giao dịch Mới -->

              <!-- Sản phẩm Bán Chạy -->
              <div class="col-12">
                <div class="card top-selling overflow-auto">
                  <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"
                      ><i class="bi bi-three-dots"></i
                    ></a>
                    <ul
                      class="dropdown-menu dropdown-menu-end dropdown-menu-arrow"
                    >
                      <li class="dropdown-header text-start">
                        <h6>Bộ lọc</h6>
                      </li>

                      <li><a class="dropdown-item" href="#">Hôm nay</a></li>
                      <li><a class="dropdown-item" href="#">Tháng này</a></li>
                      <li><a class="dropdown-item" href="#">Năm nay</a></li>
                    </ul>
                  </div>

                  <div class="card-body pb-0">
                    <h5 class="card-title">
                      Sản phẩm Bán Chạy <span>| Hôm nay</span>
                    </h5>

                    <table class="table table-borderless">
                      <thead>
                        <tr>
                          <th scope="col">Ảnh</th>
                          <th scope="col">Sản phẩm</th>
                          <th scope="col">Giá</th>
                          <th scope="col">Đã bán</th>
                          <th scope="col">Doanh thu</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">
                            <a href="#"
                              ><img src="public/assets/img/product-1.jpg" alt=""
                            /></a>
                          </th>
                          <td>
                            <a href="#" class="text-primary fw-bold"
                              >Ut inventore ipsa voluptas nulla</a
                            >
                          </td>
                          <td>$64</td>
                          <td class="fw-bold">124</td>
                          <td>$5,828</td>
                        </tr>
                        <tr>
                          <th scope="row">
                            <a href="#"
                              ><img src="public/assets/img/product-2.jpg" alt=""
                            /></a>
                          </th>
                          <td>
                            <a href="#" class="text-primary fw-bold"
                              >Exercitationem similique doloremque</a
                            >
                          </td>
                          <td>$46</td>
                          <td class="fw-bold">98</td>
                          <td>$4,508</td>
                        </tr>
                        <tr>
                          <th scope="row">
                            <a href="#"
                              ><img src="public/assets/img/product-3.jpg" alt=""
                            /></a>
                          </th>
                          <td>
                            <a href="#" class="text-primary fw-bold"
                              >Doloribus nisi exercitationem</a
                            >
                          </td>
                          <td>$59</td>
                          <td class="fw-bold">74</td>
                          <td>$4,366</td>
                        </tr>
                        <tr>
                          <th scope="row">
                            <a href="#"
                              ><img src="public/assets/img/product-4.jpg" alt=""
                            /></a>
                          </th>
                          <td>
                            <a href="#" class="text-primary fw-bold"
                              >Officiis quaerat sint rerum error</a
                            >
                          </td>
                          <td>$32</td>
                          <td class="fw-bold">63</td>
                          <td>$2,016</td>
                        </tr>
                        <tr>
                          <th scope="row">
                            <a href="#"
                              ><img src="public/assets/img/product-5.jpg" alt=""
                            /></a>
                          </th>
                          <td>
                            <a href="#" class="text-primary fw-bold"
                              >Sit unde debitis delectus repellendus</a
                            >
                          </td>
                          <td>$79</td>
                          <td class="fw-bold">41</td>
                          <td>$3,239</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!-- Kết thúc Sản phẩm Bán Chạy -->
            </div>
          </div>
          <!-- End Left side columns -->

          <!-- Right side columns -->
          <div class="col-lg-4">
           <!-- Hoạt động gần đây -->
<div class="card">
  <div class="filter">
    <a class="icon" href="#" data-bs-toggle="dropdown">
      <i class="bi bi-three-dots"></i>
    </a>
    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
      <li class="dropdown-header text-start">
        <h6>Bộ lọc</h6>
      </li>

      <li><a class="dropdown-item" href="#">Hôm nay</a></li>
      <li><a class="dropdown-item" href="#">Tháng này</a></li>
      <li><a class="dropdown-item" href="#">Năm nay</a></li>
    </ul>
  </div>

  <div class="card-body">
    <h5 class="card-title">Hoạt động gần đây <span>| Hôm nay</span></h5>

    <div class="activity">
      <div class="activity-item d-flex">
        <div class="activite-label">32 phút</div>
        <i class="bi bi-circle-fill activity-badge text-success align-self-start"></i>
        <div class="activity-content">
          Quia quae rerum
          <a href="#" class="fw-bold text-dark">explicabo officiis</a>
          beatae
        </div>
      </div>
      <!-- Kết thúc mục hoạt động -->

      <div class="activity-item d-flex">
        <div class="activite-label">56 phút</div>
        <i class="bi bi-circle-fill activity-badge text-danger align-self-start"></i>
        <div class="activity-content">
          Voluptatem blanditiis blanditiis eveniet
        </div>
      </div>
      <!-- Kết thúc mục hoạt động -->

      <div class="activity-item d-flex">
        <div class="activite-label">2 giờ</div>
        <i class="bi bi-circle-fill activity-badge text-primary align-self-start"></i>
        <div class="activity-content">
          Voluptates corrupti molestias voluptatem
        </div>
      </div>
      <!-- Kết thúc mục hoạt động -->

      <div class="activity-item d-flex">
        <div class="activite-label">1 ngày</div>
        <i class="bi bi-circle-fill activity-badge text-info align-self-start"></i>
        <div class="activity-content">
          Tempore autem saepe
          <a href="#" class="fw-bold text-dark">occaecati voluptatem</a>
          tempore
        </div>
      </div>
      <!-- Kết thúc mục hoạt động -->

      <div class="activity-item d-flex">
        <div class="activite-label">2 ngày</div>
        <i class="bi bi-circle-fill activity-badge text-warning align-self-start"></i>
        <div class="activity-content">
          Est sit eum reiciendis exercitationem
        </div>
      </div>
      <!-- Kết thúc mục hoạt động -->

      <div class="activity-item d-flex">
        <div class="activite-label">4 tuần</div>
        <i class="bi bi-circle-fill activity-badge text-muted align-self-start"></i>
        <div class="activity-content">
          Dicta dolorem harum nulla eius. Ut quidem quidem sit quas
        </div>
      </div>
      <!-- Kết thúc mục hoạt động -->
    </div>
  </div>
</div>
<!-- Kết thúc Hoạt động gần đây -->


            <!-- Báo cáo Ngân sách -->
            <div class="card">
              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"
                  ><i class="bi bi-three-dots"></i
                ></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Bộ lọc</h6>
                  </li>

                  <li><a class="dropdown-item" href="#">Hôm nay</a></li>
                  <li><a class="dropdown-item" href="#">Tháng này</a></li>
                  <li><a class="dropdown-item" href="#">Năm nay</a></li>
                </ul>
              </div>

              <div class="card-body pb-0">
                <h5 class="card-title">
                  Báo cáo Ngân sách <span>| Tháng này</span>
                </h5>

                <div
                  id="budgetChart"
                  style="min-height: 400px"
                  class="echart"
                ></div>

                <script>
                  document.addEventListener("DOMContentLoaded", () => {
                    var budgetChart = echarts
                      .init(document.querySelector("#budgetChart"))
                      .setOption({
                        legend: {
                          data: ["Ngân sách được phân bổ", "Chi tiêu thực tế"],
                        },
                        radar: {
                          indicator: [
                            {
                              name: "Bán hàng",
                              max: 6500,
                            },
                            {
                              name: "Quản lý",
                              max: 16000,
                            },
                            {
                              name: "Công nghệ thông tin",
                              max: 30000,
                            },
                            {
                              name: "Hỗ trợ khách hàng",
                              max: 38000,
                            },
                            {
                              name: "Phát triển",
                              max: 52000,
                            },
                            {
                              name: "Tiếp thị",
                              max: 25000,
                            },
                          ],
                        },
                        series: [
                          {
                            name: "Ngân sách vs chi tiêu",
                            type: "radar",
                            data: [
                              {
                                value: [4200, 3000, 20000, 35000, 50000, 18000],
                                name: "Ngân sách được phân bổ",
                              },
                              {
                                value: [
                                  5000, 14000, 28000, 26000, 42000, 21000,
                                ],
                                name: "Chi tiêu thực tế",
                              },
                            ],
                          },
                        ],
                      });
                  });
                </script>
              </div>
            </div>
            <!-- End Báo cáo Ngân sách -->

            <!-- Lưu lượng truy cập Website -->
            <div class="card">
              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"
                  ><i class="bi bi-three-dots"></i
                ></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Bộ lọc</h6>
                  </li>

                  <li><a class="dropdown-item" href="#">Hôm nay</a></li>
                  <li><a class="dropdown-item" href="#">Tháng này</a></li>
                  <li><a class="dropdown-item" href="#">Năm nay</a></li>
                </ul>
              </div>

              <div class="card-body pb-0">
                <h5 class="card-title">
                  Lưu lượng truy cập Website <span>| Hôm nay</span>
                </h5>

                <div
                  id="trafficChart"
                  style="min-height: 400px"
                  class="echart"
                ></div>

                <script>
                  document.addEventListener("DOMContentLoaded", () => {
                    echarts
                      .init(document.querySelector("#trafficChart"))
                      .setOption({
                        tooltip: {
                          trigger: "item",
                        },
                        legend: {
                          top: "5%",
                          left: "center",
                        },
                        series: [
                          {
                            name: "Truy cập từ",
                            type: "pie",
                            radius: ["40%", "70%"],
                            avoidLabelOverlap: false,
                            label: {
                              show: false,
                              position: "center",
                            },
                            emphasis: {
                              label: {
                                show: true,
                                fontSize: "18",
                                fontWeight: "bold",
                              },
                            },
                            labelLine: {
                              show: false,
                            },
                            data: [
                              {
                                value: 1048,
                                name: "Công cụ tìm kiếm",
                              },
                              {
                                value: 735,
                                name: "Trực tiếp",
                              },
                              {
                                value: 580,
                                name: "Email",
                              },
                              {
                                value: 484,
                                name: "Quảng cáo Liên kết",
                              },
                              {
                                value: 300,
                                name: "Quảng cáo Video",
                              },
                            ],
                          },
                        ],
                      });
                  });
                </script>
              </div>
            </div>
            <!-- End Lưu lượng truy cập Website -->

            <!-- Tin tức & Cập nhật -->
            <div class="card">
              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"
                  ><i class="bi bi-three-dots"></i
                ></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Bộ lọc</h6>
                  </li>

                  <li><a class="dropdown-item" href="#">Hôm nay</a></li>
                  <li><a class="dropdown-item" href="#">Tháng này</a></li>
                  <li><a class="dropdown-item" href="#">Năm nay</a></li>
                </ul>
              </div>

              <div class="card-body pb-0">
                <h5 class="card-title">
                  Tin tức &amp; Cập nhật <span>| Hôm nay</span>
                </h5>

                <div class="news">
                  <div class="post-item clearfix">
                    <img src="public/assets/img/news-1.jpg" alt="" />
                    <h4><a href="#">Không có gì tại và không có gì khác</a></h4>
                    <p>
                      Ngồi từ chối không làm việc chăm chỉ. Bởi vì lựa chọn đúng
                      đã bị từ chối...
                    </p>
                  </div>

                  <div class="post-item clearfix">
                    <img src="public/assets/img/news-2.jpg" alt="" />
                    <h4><a href="#">Một số điều không thể tránh khỏi</a></h4>
                    <p>
                      Không ai giống nhau trong cuộc sống làm việc. Những điều
                      nhỏ nhặt...
                    </p>
                  </div>

                  <div class="post-item clearfix">
                    <img src="public/assets/img/news-3.jpg" alt="" />
                    <h4>
                      <a href="#">Tối đa hóa sự tương đồng và sự thay thế</a>
                    </h4>
                    <p>
                      Thích hưởng thụ giá trị thực sự. Kết quả là bị cáo buộc và
                      toàn bộ...
                    </p>
                  </div>

                  <div class="post-item clearfix">
                    <img src="public/assets/img/news-4.jpg" alt="" />
                    <h4><a href="#">Làm việc vì một cơ thể khỏe mạnh</a></h4>
                    <p>
                      Chọn lựa và chống lại điều bất công. Rất phù hợp và có giá
                      trị...
                    </p>
                  </div>

                  <div class="post-item clearfix">
                    <img src="public/assets/img/news-5.jpg" alt="" />
                    <h4><a href="#">Những sự hủy hoại và đau khổ</a></h4>
                    <p>
                      Đề xuất các thay đổi cần thiết. Miễn phí và phẩm giá đáng
                      giá...
                    </p>
                  </div>
                </div>
                <!-- Kết thúc danh sách bài viết gần đây -->
              </div>
            </div>
            <!-- Kết thúc Tin tức & Cập nhật -->
          </div>
          <!-- End Right side columns -->
        </div>
      </section>
    </main>
    <!-- End #main -->

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

    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

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
