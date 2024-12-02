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
        <h1 class="d-none">Ego Mobile - Thế giới mobile cho mọi nhà</h1>
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
                                                    srcset="//bizweb.dktcdn.net/100/507/051/themes/936909/assets/slider_1.jpg?1731407153286">
                                                <source media="(min-width: 992px)"
                                                    srcset="//bizweb.dktcdn.net/100/507/051/themes/936909/assets/slider_1.jpg?1731407153286">
                                                <source media="(min-width: 569px)"
                                                    srcset="//bizweb.dktcdn.net/100/507/051/themes/936909/assets/slider_1.jpg?1731407153286">
                                                <source media="(max-width: 480px)"
                                                    srcset="//bizweb.dktcdn.net/thumb/large/100/507/051/themes/936909/assets/slider_1.jpg?1731407153286">
                                                <img src="//bizweb.dktcdn.net/100/507/051/themes/936909/assets/slider_1.jpg?1731407153286"
                                                    alt="Sale lớn chào hè" class="img-responsive center-block" />
                                            </picture>
                                        </a>
                                        <a href="#" class="clearfix swiper-slide" title="Cuối tuần XẢ VÍ">
                                            <picture>
                                                <source media="(min-width: 1200px)"
                                                    srcset="//bizweb.dktcdn.net/100/507/051/themes/936909/assets/slider_2.jpg?1731407153286">
                                                <source media="(min-width: 992px)"
                                                    srcset="//bizweb.dktcdn.net/100/507/051/themes/936909/assets/slider_2.jpg?1731407153286">
                                                <source media="(min-width: 569px)"
                                                    srcset="//bizweb.dktcdn.net/100/507/051/themes/936909/assets/slider_2.jpg?1731407153286">
                                                <source media="(max-width: 480px)"
                                                    srcset="//bizweb.dktcdn.net/thumb/large/100/507/051/themes/936909/assets/slider_2.jpg?1731407153286">
                                                <img src="//bizweb.dktcdn.net/100/507/051/themes/936909/assets/slider_2.jpg?1731407153286"
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


                                            <!-- <div class="swiper-slide">
                                                <div class="product-item-flash" data-productID="34149156" data-qty="350"
                                                    data-pavailable="true">


                                                    <form action="/cart/add" method="post"
                                                        class="variants product-action item_product_main" data-cart-form
                                                        data-id="product-actions-34149156"
                                                        enctype="multipart/form-data">
                                                        <a class="image_thumb" href="/iphone-15-pro-chinh-hang-vn-a"
                                                            title="iPhone 15 Pro Chính hãng (VN/A)">
                                                            <span class="label-sale ">
                                                                Giảm
                                                                3%

                                                            </span>
                                                            <img width="214" height="214"
                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                                                data-src="//bizweb.dktcdn.net/thumb/medium/100/507/051/products/00904369-638301752870211274-ip-15-pro-max-xanh-1-774ed4d9d6.jpg?v=1704424821593"
                                                                alt="iPhone 15 Pro Chính hãng (VN/A)"
                                                                class="lazyload img-responsive center-block" />
                                                        </a>
                                                        <a href="javascript:;" data-url="/iphone-15-pro-chinh-hang-vn-a"
                                                            title="Thêm vào yêu thích"
                                                            class="favorite-link d-inline-block">
                                                            <svg class="icon">
                                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    xlink:href="#wishlist"></use>
                                                            </svg>
                                                        </a>
                                                        <div class="info-product">
                                                            <h3 class="product-name"><a
                                                                    href="/iphone-15-pro-chinh-hang-vn-a"
                                                                    title="iPhone 15 Pro Chính hãng (VN/A)">iPhone 15
                                                                    Pro Chính hãng (VN/A)</a></h3>
                                                            <div class="price-action">
                                                                <div class="price-box">
                                                                    <span class="price">34.900.000₫</span>
                                                                    <span class="compare-price">35.990.000₫</span>

                                                                </div>
                                                                <div class="action-cart">
                                                                    <span class="more-action">
                                                                        <svg class="icon">
                                                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                xlink:href="#plusicon"></use>
                                                                        </svg>
                                                                    </span>
                                                                    <div class="group-action">
                                                                        <button data-text="Nhiều lựa chọn"
                                                                            class="btn btn-cart btn-left  btn btn-views left-to option-choice"
                                                                            title="Nhiều lựa chọn" type="button"
                                                                            onclick="window.location.href='/iphone-15-pro-chinh-hang-vn-a'">
                                                                            <svg class="icon">
                                                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                    xlink:href="#optionicon"></use>
                                                                            </svg>
                                                                        </button>
                                                                        <a class="quick-view btn-views"
                                                                            data-text="Xem nhanh" href="javascript:;"
                                                                            title="Xem nhanh"
                                                                            onclick="onQuickView(this);"
                                                                            data-handle="iphone-15-pro-chinh-hang-vn-a">
                                                                            <svg class="icon svg-qv">
                                                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                    xlink:href="#searchicon"></use>
                                                                            </svg>
                                                                        </a>

                                                                        <a href="javascript:;"
                                                                            data-url="/iphone-15-pro-chinh-hang-vn-a"
                                                                            data-text="So sánh" data-type="Điện thoại"
                                                                            data-img="//bizweb.dktcdn.net/thumb/thumb/100/507/051/products/00904369-638301752870211274-ip-15-pro-max-xanh-1-774ed4d9d6.jpg?v=1704424821593"
                                                                            data-name="iPhone 15 Pro Chính hãng (VN/A)"
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
                                            </div> -->


                                            <!-- <div class="swiper-slide">
                                                <div class="product-item-flash" data-productID="34149419" data-qty="350"
                                                    data-pavailable="true">


                                                    <form action="/cart/add" method="post"
                                                        class="variants product-action item_product_main" data-cart-form
                                                        data-id="product-actions-34149419"
                                                        enctype="multipart/form-data">
                                                        <a class="image_thumb" href="/apple-iphone-13-plus-128gb"
                                                            title="Apple iPhone 13 Plus 128GB">
                                                            <span class="label-sale ">
                                                                Giảm
                                                                9%

                                                            </span>
                                                            <img width="214" height="214"
                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                                                data-src="//bizweb.dktcdn.net/thumb/medium/100/507/051/products/5-9a6cf23d-f88b-4dd7-80a0-817bd860e6bf.jpg?v=1704426193237"
                                                                alt="Apple iPhone 13 Plus 128GB"
                                                                class="lazyload img-responsive center-block" />
                                                        </a>
                                                        <a href="javascript:;" data-url="/apple-iphone-13-plus-128gb"
                                                            title="Thêm vào yêu thích"
                                                            class="favorite-link d-inline-block">
                                                            <svg class="icon">
                                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    xlink:href="#wishlist"></use>
                                                            </svg>
                                                        </a>
                                                        <div class="info-product">
                                                            <h3 class="product-name"><a
                                                                    href="/apple-iphone-13-plus-128gb"
                                                                    title="Apple iPhone 13 Plus 128GB">Apple iPhone 13
                                                                    Plus 128GB</a></h3>
                                                            <div class="price-action">
                                                                <div class="price-box">
                                                                    <span class="price">15.490.000₫</span>
                                                                    <span class="compare-price">16.990.000₫</span>

                                                                </div>
                                                                <div class="action-cart">
                                                                    <span class="more-action">
                                                                        <svg class="icon">
                                                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                xlink:href="#plusicon"></use>
                                                                        </svg>
                                                                    </span>
                                                                    <div class="group-action">
                                                                        <button data-text="Nhiều lựa chọn"
                                                                            class="btn btn-cart btn-left  btn btn-views left-to option-choice"
                                                                            title="Nhiều lựa chọn" type="button"
                                                                            onclick="window.location.href='/apple-iphone-13-plus-128gb'">
                                                                            <svg class="icon">
                                                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                    xlink:href="#optionicon"></use>
                                                                            </svg>
                                                                        </button>
                                                                        <a class="quick-view btn-views"
                                                                            data-text="Xem nhanh" href="javascript:;"
                                                                            title="Xem nhanh"
                                                                            onclick="onQuickView(this);"
                                                                            data-handle="apple-iphone-13-plus-128gb">
                                                                            <svg class="icon svg-qv">
                                                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                    xlink:href="#searchicon"></use>
                                                                            </svg>
                                                                        </a>

                                                                        <a href="javascript:;"
                                                                            data-url="/apple-iphone-13-plus-128gb"
                                                                            data-text="So sánh" data-type="Điện thoại"
                                                                            data-img="//bizweb.dktcdn.net/thumb/thumb/100/507/051/products/5-9a6cf23d-f88b-4dd7-80a0-817bd860e6bf.jpg?v=1704426193237"
                                                                            data-name="Apple iPhone 13 Plus 128GB"
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
                                            </div> -->


                                            <!-- <div class="swiper-slide">
                                                <div class="product-item-flash" data-productID="34149372" data-qty="350"
                                                    data-pavailable="true">


                                                    <form action="/cart/add" method="post"
                                                        class="variants product-action item_product_main" data-cart-form
                                                        data-id="product-actions-34149372"
                                                        enctype="multipart/form-data">
                                                        <a class="image_thumb" href="/iphone-12-pro-max-chinh-hang-vn-a"
                                                            title="iPhone 12 Pro Max Chính hãng (VN/A)">
                                                            <span class="label-sale ">
                                                                Giảm
                                                                9%

                                                            </span>
                                                            <img width="214" height="214"
                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                                                data-src="//bizweb.dktcdn.net/thumb/medium/100/507/051/products/6-5ca728d1-c2c6-447f-8343-a846095ee36b.jpg?v=1704425958740"
                                                                alt="iPhone 12 Pro Max Chính hãng (VN/A)"
                                                                class="lazyload img-responsive center-block" />
                                                        </a>
                                                        <a href="javascript:;"
                                                            data-url="/iphone-12-pro-max-chinh-hang-vn-a"
                                                            title="Thêm vào yêu thích"
                                                            class="favorite-link d-inline-block">
                                                            <svg class="icon">
                                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    xlink:href="#wishlist"></use>
                                                            </svg>
                                                        </a>
                                                        <div class="info-product">
                                                            <h3 class="product-name"><a
                                                                    href="/iphone-12-pro-max-chinh-hang-vn-a"
                                                                    title="iPhone 12 Pro Max Chính hãng (VN/A)">iPhone
                                                                    12 Pro Max Chính hãng (VN/A)</a></h3>
                                                            <div class="price-action">
                                                                <div class="price-box">
                                                                    <span class="price">15.490.000₫</span>
                                                                    <span class="compare-price">16.990.000₫</span>

                                                                </div>
                                                                <div class="action-cart">
                                                                    <span class="more-action">
                                                                        <svg class="icon">
                                                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                xlink:href="#plusicon"></use>
                                                                        </svg>
                                                                    </span>
                                                                    <div class="group-action">
                                                                        <button data-text="Nhiều lựa chọn"
                                                                            class="btn btn-cart btn-left  btn btn-views left-to option-choice"
                                                                            title="Nhiều lựa chọn" type="button"
                                                                            onclick="window.location.href='/iphone-12-pro-max-chinh-hang-vn-a'">
                                                                            <svg class="icon">
                                                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                    xlink:href="#optionicon"></use>
                                                                            </svg>
                                                                        </button>
                                                                        <a class="quick-view btn-views"
                                                                            data-text="Xem nhanh" href="javascript:;"
                                                                            title="Xem nhanh"
                                                                            onclick="onQuickView(this);"
                                                                            data-handle="iphone-12-pro-max-chinh-hang-vn-a">
                                                                            <svg class="icon svg-qv">
                                                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                    xlink:href="#searchicon"></use>
                                                                            </svg>
                                                                        </a>

                                                                        <a href="javascript:;"
                                                                            data-url="/iphone-12-pro-max-chinh-hang-vn-a"
                                                                            data-text="So sánh" data-type="Điện thoại"
                                                                            data-img="//bizweb.dktcdn.net/thumb/thumb/100/507/051/products/6-5ca728d1-c2c6-447f-8343-a846095ee36b.jpg?v=1704425958740"
                                                                            data-name="iPhone 12 Pro Max Chính hãng (VN/A)"
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
                                            </div> -->


                                            <!-- <div class="swiper-slide">
                                                <div class="product-item-flash" data-productID="34149576" data-qty="350"
                                                    data-pavailable="true">


                                                    <form action="/cart/add" method="post"
                                                        class="variants product-action item_product_main" data-cart-form
                                                        data-id="product-actions-34149576"
                                                        enctype="multipart/form-data">
                                                        <a class="image_thumb"
                                                            href="/xiaomi-redmi-note-12-pro-5g-chinh-hang"
                                                            title="Xiaomi Redmi Note 12 Pro 5G Chính hãng">
                                                            <span class="label-sale ">
                                                                Giảm
                                                                10%

                                                            </span>
                                                            <img width="214" height="214"
                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                                                data-src="//bizweb.dktcdn.net/thumb/medium/100/507/051/products/1-8e84369a-9449-4ee3-b4e7-8dc70f1ed113.jpg?v=1704427027457"
                                                                alt="Xiaomi Redmi Note 12 Pro 5G Chính hãng"
                                                                class="lazyload img-responsive center-block" />
                                                        </a>
                                                        <a href="javascript:;"
                                                            data-url="/xiaomi-redmi-note-12-pro-5g-chinh-hang"
                                                            title="Thêm vào yêu thích"
                                                            class="favorite-link d-inline-block">
                                                            <svg class="icon">
                                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    xlink:href="#wishlist"></use>
                                                            </svg>
                                                        </a>
                                                        <div class="info-product">
                                                            <h3 class="product-name"><a
                                                                    href="/xiaomi-redmi-note-12-pro-5g-chinh-hang"
                                                                    title="Xiaomi Redmi Note 12 Pro 5G Chính hãng">Xiaomi
                                                                    Redmi Note 12 Pro 5G Chính hãng</a></h3>
                                                            <div class="price-action">
                                                                <div class="price-box">
                                                                    <span class="price">8.540.000₫</span>
                                                                    <span class="compare-price">9.250.000₫</span>

                                                                </div>
                                                                <div class="action-cart">
                                                                    <span class="more-action">
                                                                        <svg class="icon">
                                                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                xlink:href="#plusicon"></use>
                                                                        </svg>
                                                                    </span>
                                                                    <div class="group-action">
                                                                        <input type="hidden" name="variantId"
                                                                            data-qty="1000000" value="106947105" />
                                                                        <button data-text="Thêm vào giỏ"
                                                                            class="btn-buy btn-left btn-views add_to_cart "
                                                                            title="Thêm vào giỏ">
                                                                            <svg class="icon svg-cart">
                                                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                    xlink:href="#addcarticon"></use>
                                                                            </svg>
                                                                        </button>
                                                                        <a class="quick-view btn-views"
                                                                            data-text="Xem nhanh" href="javascript:;"
                                                                            title="Xem nhanh"
                                                                            onclick="onQuickView(this);"
                                                                            data-handle="xiaomi-redmi-note-12-pro-5g-chinh-hang">
                                                                            <svg class="icon svg-qv">
                                                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                    xlink:href="#searchicon"></use>
                                                                            </svg>
                                                                        </a>

                                                                        <a href="javascript:;"
                                                                            data-url="/xiaomi-redmi-note-12-pro-5g-chinh-hang"
                                                                            data-text="So sánh" data-type="Điện thoại"
                                                                            data-img="//bizweb.dktcdn.net/thumb/thumb/100/507/051/products/1-8e84369a-9449-4ee3-b4e7-8dc70f1ed113.jpg?v=1704427027457"
                                                                            data-name="Xiaomi Redmi Note 12 Pro 5G Chính hãng"
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
                                            </div> -->


                                            <!-- <div class="swiper-slide">
                                                <div class="product-item-flash" data-productID="34149320" data-qty="350"
                                                    data-pavailable="true">


                                                    <form action="/cart/add" method="post"
                                                        class="variants product-action item_product_main" data-cart-form
                                                        data-id="product-actions-34149320"
                                                        enctype="multipart/form-data">
                                                        <a class="image_thumb" href="/iphone-15-pro-max-chinh-hang-vn-a"
                                                            title="iPhone 15 Pro Max Đen Chính hãng (VN/A)">
                                                            <span class="label-sale ">
                                                                Giảm
                                                                6%

                                                            </span>
                                                            <img width="214" height="214"
                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                                                data-src="//bizweb.dktcdn.net/thumb/medium/100/507/051/products/iphone-14-pro-max-gia-re-hai-phong-cr-800x800-jpeg-b165657e-b629-4f4a-9f87-6b2c33f9c870-93c02860-e729-4700-a057-3576eb8cad0f.jpg?v=1704425629593"
                                                                alt="iPhone 15 Pro Max Đen Chính hãng (VN/A)"
                                                                class="lazyload img-responsive center-block" />
                                                        </a>
                                                        <a href="javascript:;"
                                                            data-url="/iphone-15-pro-max-chinh-hang-vn-a"
                                                            title="Thêm vào yêu thích"
                                                            class="favorite-link d-inline-block">
                                                            <svg class="icon">
                                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    xlink:href="#wishlist"></use>
                                                            </svg>
                                                        </a>
                                                        <div class="info-product">
                                                            <h3 class="product-name"><a
                                                                    href="/iphone-15-pro-max-chinh-hang-vn-a"
                                                                    title="iPhone 15 Pro Max Đen Chính hãng (VN/A)">iPhone
                                                                    15 Pro Max Đen Chính hãng (VN/A)</a></h3>
                                                            <div class="price-action">
                                                                <div class="price-box">
                                                                    <span class="price">32.590.000₫</span>
                                                                    <span class="compare-price">34.690.000₫</span>

                                                                </div>
                                                                <div class="action-cart">
                                                                    <span class="more-action">
                                                                        <svg class="icon">
                                                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                xlink:href="#plusicon"></use>
                                                                        </svg>
                                                                    </span>
                                                                    <div class="group-action">
                                                                        <button data-text="Nhiều lựa chọn"
                                                                            class="btn btn-cart btn-left  btn btn-views left-to option-choice"
                                                                            title="Nhiều lựa chọn" type="button"
                                                                            onclick="window.location.href='/iphone-15-pro-max-chinh-hang-vn-a'">
                                                                            <svg class="icon">
                                                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                    xlink:href="#optionicon"></use>
                                                                            </svg>
                                                                        </button>
                                                                        <a class="quick-view btn-views"
                                                                            data-text="Xem nhanh" href="javascript:;"
                                                                            title="Xem nhanh"
                                                                            onclick="onQuickView(this);"
                                                                            data-handle="iphone-15-pro-max-chinh-hang-vn-a">
                                                                            <svg class="icon svg-qv">
                                                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                    xlink:href="#searchicon"></use>
                                                                            </svg>
                                                                        </a>

                                                                        <a href="javascript:;"
                                                                            data-url="/iphone-15-pro-max-chinh-hang-vn-a"
                                                                            data-text="So sánh" data-type="Điện thoại"
                                                                            data-img="//bizweb.dktcdn.net/thumb/thumb/100/507/051/products/iphone-14-pro-max-gia-re-hai-phong-cr-800x800-jpeg-b165657e-b629-4f4a-9f87-6b2c33f9c870-93c02860-e729-4700-a057-3576eb8cad0f.jpg?v=1704425629593"
                                                                            data-name="iPhone 15 Pro Max Đen Chính hãng (VN/A)"
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
                                                            <div class="quantity_sale" style="display:none">
                                                                <div class="titlecount">
                                                                    <b class="qtyflash"></b> sản phẩm đã bán
                                                                </div>

                                                                <div class="barprocess">
                                                                    <div class="countlength_sale"></div>
                                                                </div>
                                                            </div>

                                                            <div class="nowtext">
                                                                Giao thứ 6, ngày 15/11
                                                            </div>

                                                        </div>
                                                    </form>
                                                </div>
                                            </div> -->


                                            <div class="swiper-slide">
                                                <div class="product-item-flash" data-productID="34149032" data-qty="350"
                                                    data-pavailable="true">


                                                    <form action="/cart/add" method="post"
                                                        class="variants product-action item_product_main" data-cart-form
                                                        data-id="product-actions-34149032"
                                                        enctype="multipart/form-data">
                                                        <a class="image_thumb" href="?wh=sanpham&id=2"
                                                            title="Apple iPhone 14 Pro Max 128Gb (VN/A)">
                                                            <span class="label-sale ">
                                                                Giảm
                                                                5%

                                                            </span>
                                                            <img width="214" height="214" style="transform:scale(0.9)"
                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                                                data-src="//bizweb.dktcdn.net/thumb/medium/100/507/051/products/iphone-14-pro-m-main-979.png?v=1704424297997"
                                                                alt="Apple iPhone 14 Pro Max 128Gb (VN/A)"
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
                                                                    title="Apple iPhone 14 Pro Max 128Gb (VN/A)">Apple
                                                                    iPhone 14 Pro Max 128Gb (VN/A)</a></h3>
                                                            <div class="price-action">
                                                                <div class="price-box">
                                                                    <span class="price">27.000.000₫</span>
                                                                    <span class="compare-price">29.490.000₫</span>

                                                                </div>
                                                                <div class="action-cart">
                                                                    <span class="more-action">
                                                                        <svg class="icon">
                                                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                xlink:href="#plusicon"></use>
                                                                        </svg>
                                                                    </span>
                                                                    <div class="group-action">
                                                                        <input type="hidden" name="variantId"
                                                                            data-qty="1000000" value="106946027" />
                                                                        <button data-text="Thêm vào giỏ"
                                                                            class="btn-buy btn-left btn-views add_to_cart "
                                                                            title="Thêm vào giỏ">
                                                                            <svg class="icon svg-cart">
                                                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                    xlink:href="#addcarticon"></use>
                                                                            </svg>
                                                                        </button>
                                                                        <a class="quick-view btn-views"
                                                                            data-text="Xem nhanh" href="javascript:;"
                                                                            title="Xem nhanh"
                                                                            onclick="onQuickView(this);"
                                                                            data-handle="apple-iphone-14-pro-max-128gb-vn-a">
                                                                            <svg class="icon svg-qv">
                                                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                    xlink:href="#searchicon"></use>
                                                                            </svg>
                                                                        </a>

                                                                        <a href="javascript:;"
                                                                            data-url="/apple-iphone-14-pro-max-128gb-vn-a"
                                                                            data-text="So sánh" data-type="Điện thoại"
                                                                            data-img="//bizweb.dktcdn.net/thumb/thumb/100/507/051/products/iphone-14-pro-m-main-979.png?v=1704424297997"
                                                                            data-name="Apple iPhone 14 Pro Max 128Gb (VN/A)"
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


                                            
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="swiper-button- prev"><svg class="icon">
                                            <use xlink:href="#previcon"></use>
                                        </svg></div>
                                    <div class="swiper-button-next"><svg class="icon">
                                            <use xlink:href="#nexticon"></use>
                                        </svg></div> -->
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
            <div class="section-two-banner">
                <div class="container">
                    <div class="white">
                        <div class="row">
                            <figure class="d-block col-md-6 col-12">
                                <a class="text-center d-block" href="#" title="IPhone 14 mới về">
                                    <img class="lazyload" width="380" height="200" alt="IPhone 14 mới về"
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                        data-src="//bizweb.dktcdn.net/100/507/051/themes/936909/assets/imgbanner1.jpg?1731407153286" />
                                </a>
                            </figure>
                            <figure class="d-block col-md-6 col-12">
                                <a class="text-center d-block" href="#" title="Mua theo phân khúc giá">
                                    <img class="lazyload" width="380" height="200" alt="Mua theo phân khúc giá"
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                        data-src="//bizweb.dktcdn.net/100/507/051/themes/936909/assets/imgbanner2.jpg?1731407153286" />
                                </a>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
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
                                <li><a href="/laptop" title="Laptop">Laptop</a></li>
                                <li><a href="/bluetooth" title="Điện thoại, tablet">Bluetooth</a></li>
                                <li><a href="/phu-kien" title="Phụ kiện">Phụ kiện</a></li>
                                <li><a href="/am-thanh" title="Âm thanh">Âm thanh</a></li>
                                <li><a href="/collections/all" title="Sản phẩm">Sản phẩm</a></li>
                            </ul>
                        </div>
                        <div class="row">

                            <div class="col-lg-2-5 col-xl-2 col-md-3 col-6">


                                <form action="/cart/add" method="post" class="variants product-action item_product_main"
                                    data-cart-form data-id="product-actions-34149032" enctype="multipart/form-data">
                                    <a class="image_thumb" href="/apple-iphone-14-pro-max-128gb-vn-a"
                                        title="Apple iPhone 14 Pro Max 128Gb (VN/A)">
                                        <span class="label-sale ">
                                            Giảm
                                            8%

                                        </span>
                                        <img width="214" height="214" style="transform:scale(0.9)"
                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                            data-src="//bizweb.dktcdn.net/thumb/medium/100/507/051/products/iphone-14-pro-m-main-979.png?v=1704424297997"
                                            alt="Apple iPhone 14 Pro Max 128Gb (VN/A)"
                                            class="lazyload img-responsive center-block" />
                                        <img width="214" height="214" class="lazyload frame"
                                            data-src="//bizweb.dktcdn.net/thumb/medium/100/507/051/themes/936909/assets/frame1.png?1731407153286"
                                            alt="Apple iPhone 14 Pro Max 128Gb (VN/A)"
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
                                        <h3 class="product-name"><a href="/apple-iphone-14-pro-max-128gb-vn-a"
                                                title="Apple iPhone 14 Pro Max 128Gb (VN/A)">Apple iPhone 14 Pro Max
                                                128Gb (VN/A)</a></h3>
                                        <div class="price-action">
                                            <div class="price-box">
                                                <span class="price">27.000.000₫</span>
                                                <span class="compare-price">29.490.000₫</span>

                                            </div>
                                            <div class="action-cart">
                                                <span class="more-action">
                                                    <svg class="icon">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#plusicon"></use>
                                                    </svg>
                                                </span>
                                                <div class="group-action">
                                                    <input type="hidden" name="variantId" data-qty="1000000"
                                                        value="106946027" />
                                                    <button data-text="Thêm vào giỏ"
                                                        class="btn-buy btn-left btn-views add_to_cart "
                                                        title="Thêm vào giỏ">
                                                        <svg class="icon svg-cart">
                                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                xlink:href="#addcarticon"></use>
                                                        </svg>
                                                    </button>
                                                    <a class="quick-view btn-views" data-text="Xem nhanh"
                                                        href="javascript:;" title="Xem nhanh"
                                                        onclick="onQuickView(this);"
                                                        data-handle="apple-iphone-14-pro-max-128gb-vn-a">
                                                        <svg class="icon svg-qv">
                                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                xlink:href="#searchicon"></use>
                                                        </svg>
                                                    </a>

                                                    <a href="javascript:;"
                                                        data-url="/apple-iphone-14-pro-max-128gb-vn-a"
                                                        data-text="So sánh" data-type="Điện thoại"
                                                        data-img="//bizweb.dktcdn.net/thumb/thumb/100/507/051/products/iphone-14-pro-m-main-979.png?v=1704424297997"
                                                        data-name="Apple iPhone 14 Pro Max 128Gb (VN/A)" title="So sánh"
                                                        class="compare-link btn-views d-inline-block">
                                                        <svg class="icon compa">
                                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                xlink:href="#compareIcon"></use>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="nowship">
                                            Giao siêu tốc 2H
                                        </div>

                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-2-5 col-xl-2 col-md-3 col-6">


                                
                            </div>
                            <div class="col-12 text-center">
                                <a class="button-default" href="san-pham-noi-bat" title="Xem thêm">Xem thêm (18) sản
                                    phẩm</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section style="margin-bottom:20px;">
            <div class="section_product_image">
                <div class="container">
                    <div class="white">
                        <div class="row">
                            <div class="col-lg-3 col-12 col-image">
                                <figure>
                                    <a class="text-center d-block" href="#" title="Del sốc 1">
                                        <img class="lazyload" alt="Del sốc 1"
                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                            data-src="//bizweb.dktcdn.net/100/507/051/themes/936909/assets/img_col1.jpg?1731407153286" />
                                    </a>
                                </figure>
                                <figure>
                                    <a class="text-center d-block" href="#" title="Deal sốc 2">
                                        <img class="lazyload" alt="Deal sốc 2"
                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                            data-src="//bizweb.dktcdn.net/100/507/051/themes/936909/assets/img_col2.jpg?1731407153286" />
                                    </a>
                                </figure>
                            </div>
                            <div class="col-lg-9 col-12">
                                <div class="product-grid">
                                    <div class="block-title d-flex">
                                        <h2 class="title-module">
                                            <a href="san-pham-noi-bat" title="Xả kho giá tốt">Xả kho giá tốt</a>
                                        </h2>
                                        <a class="button-more" href="san-pham-noi-bat" title="Xem tất cả">Xem tất cả<svg
                                                class="icon">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#nexticon">
                                                </use>
                                            </svg></a>
                                    </div>
                                    <div class="row">

                                        <div class="col-lg-3 col-md-3 col-6">


                                            <form action="/cart/add" method="post"
                                                class="variants product-action item_product_main" data-cart-form
                                                data-id="product-actions-34149032" enctype="multipart/form-data">
                                                <a class="image_thumb" href="/apple-iphone-14-pro-max-128gb-vn-a"
                                                    title="Apple iPhone 14 Pro Max 128Gb (VN/A)">
                                                    <span class="label-sale ">
                                                        Giảm
                                                        8%

                                                    </span>
                                                    <img width="214" height="214" style="transform:scale(0.9)"
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                                        data-src="//bizweb.dktcdn.net/thumb/medium/100/507/051/products/iphone-14-pro-m-main-979.png?v=1704424297997"
                                                        alt="Apple iPhone 14 Pro Max 128Gb (VN/A)"
                                                        class="lazyload img-responsive center-block" />
                                                    <img width="214" height="214" class="lazyload frame"
                                                        data-src="//bizweb.dktcdn.net/thumb/medium/100/507/051/themes/936909/assets/frame1.png?1731407153286"
                                                        alt="Apple iPhone 14 Pro Max 128Gb (VN/A)"
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA=" />
                                                </a>
                                                <a href="javascript:;" data-url="/apple-iphone-14-pro-max-128gb-vn-a"
                                                    title="Thêm vào yêu thích" class="favorite-link d-inline-block">
                                                    <svg class="icon">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#wishlist"></use>
                                                    </svg>
                                                </a>
                                                <div class="info-product">
                                                    <h3 class="product-name"><a
                                                            href="/apple-iphone-14-pro-max-128gb-vn-a"
                                                            title="Apple iPhone 14 Pro Max 128Gb (VN/A)">Apple iPhone 14
                                                            Pro Max 128Gb (VN/A)</a></h3>
                                                    <div class="price-action">
                                                        <div class="price-box">
                                                            <span class="price">27.000.000₫</span>
                                                            <span class="compare-price">29.490.000₫</span>

                                                        </div>
                                                        <div class="action-cart">
                                                            <span class="more-action">
                                                                <svg class="icon">
                                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        xlink:href="#plusicon"></use>
                                                                </svg>
                                                            </span>
                                                            <div class="group-action">
                                                                <input type="hidden" name="variantId" data-qty="1000000"
                                                                    value="106946027" />
                                                                <button data-text="Thêm vào giỏ"
                                                                    class="btn-buy btn-left btn-views add_to_cart "
                                                                    title="Thêm vào giỏ">
                                                                    <svg class="icon svg-cart">
                                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            xlink:href="#addcarticon"></use>
                                                                    </svg>
                                                                </button>
                                                                <a class="quick-view btn-views" data-text="Xem nhanh"
                                                                    href="javascript:;" title="Xem nhanh"
                                                                    onclick="onQuickView(this);"
                                                                    data-handle="apple-iphone-14-pro-max-128gb-vn-a">
                                                                    <svg class="icon svg-qv">
                                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            xlink:href="#searchicon"></use>
                                                                    </svg>
                                                                </a>

                                                                <a href="javascript:;"
                                                                    data-url="/apple-iphone-14-pro-max-128gb-vn-a"
                                                                    data-text="So sánh" data-type="Điện thoại"
                                                                    data-img="//bizweb.dktcdn.net/thumb/thumb/100/507/051/products/iphone-14-pro-m-main-979.png?v=1704424297997"
                                                                    data-name="Apple iPhone 14 Pro Max 128Gb (VN/A)"
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

                                                    <div class="nowship">
                                                        Giao siêu tốc 2H
                                                    </div>

                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-6">


                                            
                                        </div>
                                        <div class="col-12 text-center">
                                            <a class="button-default" href="san-pham-noi-bat" title="Xem thêm">Xem thêm
                                                (18) sản phẩm</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section style="margin-bottom:20px;">
            <div class="section_phukien">
                <div class="container">
                    <div class="white">
                        <div class="block-title d-flex">
                            <h2 class="title-module">
                                <a href="san-pham-noi-bat" title="Phụ kiện hot">Phụ kiện hot</a>
                            </h2>
                            <a class="button-more" href="san-pham-noi-bat" title="Xem tất cả">Xem tất cả<svg
                                    class="icon">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#nexticon"></use>
                                </svg></a>
                        </div>
                        <div class="row">
                            <figure class="d-block col-md-6 col-12">
                                <a class="text-center d-block" href="#" title="Galaxy s23">
                                    <img class="lazyload" width="380" height="260" alt="Galaxy s23"
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                        data-src="//bizweb.dktcdn.net/100/507/051/themes/936909/assets/imgbanner1_pk.jpg?1731407153286" />
                                </a>
                            </figure>
                            <figure class="d-block col-md-6 col-12">
                                <a class="text-center d-block" href="#" title="realme">
                                    <img class="lazyload" width="380" height="260" alt="realme"
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                        data-src="//bizweb.dktcdn.net/100/507/051/themes/936909/assets/imgbanner2_pk.jpg?1731407153286" />
                                </a>
                            </figure>
                        </div>
                        <div class="swiper-button relative">
                            <div class="product-phukien swiper-container swiper-data" data-drag="true" data-xxl="6"
                                data-xl="6" data-lg="5" data-md="4" data-xs="2.5" data-x="2" data-space="10">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">


                                        <form action="/cart/add" method="post"
                                            class="variants product-action item_product_main" data-cart-form
                                            data-id="product-actions-34149032" enctype="multipart/form-data">
                                            <a class="image_thumb" href="/apple-iphone-14-pro-max-128gb-vn-a"
                                                title="Apple iPhone 14 Pro Max 128Gb (VN/A)">
                                                <span class="label-sale ">
                                                    Giảm
                                                    8%

                                                </span>
                                                <img width="214" height="214" style="transform:scale(0.9)"
                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                                    data-src="//bizweb.dktcdn.net/thumb/medium/100/507/051/products/iphone-14-pro-m-main-979.png?v=1704424297997"
                                                    alt="Apple iPhone 14 Pro Max 128Gb (VN/A)"
                                                    class="lazyload img-responsive center-block" />
                                                <img width="214" height="214" class="lazyload frame"
                                                    data-src="//bizweb.dktcdn.net/thumb/medium/100/507/051/themes/936909/assets/frame1.png?1731407153286"
                                                    alt="Apple iPhone 14 Pro Max 128Gb (VN/A)"
                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA=" />
                                            </a>
                                            <a href="javascript:;" data-url="/apple-iphone-14-pro-max-128gb-vn-a"
                                                title="Thêm vào yêu thích" class="favorite-link d-inline-block">
                                                <svg class="icon">
                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xlink:href="#wishlist"></use>
                                                </svg>
                                            </a>
                                            <div class="info-product">
                                                <h3 class="product-name"><a href="/apple-iphone-14-pro-max-128gb-vn-a"
                                                        title="Apple iPhone 14 Pro Max 128Gb (VN/A)">Apple iPhone 14 Pro
                                                        Max 128Gb (VN/A)</a></h3>
                                                <div class="price-action">
                                                    <div class="price-box">
                                                        <span class="price">27.000.000₫</span>
                                                        <span class="compare-price">29.490.000₫</span>

                                                    </div>
                                                    <div class="action-cart">
                                                        <span class="more-action">
                                                            <svg class="icon">
                                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    xlink:href="#plusicon"></use>
                                                            </svg>
                                                        </span>
                                                        <div class="group-action">
                                                            <input type="hidden" name="variantId" data-qty="1000000"
                                                                value="106946027" />
                                                            <button data-text="Thêm vào giỏ"
                                                                class="btn-buy btn-left btn-views add_to_cart "
                                                                title="Thêm vào giỏ">
                                                                <svg class="icon svg-cart">
                                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        xlink:href="#addcarticon"></use>
                                                                </svg>
                                                            </button>
                                                            <a class="quick-view btn-views" data-text="Xem nhanh"
                                                                href="javascript:;" title="Xem nhanh"
                                                                onclick="onQuickView(this);"
                                                                data-handle="apple-iphone-14-pro-max-128gb-vn-a">
                                                                <svg class="icon svg-qv">
                                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        xlink:href="#searchicon"></use>
                                                                </svg>
                                                            </a>

                                                            <a href="javascript:;"
                                                                data-url="/apple-iphone-14-pro-max-128gb-vn-a"
                                                                data-text="So sánh" data-type="Điện thoại"
                                                                data-img="//bizweb.dktcdn.net/thumb/thumb/100/507/051/products/iphone-14-pro-m-main-979.png?v=1704424297997"
                                                                data-name="Apple iPhone 14 Pro Max 128Gb (VN/A)"
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

                                                <div class="nowship">
                                                    Giao siêu tốc 2H
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
            <div class="section_product_endow">
                <div class="container">
                    <div class="white product-grid">
                        <div class="label-tag lazyload"
                            data-src="//bizweb.dktcdn.net/100/507/051/themes/936909/assets/endow_module_tag.png?1731407153286">
                        </div>
                        <div class="block-title">
                            <h2 class="title-module">
                                Ưu đãi bất ngờ
                            </h2>
                        </div>
                        <ul class="tabs">
                            <li style="background-color:#6fa8ff;" class="tab" data-url="san-pham-khuyen-mai">
                                <span>Laptop xách tay</span>
                            </li>
                            <li style="background-color:#6fcbff;" class="tab" data-url="san-pham-noi-bat">
                                <span>Bluetooth</span>
                            </li>
                            <li style="background-color:#ae6fff;" class="tab" data-url="san-pham-noi-bat">
                                <span>Loa di động</span>
                            </li>
                            <li style="background-color:#ff6fbd;" class="tab" data-url="san-pham-khuyen-mai">
                                <span>Tai nghe, sạc</span>
                            </li>
                            <li style="background-color:#ff0391;" class="tab" data-url="san-pham-noi-bat">
                                <span>Tablet nhỏ gọn</span>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane has-data active">
                                <div class="row">

                                    <div class="col-lg-2-5 col-xl-2 col-md-3 col-6">


                                        <form action="/cart/add" method="post"
                                            class="variants product-action item_product_main" data-cart-form
                                            data-id="product-actions-34149032" enctype="multipart/form-data">
                                            <a class="image_thumb" href="/apple-iphone-14-pro-max-128gb-vn-a"
                                                title="Apple iPhone 14 Pro Max 128Gb (VN/A)">
                                                <span class="label-sale ">
                                                    Giảm
                                                    8%

                                                </span>
                                                <img width="214" height="214" style="transform:scale(0.9)"
                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                                    data-src="//bizweb.dktcdn.net/thumb/medium/100/507/051/products/iphone-14-pro-m-main-979.png?v=1704424297997"
                                                    alt="Apple iPhone 14 Pro Max 128Gb (VN/A)"
                                                    class="lazyload img-responsive center-block" />
                                                <img width="214" height="214" class="lazyload frame"
                                                    data-src="//bizweb.dktcdn.net/thumb/medium/100/507/051/themes/936909/assets/frame1.png?1731407153286"
                                                    alt="Apple iPhone 14 Pro Max 128Gb (VN/A)"
                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA=" />
                                            </a>
                                            <a href="javascript:;" data-url="/apple-iphone-14-pro-max-128gb-vn-a"
                                                title="Thêm vào yêu thích" class="favorite-link d-inline-block">
                                                <svg class="icon">
                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xlink:href="#wishlist"></use>
                                                </svg>
                                            </a>
                                            <div class="info-product">
                                                <h3 class="product-name"><a href="/apple-iphone-14-pro-max-128gb-vn-a"
                                                        title="Apple iPhone 14 Pro Max 128Gb (VN/A)">Apple iPhone 14 Pro
                                                        Max 128Gb (VN/A)</a></h3>
                                                <div class="price-action">
                                                    <div class="price-box">
                                                        <span class="price">27.000.000₫</span>
                                                        <span class="compare-price">29.490.000₫</span>

                                                    </div>
                                                    <div class="action-cart">
                                                        <span class="more-action">
                                                            <svg class="icon">
                                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    xlink:href="#plusicon"></use>
                                                            </svg>
                                                        </span>
                                                        <div class="group-action">
                                                            <input type="hidden" name="variantId" data-qty="1000000"
                                                                value="106946027" />
                                                            <button data-text="Thêm vào giỏ"
                                                                class="btn-buy btn-left btn-views add_to_cart "
                                                                title="Thêm vào giỏ">
                                                                <svg class="icon svg-cart">
                                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        xlink:href="#addcarticon"></use>
                                                                </svg>
                                                            </button>
                                                            <a class="quick-view btn-views" data-text="Xem nhanh"
                                                                href="javascript:;" title="Xem nhanh"
                                                                onclick="onQuickView(this);"
                                                                data-handle="apple-iphone-14-pro-max-128gb-vn-a">
                                                                <svg class="icon svg-qv">
                                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        xlink:href="#searchicon"></use>
                                                                </svg>
                                                            </a>

                                                            <a href="javascript:;"
                                                                data-url="/apple-iphone-14-pro-max-128gb-vn-a"
                                                                data-text="So sánh" data-type="Điện thoại"
                                                                data-img="//bizweb.dktcdn.net/thumb/thumb/100/507/051/products/iphone-14-pro-m-main-979.png?v=1704424297997"
                                                                data-name="Apple iPhone 14 Pro Max 128Gb (VN/A)"
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

                                                <div class="nowship">
                                                    Giao siêu tốc 2H
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-lg-2-5 col-xl-2 col-md-3 col-6">


                                        
                                    </div>
                                    <div class="col-12 text-center">
                                        <a class="button-default" href="san-pham-noi-bat" title="Xem thêm">Xem thêm (18)
                                            sản phẩm</a>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane">

                            </div>
                            <div class="tab-pane">

                            </div>
                            <div class="tab-pane">

                            </div>
                            <div class="tab-pane">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    document.querySelector('.tab-pane:first-child').style.display = 'block';
                    document.querySelector('.tab:first-child').classList.add('active');
                    document.querySelector('.tab:first-child').classList.add('has-data');
                    document.querySelectorAll('.tab').forEach(function(tab) {
                        tab.addEventListener('click', function() {
                            let tabIndex = Array.from(document.querySelectorAll('.tab')).indexOf(
                                tab);
                            document.querySelectorAll('.tab').forEach(function(tab) {
                                tab.classList.remove('active');
                            });
                            tab.classList.add('active');

                            document.querySelectorAll('.tab-pane').forEach(function(tabPane) {
                                tabPane.style.display = 'none';
                            });

                            document.querySelector('.tab-pane:nth-child(' + (tabIndex + 1) + ')')
                                .style.display = 'block';
                            let url = tab.dataset.url;

                            if (tab.classList.contains('has-data')) {
                                BaseGlobal.resizeImageAuto('.image_thumb');
                                BaseGlobal.lazyloadImage(theme.settings.lazyload);
                                const favoriteLinks = document.querySelectorAll('.favorite-link');
                                favoriteLinks.forEach(link => {
                                    link.addEventListener('click', toggleFavorite);
                                });
                                const compareLinks = document.querySelectorAll('.compare-link');
                                compareLinks.forEach(com => {
                                    com.addEventListener('click', toggleCompare);
                                });
                                updateUI();
                                updateUIC();
                            } else {
                                fetch(url + '?view=datatab')
                                    .then(response => response.text())
                                    .then(data => {
                                        if (data.includes("<!DOCTYPE html>")) {
                                            document.querySelector('.tab-pane:nth-child(' + (
                                                    tabIndex + 1) + ')').innerHTML =
                                                '<div class="alert alert-warning alert-dismissible margin-top-15 section" role="alert">Danh mục đang cập nhật sản phẩm</div>';
                                        } else {
                                            document.querySelector('.tab-pane:nth-child(' + (
                                                tabIndex + 1) + ')').innerHTML = data;
                                            BaseGlobal.resizeImageAuto('.image_thumb');
                                            BaseGlobal.lazyloadImage(theme.settings.lazyload);
                                            document.querySelectorAll('.add_to_cart').forEach(
                                                function(element) {
                                                    element.addEventListener('click',
                                                        BaseGlobal.addToCartFly);
                                                });
                                            document.querySelectorAll('.btn-buy-now-grid')
                                                .forEach(function(element) {
                                                    element.addEventListener('click',
                                                        BaseGlobal.addToCartFast);
                                                });
                                        }
                                        tab.classList.add('has-data');
                                        const favoriteLinks = document.querySelectorAll(
                                            '.favorite-link');
                                        favoriteLinks.forEach(link => {
                                            link.addEventListener('click',
                                                toggleFavorite);
                                        });
                                        const compareLinks = document.querySelectorAll(
                                            '.compare-link');
                                        compareLinks.forEach(com => {
                                            com.addEventListener('click',
                                                toggleCompare);
                                        });
                                        updateUI();
                                        updateUIC();
                                    })
                                    .catch(error => {
                                        console.error("Lỗi khi tải dữ liệu từ URL: " + url);
                                    });

                                tab.classList.add('has-data');

                            }

                        });
                    });
                });
            </script>
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
                                                            <input type="hidden" name="variantId" data-qty="1000000"
                                                                value="107035936" />
                                                            <button data-text="Thêm vào giỏ"
                                                                class="btn-buy btn-left btn-views add_to_cart "
                                                                title="Thêm vào giỏ">
                                                                <svg class="icon svg-cart">
                                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        xlink:href="#addcarticon"></use>
                                                                </svg>
                                                            </button>
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
            <div class="section_featured_vendor">
                <div class="container">
                    <div class="wrap-component">
                        <div class="block-title">
                            <h2>
                                Thương hiệu nổi bật
                            </h2>
                            <a class="btn-link" href="/collections/all" title="Xem thêm">Xem thêm</a>
                        </div>
                        <div class="swiper-button">
                            <div class="swiper-container swiper-data" data-drag="true" data-xxl="2.7" data-height="true"
                                data-xl="2.5" data-lg="2" data-md="2" data-xs="1" data-x="1" data-space="20">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="item-vendor">
                                            <div class="title-vendor">
                                                <a class="d-block img" href="san-pham-noi-bat"
                                                    title="Nhập hội linh hoạt cùng samsung flip">
                                                    <img src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                                        data-src="//bizweb.dktcdn.net/100/507/051/themes/936909/assets/vendor_ft_1.png?1731407153286"
                                                        alt="Samsung" class="lazyload" />
                                                </a>
                                                <div class="right-vendor">
                                                    <h3>
                                                        <a href="san-pham-noi-bat"
                                                            title="Nhập hội linh hoạt cùng samsung flip">Nhập hội linh
                                                            hoạt cùng samsung flip</a>
                                                    </h3>
                                                    <p>
                                                        Thương hiệu: <span>Samsung</span>
                                                    </p>
                                                    <span>5.0<svg class="icon">
                                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                xlink:href="#staricon"></use>
                                                        </svg></span>
                                                </div>
                                            </div>
                                            <div class="list-item">


                                                <a class="block-img" href="/apple-iphone-14-pro-max-128gb-vn-a"
                                                    title="Apple iPhone 14 Pro Max 128Gb (VN/A)">
                                                    <img width="70" height="70" style="transform:scale(0.9)"
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                                        data-src="//bizweb.dktcdn.net/thumb/small/100/507/051/products/iphone-14-pro-m-main-979.png?v=1704424297997"
                                                        alt="Apple iPhone 14 Pro Max 128Gb (VN/A)"
                                                        class="lazyload img-responsive center-block" />
                                                    <img width="70" height="70" class="lazyload frame"
                                                        data-src="//bizweb.dktcdn.net/thumb/small/100/507/051/themes/936909/assets/frame1.png?1731407153286"
                                                        alt="Apple iPhone 14 Pro Max 128Gb (VN/A)"
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA=" />
                                                </a>


                                                <a class="block-img" href="/iphone-15-pro-chinh-hang-vn-a"
                                                    title="iPhone 15 Pro Chính hãng (VN/A)">
                                                    <img width="70" height="70"
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                                        data-src="//bizweb.dktcdn.net/thumb/small/100/507/051/products/00904369-638301752870211274-ip-15-pro-max-xanh-1-774ed4d9d6.jpg?v=1704424821593"
                                                        alt="iPhone 15 Pro Chính hãng (VN/A)"
                                                        class="lazyload img-responsive center-block" />
                                                </a>


                                                <a class="block-img" href="/apple-iphone-13-chinh-hang-vn-a"
                                                    title="Apple iPhone 13 Chính hãng (VN/A)">
                                                    <img width="70" height="70"
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                                        data-src="//bizweb.dktcdn.net/thumb/small/100/507/051/products/2.jpg?v=1704422644523"
                                                        alt="Apple iPhone 13 Chính hãng (VN/A)"
                                                        class="lazyload img-responsive center-block" />
                                                </a>


                                                <a class="block-img" href="/samsung-galaxy-s23-ultra-5g-256g"
                                                    title="Samsung Galaxy S23 Ultra 5G 256G">
                                                    <img width="70" height="70"
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                                        data-src="//bizweb.dktcdn.net/thumb/small/100/507/051/products/2-c1f46ca3-b4d0-4ef5-ab0a-c5e95a88eb44.jpg?v=1704427687790"
                                                        alt="Samsung Galaxy S23 Ultra 5G 256G"
                                                        class="lazyload img-responsive center-block" />
                                                </a>
                                                <span>+14</span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="swiper-button-prev"><svg class="icon">
                                    <use xlink:href="#previcon"></use>
                                </svg></div>
                            <div class="swiper-button-next"><svg class="icon">
                                    <use xlink:href="#nexticon"></use>
                                </svg></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section style="margin-bottom:20px;">
            <div class="section_category">
                <div class="container">
                    <div class="white">
                        <div class="block-title">
                            <h2>
                                Danh mục nổi bật
                            </h2>
                        </div>

                        <div class="list-cate">
                            <div class="cate-item">
                                <a class="image" href="/phu-kien-apple" title="Phụ kiện Apple">

                                    <img class="image_cate_thumb lazyload" width="50" height="50"
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                        data-src="//bizweb.dktcdn.net/thumb/thumb/100/507/051/collections/apple-pk.webp?v=1704420183923"
                                        alt="Phụ kiện Apple" />
                                </a>
                                <a class="name-collection" href="/phu-kien-apple" title="Phụ kiện Apple">Các loại tai nghe</a>
                            </div>
                            <div class="cate-item">
                                <a class="image" href="/op-lung-bao-da" title="Ốp lưng, bao da">

                                    <img class="image_cate_thumb lazyload" width="50" height="50"
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                        data-src="//bizweb.dktcdn.net/thumb/thumb/100/507/051/collections/1682591754883-icon-12.webp?v=1704420232550"
                                        alt="Ốp lưng, bao da" />
                                </a>
                                <a class="name-collection" href="/op-lung-bao-da" title="Ốp lưng, bao da">Ốp dán bảo vệ laptop
                                </a>
                            </div>
                            <div class="cate-item">
                                <a class="image" href="/dan-man-hinh-1" title="Dán màn hình">

                                    <img class="image_cate_thumb lazyload" width="50" height="50"
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                        data-src="//bizweb.dktcdn.net/thumb/thumb/100/507/051/collections/1682591949287-icon-11.webp?v=1704420263787"
                                        alt="Dán màn hình" />
                                </a>
                                <a class="name-collection" href="/dan-man-hinh-1" title="Dán màn hình">Dán màn hình</a>
                            </div>
                            <div class="cate-item">
                                <a class="image" href="/cu-sac-cap-sac" title="Củ sạc, cáp sạc">

                                    <img class="image_cate_thumb lazyload" width="50" height="50"
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                        data-src="//bizweb.dktcdn.net/thumb/thumb/100/507/051/collections/1682591859314-icon-14.webp?v=1704421216460"
                                        alt="Củ sạc, cáp sạc" />
                                </a>
                                <a class="name-collection" href="/cu-sac-cap-sac" title="Củ sạc, cáp sạc">Củ sạc, cáp
                                    sạc</a>
                            </div>
                            <div class="cate-item">
                                <a class="image" href="/pin-sac-du-phong" title="Pin sạc dự phòng">

                                    <img class="image_cate_thumb lazyload" width="50" height="50"
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                        data-src="//bizweb.dktcdn.net/thumb/thumb/100/507/051/collections/1682591971375-icon-13.webp?v=1704420319373"
                                        alt="Pin sạc dự phòng" />
                                </a>
                                <a class="name-collection" href="/pin-sac-du-phong" title="Pin sạc dự phòng">Pin sạc dự
                                    phòng</a>
                            </div>
                            <div class="cate-item">
                                <a class="image" href="/phu-kien-macbook" title="Phụ kiện macbook">

                                    <img class="image_cate_thumb lazyload" width="50" height="50"
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                        data-src="//bizweb.dktcdn.net/thumb/thumb/100/507/051/collections/pk-mac.webp?v=1704420367250"
                                        alt="Phụ kiện macbook" />
                                </a>
                                <a class="name-collection" href="/phu-kien-macbook" title="Phụ kiện macbook">Phụ kiện
                                    macbook</a>
                            </div>
                            <div class="cate-item">
                                <a class="image" href="/loa-nghe-nhac" title="Loa nghe nhạc">

                                    <img class="image_cate_thumb lazyload" width="50" height="50"
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                        data-src="//bizweb.dktcdn.net/thumb/thumb/100/507/051/collections/1682591798318-icon-18.webp?v=1704420387530"
                                        alt="Loa nghe nhạc" />
                                </a>
                                <a class="name-collection" href="/loa-nghe-nhac" title="Loa nghe nhạc">Loa nghe nhạc</a>
                            </div>
                            <div class="cate-item">
                                <a class="image" href="/tai-nghe" title="Tai nghe">

                                    <img class="image_cate_thumb lazyload" width="50" height="50"
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                        data-src="//bizweb.dktcdn.net/thumb/thumb/100/507/051/collections/1682591841097-icon-16.webp?v=1704420420800"
                                        alt="Tai nghe" />
                                </a>
                                <a class="name-collection" href="/tai-nghe" title="Tai nghe">Tai nghe</a>
                            </div>
                            <div class="cate-item">
                                <a class="image" href="/phu-kien-tien-ich" title="Phụ kiện tiện ích">

                                    <img class="image_cate_thumb lazyload" width="50" height="50"
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                        data-src="//bizweb.dktcdn.net/thumb/thumb/100/507/051/collections/pk-tien-ich.webp?v=1704421169767"
                                        alt="Phụ kiện tiện ích" />
                                </a>
                                <a class="name-collection" href="/phu-kien-tien-ich" title="Phụ kiện tiện ích">Phụ kiện
                                    tiện ích</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section style="margin-bottom:20px;">
            <div class="section_thucudoimoi">
                <div class="container">
                    <div class="bg-module">
                        <div class="block-title">
                            <h2>
                                Thu cũ đổi mới
                                <span>
                                    Thẩm định đánh giá dế yêu từ chuyên gia
                                </span>
                            </h2>
                            <a class="btn-link" href="/lien-he" title="Xem chi tiết">Xem chi tiết</a>
                        </div>
                        <div class="block-slide">
                            <div class="swiper-button">
                                <div class="swiper-data swiper-container" data-drag="true" data-xxl="3" data-xl="3"
                                    data-lg="3" data-pagination="true" data-md="2" data-xs="2" data-x="1"
                                    data-space="20">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="slide-step">
                                                <div class="img">
                                                    <img width="64" height="64"
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                                        data-src="//bizweb.dktcdn.net/100/507/051/themes/936909/assets/thucu_img_1.png?1731407153286"
                                                        alt="Bước 1" class="lazyload" />
                                                </div>
                                                <div class="child" data-index="1">
                                                    <h5>
                                                        Bước 1
                                                    </h5>
                                                    <p>
                                                        Kiểm tra đánh giá gọi điện trực tiếp
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="slide-step">
                                                <div class="img">
                                                    <img width="64" height="64"
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                                        data-src="//bizweb.dktcdn.net/100/507/051/themes/936909/assets/thucu_img_2.png?1731407153286"
                                                        alt="Bước 2" class="lazyload" />
                                                </div>
                                                <div class="child" data-index="2">
                                                    <h5>
                                                        Bước 2
                                                    </h5>
                                                    <p>
                                                        Mang máy đến cửa hàng hoặc nhận tại nhà
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="slide-step">
                                                <div class="img">
                                                    <img width="64" height="64"
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                                        data-src="//bizweb.dktcdn.net/100/507/051/themes/936909/assets/thucu_img_3.png?1731407153286"
                                                        alt="Bước 3" class="lazyload" />
                                                </div>
                                                <div class="child" data-index="3">
                                                    <h5>
                                                        Bước 3
                                                    </h5>
                                                    <p>
                                                        Nhận tiền hoặc nâng cấp máy mới
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
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
            <div class="section_blog section_blogs">
                <div class="container">
                    <div class="white">
                        <div class="block-title d-flex">
                            <h2 class="title-module">
                                <a href="tin-tuc" title="Tin công nghệ">Tin công nghệ</a>
                            </h2>
                            <a class="button-more" href="tin-tuc" title="Xem tất cả">Xem tất cả<svg class="icon">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#nexticon"></use>
                                </svg></a>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-7 col-md-7 first-blog">

                                <article>
                                    <a class="thumb" href="/phu-kien-nay-bien-iphone-cua-ban-thanh-blackberry"
                                        title="Phụ kiện n&#224;y biến iPhone của bạn th&#224;nh BlackBerry">
                                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                            data-src="https://bizweb.dktcdn.net/100/507/051/articles/b1.jpg?v=1704869258123"
                                            alt="Phụ kiện n&#224;y biến iPhone của bạn th&#224;nh BlackBerry"
                                            class="lazyload img-responsive" />
                                    </a>
                                    <div class="content">
                                        <h3><a href="/phu-kien-nay-bien-iphone-cua-ban-thanh-blackberry"
                                                title="Phụ kiện n&#224;y biến iPhone của bạn th&#224;nh BlackBerry"
                                                class="a-title">Phụ kiện n&#224;y biến iPhone của bạn th&#224;nh
                                                BlackBerry</a></h3>
                                        <span>Thứ Tư,
                                            10/01/2024
                                        </span>
                                    </div>
                                </article>

                            </div>
                            <div class="col-lg-5 col-md-5 col-12 list-blog">


                                <article>
                                    <a class="thumb" href="/oneplus-buds-3-lo-gia-ban-hap-dan-truoc-khi-ra-mat"
                                        title="OnePlus Buds 3 lộ gi&#225; b&#225;n hấp dẫn trước khi ra mắt">
                                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                            data-src="https://bizweb.dktcdn.net/100/507/051/articles/oneplus-buds-pro-2-1.jpg?v=1704468397957"
                                            alt="OnePlus Buds 3 lộ gi&#225; b&#225;n hấp dẫn trước khi ra mắt"
                                            class="lazyload img-responsive" />
                                    </a>
                                    <div class="content">
                                        <h3><a href="/oneplus-buds-3-lo-gia-ban-hap-dan-truoc-khi-ra-mat"
                                                title="OnePlus Buds 3 lộ gi&#225; b&#225;n hấp dẫn trước khi ra mắt"
                                                class="a-title">OnePlus Buds 3 lộ gi&#225; b&#225;n hấp dẫn trước khi ra
                                                mắt</a></h3>
                                        <span>Thứ Sáu,
                                            05/01/2024
                                        </span>
                                    </div>
                                </article>



                                <article>
                                    <a class="thumb"
                                        href="/macos-sonoma-14-3-public-beta-2-duoc-phat-hanh-tiep-tuc-sua-loi"
                                        title="macOS Sonoma 14.3 public beta 2 được ph&#225;t h&#224;nh, tiếp tục sửa lỗi">
                                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                            data-src="https://bizweb.dktcdn.net/100/507/051/articles/fdg.jpg?v=1704468252173"
                                            alt="macOS Sonoma 14.3 public beta 2 được ph&#225;t h&#224;nh, tiếp tục sửa lỗi"
                                            class="lazyload img-responsive" />
                                    </a>
                                    <div class="content">
                                        <h3><a href="/macos-sonoma-14-3-public-beta-2-duoc-phat-hanh-tiep-tuc-sua-loi"
                                                title="macOS Sonoma 14.3 public beta 2 được ph&#225;t h&#224;nh, tiếp tục sửa lỗi"
                                                class="a-title">macOS Sonoma 14.3 public beta 2 được ph&#225;t
                                                h&#224;nh, tiếp tục sửa lỗi</a></h3>
                                        <span>Thứ Sáu,
                                            05/01/2024
                                        </span>
                                    </div>
                                </article>



                                <article>
                                    <a class="thumb" href="/can-canh-honor-90-gt-thiet-ke-tinh-te-mat-lung-gia-da"
                                        title="Cận cảnh HONOR 90 GT - Thiết kế tinh tế, mặt lưng giả da">
                                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                            data-src="https://bizweb.dktcdn.net/100/507/051/articles/22.jpg?v=1704468100083"
                                            alt="Cận cảnh HONOR 90 GT - Thiết kế tinh tế, mặt lưng giả da"
                                            class="lazyload img-responsive" />
                                    </a>
                                    <div class="content">
                                        <h3><a href="/can-canh-honor-90-gt-thiet-ke-tinh-te-mat-lung-gia-da"
                                                title="Cận cảnh HONOR 90 GT - Thiết kế tinh tế, mặt lưng giả da"
                                                class="a-title">Cận cảnh HONOR 90 GT - Thiết kế tinh tế, mặt lưng giả
                                                da</a></h3>
                                        <span>Thứ Sáu,
                                            05/01/2024
                                        </span>
                                    </div>
                                </article>



                                <article>
                                    <a class="thumb"
                                        href="/vivo-ra-mat-tai-nghe-iqoo-tws-1e-voi-pin-44-gio-ho-tro-anc-gia-610-ngan-dong"
                                        title="Vivo ra mắt tai nghe iQOO TWS 1e với pin 44 giờ, hỗ trợ ANC, gi&#225; 610 ng&#224;n đồng">
                                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                            data-src="https://bizweb.dktcdn.net/100/507/051/articles/tai-nghe-tws-dang-mua-nhat-thang-6-1-800x600.jpg?v=1704467733007"
                                            alt="Vivo ra mắt tai nghe iQOO TWS 1e với pin 44 giờ, hỗ trợ ANC, gi&#225; 610 ng&#224;n đồng"
                                            class="lazyload img-responsive" />
                                    </a>
                                    <div class="content">
                                        <h3><a href="/vivo-ra-mat-tai-nghe-iqoo-tws-1e-voi-pin-44-gio-ho-tro-anc-gia-610-ngan-dong"
                                                title="Vivo ra mắt tai nghe iQOO TWS 1e với pin 44 giờ, hỗ trợ ANC, gi&#225; 610 ng&#224;n đồng"
                                                class="a-title">Vivo ra mắt tai nghe iQOO TWS 1e với pin 44 giờ, hỗ trợ
                                                ANC, gi&#225; 610 ng&#224;n đồng</a></h3>
                                        <span>Thứ Sáu,
                                            05/01/2024
                                        </span>
                                    </div>
                                </article>



                                <article>
                                    <a class="thumb"
                                        href="/lenovo-xiaoxin-air-14-2023-ryzen-edition-ra-mat-voi-cpu-amd-r7-7840u"
                                        title="Lenovo Xiaoxin Air 14 2023 Ryzen Edition ra mắt với CPU AMD R7 7840U">
                                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                                            data-src="https://bizweb.dktcdn.net/100/507/051/articles/techzones-lenovo-ra-mat-laptop-gaming-geekpro-g5000-moi2.jpg?v=1704467574653"
                                            alt="Lenovo Xiaoxin Air 14 2023 Ryzen Edition ra mắt với CPU AMD R7 7840U"
                                            class="lazyload img-responsive" />
                                    </a>
                                    <div class="content">
                                        <h3><a href="/lenovo-xiaoxin-air-14-2023-ryzen-edition-ra-mat-voi-cpu-amd-r7-7840u"
                                                title="Lenovo Xiaoxin Air 14 2023 Ryzen Edition ra mắt với CPU AMD R7 7840U"
                                                class="a-title">Lenovo Xiaoxin Air 14 2023 Ryzen Edition ra mắt với CPU
                                                AMD R7 7840U</a></h3>
                                        <span>Thứ Sáu,
                                            05/01/2024
                                        </span>
                                    </div>
                                </article>


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