    <!--slider area start-->
    <section class="slider_section">

        <div class="slider_area slider_one_area owl-carousel">
            <?php
            foreach ($all_baner as  $value) {
                extract($value);

            ?>

                <div class="single_slider d-flex align-items-center" data-bgimg="../../thu_vien/asset/img/slider/<?= $hinh_anh ?>">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-7">
                                <div class="slider_content content_left">
                                    <h1><?= $ten ?></h1>
                                    <h2><?= $mo_ta ?></h2>
                                    <a class="button" href="<?= $link ?>">XEM THÊM</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php

            }

            ?>
        </div>
    </section>
    <!--slider area end-->

    <!--banner area start-->

    <!--banner area end-->

    <!--product area start-->
    <div class="product_area mb-62" style="padding-top: 100px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product-header">
                        <div class="section_title">
                            <h2>Sản Phẩm Mới Nhất</h2>
                            <p>Browse the collection of our best selling and trending products</p>
                        </div>

                    </div>
                </div>
            </div>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="men" role="tabpanel">
                    <div class="row">
                        <div class="product_carousel product_column4 owl-carousel">
                            <!-- one sp -->
                            <?php
                            foreach ($all_sp as $value) {
                                extract($value);
                            ?>
                                <div class="col-lg-3">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="index.php?act=chitietsanpham"><img src="../../thu_vien/asset/img/product/<?= $anh_sp ?>" alt=""></a>

                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="index.php?act=giohang" title="Add to cart"><i class="zmdi zmdi-shopping-cart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_content-header">
                                                    <h4 class="product_name"><a href="index.php?act=chitietsanpham"><?= $ten_sp ?></a></h4>
                                                    <div class="wishlist-btn">
                                                        <a href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product_price_rating">
                                                    <div class="price_box">
                                                        <span class="current_price">$<?= $gia_sp ?></span>
                                                    </div>
                                                    <div class="product_rating">
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>

                            <?php
                            }
                            ?>

                            <!-- end one sp  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--product area end-->

    <!--banner Màu cam-->
    <div class="banner_fullwidth mb-70" data-bgimg="../../thu_vien/asset/img/bg/banner5.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="banner-text">
                        <h3>Exceptional Designer</h3>
                        <h2>handbags and wallets</h2>
                        <p>Narita fashion high quality handbag shop the numer 1 in cambodia that offers the highest quality for the best prices</p>
                        <a href="shop.html">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--banner fullwidth end-->

    <!--product area start-->
    <div class="product_area mb-62">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2>SẢN PHẨM NỔI BẬT</h2>
                        <p>We carry designer fashion that retail for much more at other stores</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="product_carousel product_column4 owl-carousel">
                    <?php
                    foreach ($sp_noibat as $sp_nb) {
                        extract($sp_nb);

                    ?>

                        <div class="col-lg-3">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="index.php?act=chitietsanpham"><img src="../../thu_vien/asset/img/product/<?= $anh_sp ?>" alt=""></a>

                                        <div class="action_links">
                                            <ul>
                                                <li class="add_to_cart"><a href="index.php?act=giohang" title="Add to cart"><i class="zmdi zmdi-shopping-cart"></i></a></li>

                                            </ul>
                                        </div>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="product_content-header">
                                            <h4 class="product_name"><a href="index.php?act=chitietsanpham"><? $ten_sp ?></a></h4>
                                            <div class="wishlist-btn">
                                                <a href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            </div>
                                        </div>
                                        <div class="product_price_rating">
                                            <div class="price_box">
                                                <span class="current_price">$<?= $gia_sp ?></span>
                                            </div>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>

                    <?php
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
    <!--product area end-->

    <!--bannr maug xám-->
    <div class="home_instagram_area mb-70">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="instagram_text">
                        <h2># Presiden on instagram</h2>
                        <p>Hãy cho chúng tôi biết cách bạn tạo kiểu cho các tác phẩm Hiếm của mình trên Instagram với hashtag #Presiden.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--instagram area end-->

    <!--tin tức mới-->
    <section class="blog_section mb-62">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2>TIN TƯC MỚI</h2>
                        <p>Bạn có muốn trình bày bài viết một cách tốt nhất để làm nổi bật những khoảnh khắc thú vị của tin tức của mình.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="blog_carousel blog_column3 owl-carousel">
                    <!-- one news -->
                    <?php
                    foreach ($all_news as $value) {
                        extract($value);
                    ?>

                        <div class="col-lg-3">
                            <article class="single_blog">
                                <figure>
                                    <div class="blog_thumb">
                                        <a href="index.php?act=chitiettintuc"><img src="../../upload/<?=$anh_tin_tuc?>" alt=""></a>
                                    </div>
                                    <figcaption class="blog_content">
                                        <h4 class="post_title"><a href="index.php?act=chitiettintuc"><?=$tieu_de?></a></h4>
                                        <div class="articles_date">
                                            <span><?=$ngay_dang?></span>
                                          
                                        </div>
                                        <p class="post_desc"><?=$noi_dung?></p>
                                        <footer class="btn_more">
                                            <a href="index.php?act=chitiettintuc"> Xem Thêm</a>
                                        </footer>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                    <?php
                    }

                    ?>
                    <!--  -->
                    <!-- end one new -->
                </div>
            </div>
        </div>
    </section>
    <!--blog area end-->

    <!--brand area start-->
    <div class="brand_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="brand_container owl-carousel">
                        <div class="single_brand">
                            <a href="#"><img src="../../thu_vien/asset/img/brand/brand1.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="../../thu_vien/asset/img/brand/brand2.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="../../thu_vien/asset/img/brand/brand3.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="../../thu_vien/asset/img/brand/brand4.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="../../thu_vien/asset/img/brand/brand5.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="../../thu_vien/asset/img/brand/brand2.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--brand area end-->