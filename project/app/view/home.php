<style>
    /* Nền tối phủ toàn màn hình */
    #popup {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.7);
        /* Làm tối với độ mờ */
        z-index: 1000;
        /* Đặt lên trên các nội dung khác */
        display: flex;
        justify-content: center;
        align-items: center;
    }

    /* Nội dung của popup */
    #popupContent {
        background: white;
        width: 70%;
        /* Chiếm 70% chiều rộng màn hình */
        height: 80%;
        /* Chiếm 70% chiều cao màn hình */
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        text-align: center;
        position: relative;
    }

    /* Nút đóng */
    #popupContent button {
        position: absolute;
        top: 10px;
        right: 10px;
        background-color: transparent;
        border: none;
        font-size: 20px;
        font-weight: bold;
        color: #333;
        cursor: pointer;
        outline: none;
    }

    #popupContent button:hover {
        color: #e74c3c;
    }
</style>

<body>
    <link rel="preload" href="//bizweb.dktcdn.net/100/507/051/themes/936909/assets/jquery-plugin.js?1731407153286"
        as="script">
    <script src="//bizweb.dktcdn.net/100/507/051/themes/936909/assets/jquery-plugin.js?1731407153286"></script>
    <link rel="preload" href="//bizweb.dktcdn.net/100/507/051/themes/936909/assets/swiper-plugin.js?1731407153286"
        as="script">
    <script src="//bizweb.dktcdn.net/100/507/051/themes/936909/assets/swiper-plugin.js?1731407153286"></script>

    <script src="//bizweb.dktcdn.net/100/507/051/themes/936909/assets/js-search.js?1731407153286"></script>
    <script type="text/javascript" src="//bizweb.dktcdn.net/assets/themes_support/api.jquery.js"></script>
    <script src="//bizweb.dktcdn.net/assets/themes_support/option-selectors.js"></script>
    <main>
        <script>
            // Hiển thị popup khi tải trang
            window.onload = function() {
                document.getElementById("popup").style.display = "flex";
            };

            // Đóng popup
            function closePopup() {
                document.getElementById("popup").style.display = "none";
            }
        </script>
        <div id="popup" style="display: none;">
            <div id="popupContent">
                <h2>Thông báo khuyến mãi</h2>
                <p>Giảm giá lên đến 50% cho tất cả các sản phẩm! Nhanh tay đặt hàng ngay!</p>
                <picture>
                    <source media="(min-width: 1200px)"
                        srcset="public/img/banner/2.png">
                    <source media="(min-width: 992px)"
                        srcset="public/img/banner/2.png">
                    <source media="(min-width: 569px)"
                        srcset="public/img/banner/2.png">
                    <source media="(max-width: 480px)"
                        srcset="//bizweb.dktcdn.net/thumb/large/100/507/051/themes/936909/assets/slider_1.jpg?1731407153286">
                    <img src="/public/img/banner/2.png"
                        alt="Sale lớn chào hè" class="img-responsive center-block" />
                </picture>
                <button onclick="closePopup()">ⓧ</button>
            </div>
        </div>
        <section style="margin-bottom:20px;">
            <div class="section-slide-banner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 col-12">
                            <div class="swiper-button">
                                <div class="swiper-container slide-container swiper-data" data-pagination="true"
                                    data-xxl="1" data-height="true" data-xl="1" data-lg="1" data-md="1" data-xs="1"
                                    data-x="1" data-drag="true" data-autoplay="3000" data-space="0">
                                    <div class="swiper-wrapper">
                                        <a href="#" class="clearfix swiper-slide" title="Sale lớn chào hè">
                                            <picture>
                                                <source media="(min-width: 1200px)"
                                                    srcset="public/img/banner/2.png">
                                                <source media="(min-width: 992px)"
                                                    srcset="public/img/banner/2.png">
                                                <source media="(min-width: 569px)"
                                                    srcset="public/img/banner/2.png">
                                                <source media="(max-width: 480px)"
                                                    srcset="//bizweb.dktcdn.net/thumb/large/100/507/051/themes/936909/assets/slider_1.jpg?1731407153286">
                                                <img src="/public/img/banner/2.png"
                                                    alt="Sale lớn chào hè" class="img-responsive center-block" />
                                            </picture>
                                        </a>
                                        <a href="#" class="clearfix swiper-slide" title="Cuối tuần XẢ VÍ">
                                            <picture>
                                                <source media="(min-width: 1200px)"
                                                    srcset="public/img/banner/1.png">
                                                <source media="(min-width: 992px)"
                                                    srcset="public/img/banner/1.png">
                                                <source media="(min-width: 569px)"
                                                    srcset="public/img/banner/1.png">
                                                <source media="(max-width: 480px)"
                                                    srcset="public/img/banner/1.png">
                                                <img src="public/img/banner/1.png"
                                                    alt="Cuối tuần XẢ VÍ" class="img-responsive center-block" />
                                            </picture>
                                        </a>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                                <div class="swiper-button-prev"><svg class="icon">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#previcon"></use>
                                    </svg></div>
                                <div class="swiper-button-next"><svg class="icon">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#nexticon"></use>
                                    </svg></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-12">
                            <div class="white component-account d-none d-lg-block">
                                <div class="block-account">
                                    <div class="image-acc d-flex">
                                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                            data-src="//bizweb.dktcdn.net/100/507/051/themes/936909/assets/img-account.png?1731407153286"
                                            alt="Avatar khách hàng" class="lazyload">
                                        <?php if (isset($_SESSION["username"])) { ?>
                                            <div class="child-acc">
                                                <a href="?wh=client" title="Tài khoản">Tài khoản</a>
                                                <span>Xin chào <?= $_SESSION["username"] ?></span>
                                            </div>
                                        <?php } else { ?>
                                            <div class="child-acc">
                                                <a href="?wh=home" title="Tài khoản">Tài khoản</a>
                                                <span>Xin chào khách</span>
                                            </div>
                                        <?php } ?>

                                    </div>
                                    <?php if (isset($_SESSION["username"])) { ?>
                                        <div class="group-btn text-center d-flex">
                                            <a class="btn-acc" href="?wh=client" title="Tài Khoản">Tài Khoản</a>
                                            <a class="btn-acc" href="?wh=logout" title="Đăng Xuất">Đăng Xuất</a>
                                        </div>
                                    <?php } else { ?>
                                        <div class="group-btn text-center d-flex">
                                            <a class="btn-acc" href="?wh=login" title="Đăng nhập">Đăng nhập</a>
                                            <a class="btn-acc" href="?wh=reg" title="Đăng ký">Đăng ký</a>
                                        </div>
                                    <?php } ?>
                                </div>
                                <ul class="d-flex acction-link">
                                    <li>
                                        <span class="count_item_pr">0</span>
                                        <a href="/cart" title="Đã thêm">Đã thêm</a>
                                    </li>
                                    <li>
                                        <span class="wishlistCount">0</span>
                                        <a href="yeu-thich" title="Đã lưu">Đã lưu</a>
                                    </li>
                                    <li>
                                        <span class="compareCount">0</span>
                                        <a href="so-sanh-san-pham" title="So sánh">So sánh</a>
                                    </li>
                                </ul>
                                <div class="list-social d-flex">
                                    <a href="#" title="Facebook">
                                        <img alt="Facebook" class="lazyload"
                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                            data-src="//bizweb.dktcdn.net/100/507/051/themes/936909/assets/social_1.jpg?1731407153286"
                                            width="25" height="25" />
                                    </a>
                                    <a href="#" title="Tiktok">
                                        <img alt="Tiktok" class="lazyload"
                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                            data-src="//bizweb.dktcdn.net/100/507/051/themes/936909/assets/social_2.jpg?1731407153286"
                                            width="25" height="25" />
                                    </a>
                                    <a href="#" title="Shopee">
                                        <img alt="Shopee" class="lazyload"
                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                            data-src="//bizweb.dktcdn.net/100/507/051/themes/936909/assets/social_3.jpg?1731407153286"
                                            width="25" height="25" />
                                    </a>
                                    <a href="#" title="Lazada">
                                        <img alt="Lazada" class="lazyload"
                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                            data-src="//bizweb.dktcdn.net/100/507/051/themes/936909/assets/social_4.jpg?1731407153286"
                                            width="25" height="25" />
                                    </a>
                                </div>
                                <a href="#" title="Sắm iphone 12 series" class="banner_item d-block">
                                    <img class="img-old img-responsive" alt="Sắm iphone 12 series"
                                        src="//bizweb.dktcdn.net/100/507/051/themes/936909/assets/bb-right.jpg?1731407153286">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section style="margin-bottom:20px;">
            <div class="section-deal">
                <div class="container">
                    <div class="white lazyload"
                        data-src="//bizweb.dktcdn.net/100/507/051/themes/936909/assets/bg-sale.jpg?1731407153286">
                        <div class="d-flex block-title">
                            <h2 class="title-background">
                                <a href="san-pham-khuyen-mai" title="Deal giá sốc">
                                    <img src="//bizweb.dktcdn.net/100/507/051/themes/936909/assets/title-sale.png?1731407153286"
                                        alt="title">
                                </a>
                            </h2>
                            <div class="flex-time">
                                <div class="timer d-flex">
                                    Kết thúc sau:
                                    <div class="timein d-flex" data-time="8/30/2024 15:10:00"
                                        data-countdown-type="hours">
                                        <span class="hours"></span>&nbsp;:
                                        <span class="minutes"></span>&nbsp;:
                                        <span class="second"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane-content">
                            <div class="pane active">
                                <div class="slide-with-button swiper-button">
                                    <div class="product-sale swiper-container swiper-data" data-drag="true" data-xxl="6"
                                        data-xl="6" data-lg="5" data-md="4" data-xs="2" data-x="2" data-space="10">
                                        <div class="swiper-wrapper">
                                            <?php foreach ($allCountCllick as $b) { ?>
                                                <div class="swiper-slide">
                                                    <div class="product-item-flash" data-productID="34149032" data-qty="350"
                                                        data-pavailable="true">
                                                        <form action="" method="post"
                                                            class="variants product-action item_product_main" data-cart-form
                                                            data-id="product-actions-34149032"
                                                            enctype="multipart/form-data">
                                                            <a class="image_thumb" href="?wh=sanpham&id=<?= $b["product_id"] ?>"
                                                                title="<?= $b["product_name"] ?>">
                                                                <span class="label-sale ">
                                                                    Giảm
                                                                    5%
                                                                </span>
                                                                <img width="214" height="214" style="transform:scale(0.9)"
                                                                    src='public/img/product/Asus/<?= $b["product_name"] ?>/0.png'
                                                                    data-src='public/img/product/<?php echo (new Product())->getBrandNameById($b["brand_id"]) ?>/<?= $b["product_name"] ?>/0.png'
                                                                    alt="<?= $b["product_name"] ?>"
                                                                    class="lazyload img-responsive center-block" />
                                                                <img width="214" height="214" class="lazyload frame"
                                                                    data-src="//bizweb.dktcdn.net/thumb/medium/100/507/051/themes/936909/assets/frame1.png?1731407153286"
                                                                    alt="Apple iPhone 14 Pro Max 128Gb (VN/A)"
                                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA=" />
                                                            </a>
                                                            <a href="javascript:;"
                                                                data-url="/apple-iphone-14-pro-max-128gb-vn-a"
                                                                title="Thêm vào yêu thích"
                                                                class="favorite-link d-inline-block">
                                                                <svg class="icon">
                                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        xlink:href="#wishlist"></use>
                                                                </svg>
                                                            </a>
                                                            <!-- Product on sale -->
                                                            <div class="info-product">
                                                                <h3 class="product-name"><a
                                                                        href="/"
                                                                        title="Apple iPhone 14 Pro Max 128Gb (VN/A)"><?= $b["product_name"] ?></a></h3>
                                                                <div class="price-action">
                                                                    <div class="price-box">
                                                                        <span class="price"><?= number_format($b["price"] * 24000 - 2400000, 0, ',', '.') ?>₫</span>
                                                                        <span class="compare-price"><?= number_format($b["price"] * 24000, 0, ',', '.') ?>₫</span>
                                                                    </div>
                                                                    <div class="action-cart">
                                                                        <a href="?wh=add&id=<?= $b["product_id"] ?>" data-text="Thêm vào giỏ" class="btn-buy btn-left btn-views" title="Thêm vào giỏ">
                                                                            <svg class="icon svg-cart">
                                                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                    xlink:href="#addcarticon">
                                                                                </use>
                                                                            </svg>
                                                                        </a>
                                                                    </div>

                                                                </div>
                                                                <div class="quantity_sale" style="display:none">
                                                                    <div class="titlecount">
                                                                        <b class="qtyflash"></b> sản phẩm đã bán
                                                                    </div>

                                                                    <div class="barprocess">
                                                                        <div class="countlength_sale"></div>
                                                                    </div>
                                                                </div>

                                                                <div class="nowship">
                                                                    Giao siêu tốc 2H
                                                                </div>

                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pane"></div>
                </div>
            </div>
            </div>
            </div>
            <script>
                var getDays = (times) => Math.floor((times / (1000 * 60 * 60 * 24)))
                var getHours = (times) => Math.floor((times % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var getMinutes = (times) => Math.floor((times % (1000 * 60 * 60)) / (1000 * 60));
                var getSeconds = (times) => Math.floor((times % (1000 * 60)) / 1000);

                function randomSell() {
                    var minQty = 40;
                    var maxQty = 80;
                    minQty = Math.ceil(minQty);
                    maxQty = Math.floor(maxQty);
                    var qty = Math.floor(Math.random() * (maxQty - minQty + 1)) + minQty;
                    qty = parseInt(qty);
                    if (qty <= minQty) {
                        qty = minQty;
                    }
                    if (qty > maxQty) {
                        qty = maxQty;
                    }
                    return qty
                }
            </script>
        </section>

        <section style="margin-bottom:20px;">
            <div class="section_block_one">
                <div class="container">
                    <div class="white product-grid">
                        <div class="block-title">
                            <h2 class="title-module">
                                <a href="san-pham-noi-bat" title="Sản phẩm nổi bật">Sản phẩm nổi bật</a>
                            </h2>
                            <ul class="nav-bar-menu">
                                <?php foreach ($topBrand as $a) { ?>
                                    <li><a href="?wh=brand&id=<?= $a["name"] ?>" title="<?= $a["name"] ?>"><?= $a["name"] ?></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                        <div class="row">
                            <!--  -->
                            <?php foreach ($product as $a) { ?>
                                <div class="col-lg-2-5 col-xl-2 col-md-3 col-6">
                                    <form action="/cart/add" method="post" class="variants product-action item_product_main"
                                        data-cart-form data-id="product-actions-34149032" enctype="multipart/form-data">
                                        <a class="image_thumb" href="?wh=sanpham&id=<?= $a["product_id"] ?>"
                                            title="<?= $a["product_name"] ?>">
                                            <span class="label-sale ">
                                                Giảm
                                                8%
                                            </span>
                                            <img width="214" height="214" style="transform:scale(0.9)"
                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                                data-src='public/img/product/<?php echo (new Product())->getBrandNameById($a["brand_id"]) ?>/<?= $a["product_name"] ?>/0.png'
                                                alt="<?= $a["product_name"] ?>"
                                                class="lazyload img-responsive center-block" />
                                            <img width="214" height="214" class="lazyload frame"
                                                data-src="//bizweb.dktcdn.net/thumb/medium/100/507/051/themes/936909/assets/frame1.png?1731407153286"
                                                alt="<?= $a["product_name"] ?>"
                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA=" />
                                        </a>
                                        <a href="javascript:;" data-url="/apple-iphone-14-pro-max-128gb-vn-a"
                                            title="Thêm vào yêu thích" class="favorite-link d-inline-block">
                                            <svg class="icon">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#wishlist">
                                                </use>
                                            </svg>
                                        </a>
                                        <div class="info-product">
                                            <h3 class="product-name"><a href="?wh=sanpham&id=<?= $a["product_id"] ?>"
                                                    title="Apple iPhone 14 Pro Max 128Gb (VN/A)"><?= $a["product_name"] ?></a></h3>
                                            <div class="price-action">
                                                <div class="price-box">
                                                    <span class="price"><?= number_format($a["price"] * 24000 - 2000000, 0, ',', '.') ?>₫</span>
                                                    <span class="compare-price"><?= number_format($a["price"] * 24000, 0, ',', '.') ?>₫</span>
                                                </div>
                                                <div class="action-cart">
                                                    <a href="?wh=add&id=<?= $b["product_id"] ?>" data-text="Thêm vào giỏ" class="btn-buy btn-left btn-views" title="Thêm vào giỏ">
                                                        <svg class="icon svg-cart">
                                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                xlink:href="#addcarticon">
                                                            </use>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="nowship">
                                                Giao siêu tốc 2H
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            <?php } ?>

                            <div class="col-12 text-center">
                                <a class="button-default" href="san-pham-noi-bat" title="Xem thêm">Xem thêm <?= count($allProduct) ?> sản
                                    phẩm</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section style="margin-bottom:20px;">
            <div class="section_phukien section_laptop">
                <div class="container">
                    <div class="white">
                        <div class="block-title d-flex">
                            <h2 class="title-module">
                                <a href="laptop" title="Laptop Xịn">Laptop Xịn</a>
                            </h2>
                            <a class="button-more" href="laptop" title="Xem tất cả">Xem tất cả<svg class="icon">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#nexticon"></use>
                                </svg></a>
                        </div>
                        <div class="swiper-button relative">
                            <div class="product-phukien swiper-container swiper-data" data-drag="true" data-xxl="6"
                                data-xl="6" data-lg="5" data-md="4" data-xs="2.5" data-x="2" data-space="10">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">


                                        <form action="/cart/add" method="post"
                                            class="variants product-action item_product_main" data-cart-form
                                            data-id="product-actions-34157147" enctype="multipart/form-data">
                                            <a class="image_thumb" href="/copy-of-macbook-pro-13in-2020-i7-16gb"
                                                title="MacBook Air 13.6in 2022 Apple M2">
                                                <span class="label-sale ">
                                                    Giảm
                                                    21%

                                                </span>
                                                <img width="214" height="214"
                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                                    data-src="//bizweb.dktcdn.net/thumb/medium/100/507/051/products/1-c46a63b6-6303-49d4-b03b-f6920616edb5-32582441-27fc-406b-8199-76ea1f4cb2b6-53eadbe6-b2c6-48ef-961c-7d1eb6f16e60.jpg?v=1704466551023"
                                                    alt="MacBook Air 13.6in 2022 Apple M2"
                                                    class="lazyload img-responsive center-block" />
                                            </a>
                                            <a href="javascript:;" data-url="/copy-of-macbook-pro-13in-2020-i7-16gb"
                                                title="Thêm vào yêu thích" class="favorite-link d-inline-block">
                                                <svg class="icon">
                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xlink:href="#wishlist"></use>
                                                </svg>
                                            </a>
                                            <div class="info-product">
                                                <h3 class="product-name"><a
                                                        href="/copy-of-macbook-pro-13in-2020-i7-16gb"
                                                        title="MacBook Air 13.6in 2022 Apple M2">MacBook Air 13.6in 2022
                                                        Apple M2</a></h3>
                                                <div class="price-action">
                                                    <div class="price-box">
                                                        <span class="price">26.990.000₫</span>
                                                        <span class="compare-price">33.990.000₫</span>

                                                    </div>
                                                    <div class="action-cart">
                                                        <span class="more-action">
                                                            <svg class="icon">
                                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    xlink:href="#plusicon"></use>
                                                            </svg>
                                                        </span>
                                                        <div class="group-action">
                                                            <a href="?wh=add" data-text="Thêm vào giỏ" class="btn-buy btn-left btn-views" title="Thêm vào giỏ">
                                                                <svg class="icon svg-cart">
                                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        xlink:href="#addcarticon">
                                                                    </use>
                                                                </svg>
                                                            </a>
                                                            <a class="quick-view btn-views" data-text="Xem nhanh"
                                                                href="javascript:;" title="Xem nhanh"
                                                                onclick="onQuickView(this);"
                                                                data-handle="copy-of-macbook-pro-13in-2020-i7-16gb">
                                                                <svg class="icon svg-qv">
                                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        xlink:href="#searchicon"></use>
                                                                </svg>
                                                            </a>

                                                            <a href="javascript:;"
                                                                data-url="/copy-of-macbook-pro-13in-2020-i7-16gb"
                                                                data-text="So sánh" data-type="Máy tính xách tay"
                                                                data-img="//bizweb.dktcdn.net/thumb/thumb/100/507/051/products/1-c46a63b6-6303-49d4-b03b-f6920616edb5-32582441-27fc-406b-8199-76ea1f4cb2b6-53eadbe6-b2c6-48ef-961c-7d1eb6f16e60.jpg?v=1704466551023"
                                                                data-name="MacBook Air 13.6in 2022 Apple M2"
                                                                title="So sánh"
                                                                class="compare-link btn-views d-inline-block">
                                                                <svg class="icon compa">
                                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        xlink:href="#compareIcon"></use>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </form>
                                    </div>
                                    <div class="swiper-slide">



                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-prev"><svg class="icon">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#previcon"></use>
                                </svg></div>
                            <div class="swiper-button-next"><svg class="icon">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#nexticon"></use>
                                </svg></div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section style="margin-bottom:20px;">
            <div class="section_xuhuong">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-12">
                            <div class="bg-module">
                                <div class="block-title">
                                    <h2 class="lazyload title-background"
                                        data-src="//bizweb.dktcdn.net/thumb/thumb/100/507/051/themes/936909/assets/seach_icon.png?1731407153286">
                                        Xu hướng tìm kiếm
                                    </h2>
                                </div>
                                <ul class="return-key">

                                    <li><a href="/search?q=IPhone%2015%20Pro" title="IPhone 15 Pro">Laptop giá rẻ
                                        </a>
                                    </li>
                                    <li><a href="/search?q=Samsung%20S23%20Ultra" title="Samsung S23 Ultra">Laptop tốt nhất 2024
                                        </a></li>
                                    <li><a href="/search?q=IPad%20Pro%202023%20Wifi" title="IPad Pro 2023 Wifi">Laptop hiệu năng cao
                                        </a></li>
                                    <li><a href="/search?q=Sạc%20nhanh%20iphone" title="Sạc nhanh iphone">Laptop nhẹ
                                        </a></li>
                                    <li><a href="/search?q=Quạt%20hơi%20nước" title="Quạt hơi nước">Laptop chơi game
                                        </a>
                                    </li>
                                    <li><a href="/search?q=Iphone%2014%20pro%20max" title="Iphone 14 pro max">Laptop văn phòng
                                        </a></li>
                                    <li><a href="/search?q=tai%20nghe%20airpod" title="tai nghe airpod">Laptop RAM 8GB/16GB/32GB
                                        </a></li>
                                    <li><a href="/search?q=quạt%20để%20bàn" title="quạt để bàn">Laptop card đồ họa NVIDIA RTX
                                        </a></li>
                                    <li><a href="/search?q=laptop%20dell" title="laptop dell">MacBook
                                        </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section style="margin-bottom:20px;">
            <div class="section_service container">
                <div class="white">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="itemsv">
                                <div class="image">
                                    <img class="lazyload" width="32" height="32"
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                        data-src="//bizweb.dktcdn.net/100/507/051/themes/936909/assets/ico_sv1.png?1731407153286"
                                        alt="Hàng chính hãng" />
                                </div>
                                <div class="contentsv">
                                    <h4>
                                        Hàng chính hãng
                                    </h4>
                                    <p>
                                        Đa dạng và chuyên sâu
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="itemsv">
                                <div class="image">
                                    <img class="lazyload" width="32" height="32"
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                        data-src="//bizweb.dktcdn.net/100/507/051/themes/936909/assets/ico_sv2.png?1731407153286"
                                        alt="Đổi trả trong 7 ngày" />
                                </div>
                                <div class="contentsv">
                                    <h4>
                                        Đổi trả trong 7 ngày
                                    </h4>
                                    <p>
                                        Kể từ ngày mua hàng
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="itemsv">
                                <div class="image">
                                    <img class="lazyload" width="32" height="32"
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                        data-src="//bizweb.dktcdn.net/100/507/051/themes/936909/assets/ico_sv3.png?1731407153286"
                                        alt="Cam kết 100%" />
                                </div>
                                <div class="contentsv">
                                    <h4>
                                        Cam kết 100%
                                    </h4>
                                    <p>
                                        Chất lượng sản phẩm
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="itemsv">
                                <div class="image">
                                    <img class="lazyload" width="32" height="32"
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                        data-src="//bizweb.dktcdn.net/100/507/051/themes/936909/assets/ico_sv4.png?1731407153286"
                                        alt="Giao hàng 2H" />
                                </div>
                                <div class="contentsv">
                                    <h4>
                                        Giao hàng 2H
                                    </h4>
                                    <p>
                                        Theo từng sản phẩm
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </main>