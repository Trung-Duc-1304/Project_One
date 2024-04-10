<?php
if (is_array($listsp)) {
    extract($listsp);
}
?>
<!-- Start hero -->
<section class="container-fluid">
    <div class="cs_slider position-relative">
        <div class="cs_slider_container" data-autoplay="1" data-loop="1" data-speed="700" data-center="0" data-slides-per-view="1" data-fade-slide="1">
            <div class="cs_slider_wrapper">
                <div class="slick_slide_in">
                    <div class="cs_hero cs_style_2 position-relative">
                        <div class="cs_hero_left">
                            <div class="cs_hero_text">
                                <h4 class="cs_hero_title_mini cs_fs_28">Lên tới 50</h4>
                                <h1 class="cs_hero_title cs_fs_67 cs_bold">Bộ sưu áo thun phong cách trong mùa hè </h1>
                                <a href="?act=spdanhmuc&id=1" class="cs_btn cs_style_1 cs_fs_16 cs_medium">Bộ sưu tập</a>
                            </div>
                        </div>
                        <div class="cs_hero_right">
                            <div class="cs_hero_thumb"><img src="assets/images/aothun1.png" alt="Thumb"></div>
                            <div class="cs_animated_text position-absolute">
                                <img src="assets/client/img/animated_text.png" alt="Text Image">
                                <span class="cs_text_light cs_accent_bg"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slick_slide_in">
                    <div class="cs_hero cs_style_2 position-relative">
                        <div class="cs_hero_left">
                            <div class="cs_hero_text">
                                <h4 class="cs_hero_title_mini cs_fs_28">Giảm giá tới 20%</h4>
                                <h1 class="cs_hero_title cs_fs_67 cs_bold">Bộ sưu tập Sweater trong mùa đông không lạnh</h1>
                                <a href="?act=spdanhmuc&id=4" class="cs_btn cs_style_1 cs_fs_16 cs_medium">Bộ sưu tập</a>
                            </div>
                        </div>
                        <div class="cs_hero_right">
                            <div class="cs_hero_thumb"><img src="assets/images/aos.png" alt="Thumb"></div>
                            <div class="cs_animated_text position-absolute">
                                <img src="assets/client/img/animated_text.png" alt="Text Image">
                                <span class="cs_text_light cs_accent_bg"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slick_slide_in">
                    <div class="cs_hero cs_style_2 position-relative">
                        <div class="cs_hero_left">
                            <div class="cs_hero_text">
                                <h4 class="cs_hero_title_mini cs_fs_28">Giảm giá tới 10%</h4>
                                <h1 class="cs_hero_title cs_fs_67 cs_bold">Bộ sưu tập áo Hoodie mùa đông </h1>
                                <a href="?act=spdanhmuc&id=4" class="cs_btn cs_style_1 cs_fs_16 cs_medium">Bộ sưu tập</a>
                            </div>
                        </div>
                        <div class="cs_hero_right">
                            <div class="cs_hero_thumb"><img src="assets/images/aohoodie.png" alt="Thumb"></div>
                            <div class="cs_animated_text position-absolute">
                                <img src="assets/client/img/animated_text.png" alt="Text Image">
                                <span class="cs_text_light cs_accent_bg"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="cs_pagingInfo cs_style_1">iifn</div> -->
        </div>
        <div class="cs_slides_numbers" style="display: block;">
            <span class="active">01</span><span class="cs_slide_seperator"> / </span><span class="cs_total_slide"></span>
        </div>
    </div>
</section>
<!-- End hero -->
<!-- Start best selling Products -->
<section class="cs_slider position-relative">
    <div class="cs_height_120 cs_height_lg_80"></div>
    <div class="container">
        <div class="cs_section_heading cs_style_1">
            <div class="cs_section_heading_in">
                <h2 class="cs_section_title cs_fs_50 cs_bold mb-0">Sản phẩm bán chạy nhất</h2>
            </div>
            <div class="cs_slider_arrows cs_style_2">
                <div class="cs_left_arrow cs_slider_arrow cs_accent_color">
                    <i class="fa-solid fa-chevron-left"></i>
                </div>
                <div class="cs_right_arrow cs_slider_arrow cs_accent_color">
                    <i class="fa-solid fa-chevron-right"></i>
                </div>
            </div>
        </div>
        <div class="cs_height_63 cs_height_lg_35"></div>
    </div>
    <div class="container-fluid">
        <div class="cs_slider_container" data-autoplay="0" data-loop="1" data-speed="600" data-center="0" data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="2" data-md-slides="2" data-lg-slides="3" data-add-slides="4">
            <div class="cs_slider_wrapper">
                <?php foreach ($listsp as $sp) :
                    extract($sp); ?>
                    <div class="slick_slide_in">
                        <div class="cs_product cs_style_1 cs_bordered">
                            <div class="cs_product_thumb position-relative">
                                <a href="?act=sanpham_ct&id=<?= $id ?>">
                                    <img src="./uploads/<?= $image ?>" style=" object-fit: cover; height:450px;" class="w-100" alt="">
                                </a>
                                <div class="cs_cart_badge position-absolute">
                                    <a href="wishlist.html" class="cs_cart_icon cs_accent_bg cs_white_color">
                                        <i class="fa-regular fa-heart"></i>
                                    </a>
                                    <a href="?act=sanpham_ct&id=<?= $id ?>" class="cs_cart_icon cs_accent_bg cs_white_color">
                                        <i class="fa-regular fa-eye"></i>
                                    </a>
                                </div> <!-- <button class='add-to-cart cs_cart_btn cs_accent_bg cs_fs_16 cs_white_color cs_medium position-absolute btn' data-product-id="<?= $id ?>"> Thêm vào giỏ hàng </button>
                                -->
                                
                            </div>
                            <div class="cs_product_info text-center">
                                <h5 class="cs_product_title cs_fs_21 cs_medium">
                                    <a href="index.php?act=sanpham_ct&id=<?= $id ?>"><?= $tensp ?></a>
                                </h5>
                                <div class="mt-5">
                                    
                                    <span class="cs_product_price cs_fs_18 cs_accent_color mb-0 cs_medium  mb-0 cs_medium old-price"><?= number_format($giasp, 0, ',', '.')?>₫</span>
                                        
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</section>
<!-- End best selling Products -->
<!-- Start category -->

<!-- End category -->
<!-- Start Featured Items -->
<section>
    <div class="cs_height_120 cs_height_lg_70"></div>
    <div class="container">
        <div class="text-center">
            <h2 class="cs_section_title cs_fs_50 cs_bold mb-0">Các mặt hàng mới trong cửa hàng</h2>
        </div>
        <div class="cs_height_63 cs_height_lg_35"></div>
        <div class="cs_isotope_filter cs_style_1">
            <ul class="cs_mp0">
                <?php foreach ($listdm as $dm) :
                    extract($dm);
                ?>
                    <li><a href="#" data-filter=".<?= $id ?>_sm" class="cs_fs_16 cs_medium"><?= $tendm ?></a></li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
    <div class="container-fluid">
        <div class="cs_isotope cs_style_1 cs_isotope_col_4 cs_has_gutter_24">
            <div class="cs_grid_sizer"></div>
            <?php foreach ($load_sp_khoac as $sp) : ?>
                <?php extract($sp);
                $delay = 200; ?>
                <div class="cs_isotope_item 14_sm shoes">
                    <div class="cs_product cs_style_1 cs_bordered">
                        <div class="cs_product_thumb position-relative">
                            <a href="?act=sanpham_ct&id=<?= $id ?>">
                                <img src="./uploads/<?= $image ?>" style=" object-fit: cover; height:450px;" class="w-100" alt="">
                            </a>
                            <div class="cs_discount_badge cs_white_bg cs_fs_14 cs_primary_color position-absolute">-25%</div>
                            <div class="cs_cart_badge position-absolute">
                                <a href="wishlist.html" class="cs_cart_icon cs_accent_bg cs_white_color">
                                    <i class="fa-regular fa-heart"></i>
                                </a>
                                <a href="?act=sanpham_ct&id=<?= $id ?>" class="cs_cart_icon cs_accent_bg cs_white_color">
                                    <i class="fa-regular fa-eye"></i>
                                </a>
                            </div>
                            
                            <!--  -->
                        </div>
                        <div class="cs_product_info text-center">
                            <h4><a href="?act=sanpham_ct&id=<?= $id ?>"><?= $tensp ?></a></h4>
                            <div class="mt-5">
                                
                                <span class="cs_product_price cs_fs_18 cs_accent_color mb-0 cs_medium  mb-0 cs_medium old-price"><?= number_format($giasp, 0, ',', '.')?>₫</span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $delay += 200; ?>
            <?php endforeach ?>

            <?php foreach ($list_sp_aothun as $sp) : ?>
                <?php extract($sp);
                $delay = 200; ?>
                <div class="cs_isotope_item 1_sm shoes">
                    <div class="cs_product cs_style_1 cs_bordered">
                        <div class="cs_product_thumb position-relative">
                            <a href="?act=sanpham_ct&id=<?= $id ?>">
                                <img src="./uploads/<?= $image ?>" style=" object-fit: cover; height:450px;" class="w-100" alt="">
                            </a>
                            <div class="cs_discount_badge cs_white_bg cs_fs_14 cs_primary_color position-absolute">-25%</div>
                            <div class="cs_cart_badge position-absolute">
                                <a href="wishlist.html" class="cs_cart_icon cs_accent_bg cs_white_color">
                                    <i class="fa-regular fa-heart"></i>
                                </a>
                                <a href="?act=sanpham_ct&id=<?= $id ?>" class="cs_cart_icon cs_accent_bg cs_white_color">
                                    <i class="fa-regular fa-eye"></i>
                                </a>
                            </div>
                            
                            <!--  -->
                        </div>
                        <div class="cs_product_info text-center">
                            <h4><a href="?act=sanpham_ct&id=<?= $id ?>"><?= $tensp ?></a></h4>
                            <div class="mt-5">
                                
                                <span class="cs_product_price cs_fs_18 cs_accent_color mb-0 cs_medium  mb-0 cs_medium old-price"><?= number_format($giasp, 0, ',', '.')?>₫</span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $delay += 200; ?>
            <?php endforeach ?>

            <?php foreach ($list_sp_aoho as $sp) : ?>
                <?php extract($sp);
                $delay = 200; ?>
                <div class="cs_isotope_item 2_sm shoes">
                    <div class="cs_product cs_style_1 cs_bordered">
                        <div class="cs_product_thumb position-relative">
                            <a href="?act=sanpham_ct&id=<?= $id ?>">
                                <img src="./uploads/<?= $image ?>" style=" object-fit: cover; height:450px;" class="w-100" alt="">
                            </a>
                            <div class="cs_discount_badge cs_white_bg cs_fs_14 cs_primary_color position-absolute">-25%</div>
                            <div class="cs_cart_badge position-absolute">
                                <a href="wishlist.html" class="cs_cart_icon cs_accent_bg cs_white_color">
                                    <i class="fa-regular fa-heart"></i>
                                </a>
                                <a href="?act=sanpham_ct&id=<?= $id ?>" class="cs_cart_icon cs_accent_bg cs_white_color">
                                    <i class="fa-regular fa-eye"></i>
                                </a>
                            </div>
                            
                            <!--  -->
                        </div>
                        <div class="cs_product_info text-center">
                            <h4><a href="?act=sanpham_ct&id=<?= $id ?>"><?= $tensp ?></a></h4>
                            <div class="mt-5">
                                
                                <span class="cs_product_price cs_fs_18 cs_accent_color mb-0 cs_medium  mb-0 cs_medium old-price"><?= number_format($giasp, 0, ',', '.')?>₫</span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $delay += 200; ?>
            <?php endforeach ?>

            <?php foreach ($list_sp_aosw as $sp) : ?>
                <?php extract($sp);
                $delay = 200; ?>
                <div class="cs_isotope_item 4_sm shoes">
                    <div class="cs_product cs_style_1 cs_bordered">
                        <div class="cs_product_thumb position-relative">
                            <a href="?act=sanpham_ct&id=<?= $id ?>">
                                <img src="./uploads/<?= $image ?>" style=" object-fit: cover; height:450px;" class="w-100" alt="">
                            </a>
                            <div class="cs_discount_badge cs_white_bg cs_fs_14 cs_primary_color position-absolute">-25%</div>
                            <div class="cs_cart_badge position-absolute">
                                <a href="wishlist.html" class="cs_cart_icon cs_accent_bg cs_white_color">
                                    <i class="fa-regular fa-heart"></i>
                                </a>
                                <a href="?act=sanpham_ct&id=<?= $id ?>" class="cs_cart_icon cs_accent_bg cs_white_color">
                                    <i class="fa-regular fa-eye"></i>
                                </a>
                            </div>
                            
                        </div>
                        <div class="cs_product_info text-center">
                            <h4><a href="?act=sanpham_ct&id=<?= $id ?>"><?= $tensp ?></a></h4>
                            <div class="mt-5">
                                
                                <span class="cs_product_price cs_fs_18 cs_accent_color mb-0 cs_medium  mb-0 cs_medium old-price"><?= number_format($giasp, 0, ',', '.')?>₫</span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $delay += 200; ?>
            <?php endforeach ?>

        </div>
    </div>
</section>
<!-- End Featured Items -->
<!-- Start collection 2 -->
<section>
<div class="cs_height_140 cs_height_lg_80"></div>
    <div class="container">
        <div class="cs_card cs_style_3">
            <div class="row">
                <div class="col-lg-6">
                    <div class="cs_card_thumb">
                        <img src="uploads/d1.jpg" alt="Card Image">
                    </div>
                </div>
                <div class="col-lg-6 align-items-center">
                    <div class="cs_card_info">
                        <h2 class="cs_card_title cs_fs_50 cs_bold">Áo khoác mùa đông ưu đãi có hạn 40%</h2>
                        <p class="cs_card_subtitle cs_fs_21 cs_semibold">
                            Cho đến ngày 15/02/24 Sử dụng mã WINTER khi thanh toán
                        </p>
                        <a href="?act=sanpham_ct&id=36" class="cs_btn cs_style_1 cs_fs_16 cs_medium">Xem ngay</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- End testimonial -->
    <!-- Start blog -->
    <section>
        <div class="cs_height_120 cs_height_lg_70"></div>
        <div class="container">
            <div class="cs_section_heading cs_style_1">
                <div class="cs_section_heading_in">
                    <h2 class="cs_section_title cs_fs_50 cs_bold mb-0">
                        Đọc thời trang độc quyền của chúng tôi <br> bài viết hợp thời trang</h2>
                </div>
                <div class="cs_hesction_heading_right">
                    <a href="blog.html" class="cs_btn cs_style_1 cs_fs_16 cs_medium">Xem Tất Cả Các Blog</a>
                </div>
            </div>
            <div class="cs_height_63 cs_height_lg_50"></div>
            <div class="row cs_gap_y_30">
                <div class="col-lg-4">
                    <div class="cs_post cs_style_1">
                        <a href="blog_details.html" class="cs_post_thumb cs_zoom">
                            <img src="assets/client/img/post1.jpg" alt="Post Image" class="cs_zoom_in w-100">
                        </a>
                        <div class="cs_post_meta">
                            <p class="cs_post_meta_info mb-0 cs_fs_14">NGÀY 13 THÁNG 1 NĂM 2023</p>
                        </div>
                        <div class="cs_post_info">
                            <h3 class="cs_post_title cs_fs_28 cs_semibold">
                                <a href="blog_details.html">Nắm vững nghệ thuật quản lý tủ quần áo</a>
                            </h3>
                            <p class="cs_post_subtitle">Khám phá chìa khóa để đơn giản hóa phong cách của bạn với tủ quần áo con nhộng. Tìm hiểu cách quản lý một bộ sưu tập các tác phẩm linh hoạt sẽ nâng tầm trò chơi thời trang của bạn...</p>
                            <a href="blog_details.html" class="cs_post_btn cs_fs_16 cs_medium cs_primary_color">
                                <span>Đọc thêm</span>
                                <span class="cs_btn_arrow cs_accent_color">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="cs_post cs_style_1">
                        <a href="blog_details.html" class="cs_post_thumb cs_zoom">
                            <img src="assets/client/img/post2.jpg" alt="Post Image" class="cs_zoom_in w-100">
                        </a>
                        <div class="cs_post_meta">
                            <p class="cs_post_meta_info mb-0 cs_fs_14">JMARCH 18, 2023</p>
                        </div>
                        <div class="cs_post_info">
                            <h3 class="cs_post_title cs_fs_28 cs_semibold">
                                <a href="blog_details.html">Redefining style with eco-friendly choices</a>
                            </h3>
                            <p class="cs_post_subtitle">Dive into the world of sustainable fashion and explore how your choices can have a positive impact on the planet. From eco-friendly fabrics to ethical brands...</p>
                            <a href="blog_details.html" class="cs_post_btn cs_fs_16 cs_medium cs_primary_color">
                                <span>Read More</span>
                                <span class="cs_btn_arrow cs_accent_color">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="cs_post cs_style_1">
                        <a href="blog_details.html" class="cs_post_thumb cs_zoom">
                            <img src="assets/client/img/post3.jpg" alt="Post Image" class="cs_zoom_in w-100">
                        </a>
                        <div class="cs_post_meta">
                            <p class="cs_post_meta_info mb-0 cs_fs_14">JANUARY 13, 2023</p>
                        </div>
                        <div class="cs_post_info">
                            <h3 class="cs_post_title cs_fs_28 cs_semibold">
                                <a href="blog_details.html">Tips for mixing and matching patterns</a>
                            </h3>
                            <p class="cs_post_subtitle">Pattern mixing can be a style statement, but it can also be intimidating. Learn the art of combining different patterns and prints to create unique and eye-catching outfits....</p>
                            <a href="blog_details.html" class="cs_post_btn cs_fs_16 cs_medium cs_primary_color">
                                <span>Read More</span>
                                <span class="cs_btn_arrow cs_accent_color">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cs_height_135 cs_height_lg_75"></div>
    </section>
    <!-- End blog -->
    <!-- Start instagram -->
    <div class="cs_instagram">
        <a href="https://www.instagram.com/" target="_blank" class="position-relative cs_instagram_item">
            <div class="cs_instagram_thumb position-relative">
                <img src="assets/client/img/instagram_1.jpg" alt="Instagram">
            </div>
            <div class="cs_instagram_overlay position-absolute">
                <i class="fa-brands fa-instagram"></i>
            </div>
        </a>
        <a href="https://www.instagram.com/" target="_blank" class="position-relative cs_instagram_item">
            <div class="cs_instagram_thumb position-relative">
                <img src="assets/client/img/instagram_2.jpg" alt="Instagram">
            </div>
            <div class="cs_instagram_overlay position-absolute">
                <i class="fa-brands fa-instagram"></i>
            </div>
        </a>
        <a href="https://www.instagram.com/" target="_blank" class="position-relative cs_instagram_item">
            <div class="cs_instagram_thumb position-relative">
                <img src="assets/client/img/instagram_3.jpg" alt="Instagram">
            </div>
            <div class="cs_instagram_overlay position-absolute">
                <i class="fa-brands fa-instagram"></i>
            </div>
        </a>
        <a href="https://www.instagram.com/" target="_blank" class="position-relative cs_instagram_item">
            <div class="cs_instagram_thumb position-relative">
                <img src="assets/client/img/instagram_4.jpg" alt="Instagram">
            </div>
            <div class="cs_instagram_overlay position-absolute">
                <i class="fa-brands fa-instagram"></i>
            </div>
        </a>
        <a href="https://www.instagram.com/" target="_blank" class="position-relative cs_instagram_item">
            <div class="cs_instagram_thumb position-relative">
                <img src="assets/client/img/instagram_5.jpg" alt="Instagram">
            </div>
            <div class="cs_instagram_overlay position-absolute">
                <i class="fa-brands fa-instagram"></i>
            </div>
        </a>
        <a href="https://www.instagram.com/" target="_blank" class="position-relative cs_instagram_item">
            <div class="cs_instagram_thumb position-relative">
                <img src="assets/client/img/instagram_6.jpg" alt="Instagram">
            </div>
            <div class="cs_instagram_overlay position-absolute">
                <i class="fa-brands fa-instagram"></i>
            </div>
        </a>
    </div>
    <!-- End instagram -->
    <!-- Start icon boxes -->
    <section class="container-fluid">
        <div class="cs_height_135 cs_height_lg_75"></div>
        <div class="row cs_gap_y_24">
            <div class="col-xl-3 col-sm-6">
                <div class="cs_iconbox cs_style_1 position-relative">
                    <div class="cs_iconbox_icon cs_primary_color">
                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_395_980)">
                                <path d="M0 10.5054C0.390625 10.2317 0.742188 9.89282 1.15885 9.68427C7.44792 6.51691 13.737 3.37562 20.026 0.208255C20.599 -0.0785019 21.0677 -0.0654675 21.6276 0.208255C28.0729 3.44079 34.5312 6.67332 40.9896 9.89282C41.4453 10.1274 41.6927 10.4663 41.6927 10.9616C41.6927 13.8292 41.6927 16.6968 41.6797 19.5644C41.6797 20.2812 41.3151 20.7244 40.7422 20.7766C40.0521 20.8287 39.5964 20.3725 39.5964 19.5774C39.5833 18.0524 39.5964 16.5143 39.5964 14.9893C39.5964 14.2202 39.5964 13.4643 39.5964 12.6301C39.4141 12.7083 39.2839 12.7474 39.1667 12.8125C33.2812 15.7583 27.3958 18.7041 21.5104 21.6629C21.0417 21.8975 20.638 21.8975 20.1693 21.6629C17.4349 20.2812 14.6745 18.8996 11.9401 17.531C11.8359 17.4789 11.7318 17.4397 11.5885 17.3746C11.5755 17.5831 11.5625 17.7526 11.5625 17.922C11.5625 19.7468 11.5625 21.5717 11.5495 23.3965C11.5495 24.0352 11.1068 24.4523 10.4948 24.4392C9.92188 24.4262 9.51823 24.0091 9.47917 23.4095C9.46615 23.2661 9.47917 23.1228 9.47917 22.9663C9.47917 20.8808 9.49219 18.7953 9.46615 16.7098C9.46615 16.5273 9.33594 16.2536 9.19271 16.1884C6.92708 15.0284 4.63542 13.8944 2.35677 12.7474C2.30469 12.7213 2.23958 12.7083 2.1224 12.6692C2.10938 12.8386 2.08333 12.9689 2.08333 13.0993C2.08333 18.4564 2.08333 23.8136 2.07031 29.1838C2.07031 29.5096 2.17448 29.666 2.46094 29.8224C7.66927 32.703 12.8646 35.6097 18.0599 38.5034C18.8932 38.9726 19.1536 39.52 18.8151 40.1327C18.4766 40.7192 17.8776 40.7974 17.0703 40.3412C11.6406 37.3172 6.21094 34.3063 0.794271 31.2693C0.494792 31.0998 0.260417 30.8131 0 30.5915C0 23.8657 0 17.1791 0 10.5054ZM12.8385 15.628C15.4297 16.9184 17.9297 18.1697 20.4167 19.434C20.7292 19.5904 20.9635 19.5774 21.276 19.421C26.7839 16.6577 32.2917 13.9074 37.7995 11.1441C37.9427 11.079 38.0599 10.9877 38.2422 10.8834C38.0469 10.7792 37.9167 10.6879 37.7734 10.6228C35.4167 9.44965 33.0599 8.27656 30.7161 7.07739C30.4036 6.92098 30.1693 6.93401 29.8698 7.09043C25.5859 9.2411 21.3021 11.3918 17.0182 13.5425C15.638 14.2202 14.2839 14.9111 12.8385 15.628ZM3.41146 10.8834C3.55469 10.9747 3.60677 11.0138 3.65885 11.0399C5.83333 12.1347 8.00781 13.2296 10.2083 14.2985C10.3906 14.3897 10.7161 14.3506 10.9115 14.2463C16.4323 11.4961 21.9531 8.73276 27.474 5.96947C27.6042 5.90429 27.7344 5.81305 27.9167 5.70878C25.651 4.57478 23.4505 3.47989 21.263 2.37197C20.9375 2.20252 20.6901 2.20252 20.3646 2.37197C15.2734 4.93975 10.1563 7.49449 5.03906 10.0492C4.51823 10.3099 4.01042 10.5836 3.41146 10.8834Z" fill="currentColor"></path>
                                <path d="M29.492 49.9998C28.7368 49.7783 28.19 49.283 27.7863 48.6182C26.4321 46.4024 24.6613 44.6036 22.4478 43.248C22.2134 43.1046 22.0051 42.9222 21.7837 42.7527C20.8462 42.0358 20.5728 40.8758 21.1066 39.8851C21.6405 38.8945 22.8254 38.4383 23.9191 38.8554C24.7525 39.1683 25.5728 39.5462 26.3801 39.9242C26.6665 40.0546 26.8358 40.0155 27.0441 39.7939C28.7368 37.943 30.4556 36.1182 32.1483 34.2673C32.3176 34.0848 32.4347 33.8502 32.5389 33.6808C32.3436 33.6156 32.1743 33.5895 32.0441 33.5113C28.9452 31.869 25.8332 30.2266 22.7342 28.5843C21.5363 27.9456 21.0806 26.7334 21.5623 25.5864C21.992 24.5567 22.9556 24.0744 24.1144 24.3221C26.2889 24.7783 28.4764 25.2475 30.6509 25.7037C33.0988 26.2251 35.5467 26.7334 37.9946 27.2678C38.2941 27.333 38.4764 27.2678 38.6717 27.0593C40.2342 25.3778 41.8618 23.7616 43.3722 22.028C44.5832 20.6333 47.2264 20.529 48.5025 21.3502C49.492 21.9759 49.8827 22.9274 49.9868 24.0223C50.117 25.3778 49.7785 26.577 48.7108 27.5416C47.0702 29.0275 45.4946 30.5786 43.867 32.0906C43.5676 32.3773 43.4894 32.625 43.5806 33.016C44.6353 37.6302 45.69 42.2444 46.7316 46.8586C47.0181 48.1229 46.5363 49.1265 45.4165 49.5567C44.3228 49.9738 43.1509 49.5306 42.5519 48.4357C40.8332 45.2684 39.1275 42.0749 37.3957 38.9076C37.2004 38.5556 36.8879 38.2689 36.6274 37.9561C36.5884 37.9821 36.5493 38.0212 36.5103 38.0473C36.6144 38.1776 36.7186 38.2949 36.8358 38.4514C36.5363 38.7381 36.2368 39.0118 35.9504 39.2856C34.3488 40.7715 32.7603 42.2574 31.1457 43.7303C30.8722 43.978 30.8202 44.1865 30.9894 44.5124C31.2759 45.0989 31.5233 45.6985 31.7707 46.2981C32.565 48.1229 32.1613 49.1787 30.3905 49.9868C30.078 49.9998 29.7915 49.9998 29.492 49.9998ZM44.9347 47.9925C44.9608 47.9665 44.9868 47.9404 45.0129 47.9013C44.8957 47.6406 44.7264 47.406 44.6613 47.1323C43.6066 42.5181 42.565 37.9039 41.4972 33.2897C41.2498 32.2339 41.5103 31.3867 42.3045 30.6437C43.9582 29.1187 45.5728 27.5676 47.2134 26.0296C47.9035 25.3778 48.1118 24.4654 47.7472 23.5921C47.6561 23.3836 47.4738 23.175 47.2785 23.0708C46.4972 22.6667 45.4165 22.8883 44.8176 23.5139C43.242 25.1823 41.6665 26.8507 40.104 28.5322C39.453 29.236 38.6587 29.5228 37.7212 29.3273C35.2342 28.8059 32.7603 28.2715 30.2863 27.7501C28.1379 27.2939 25.9894 26.8377 23.841 26.3945C23.6978 26.3685 23.5415 26.4467 23.3853 26.4727C23.4894 26.6422 23.5676 26.6683 23.6327 26.7074C26.8358 28.4018 30.0519 30.0833 33.242 31.8038C34.6743 32.5728 34.9087 34.2803 33.8019 35.4925C31.8358 37.6432 29.8436 39.7678 27.8644 41.9055C27.3957 42.4138 27.0702 42.479 26.4321 42.2053C25.4816 41.7882 24.5311 41.3711 23.5676 40.954C23.3983 40.8888 23.229 40.8367 23.0597 40.7715C23.1379 40.967 23.2551 41.0843 23.3722 41.1756C25.8592 42.8961 28.0077 44.9555 29.5962 47.5494C29.6613 47.6667 29.8306 47.7188 29.9478 47.797C29.9478 47.6537 29.9868 47.4972 29.9347 47.3669C29.5181 46.3893 29.1014 45.4248 28.6717 44.4602C28.3592 43.7303 28.4243 43.4175 29.0103 42.857C31.0676 40.9409 33.1379 39.0249 35.1952 37.0958C36.5754 35.8054 38.229 36.0791 39.1144 37.7214C40.7941 40.8367 42.4738 43.9649 44.1795 47.0801C44.3748 47.419 44.6873 47.6928 44.9347 47.9925Z" fill="currentColor"></path>
                            </g>
                            <defs>
                                <clipPath id="clip0_395_980">
                                    <rect width="50" height="50" fill="white"></rect>
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <div class="cs_iconbox_text">
                        <h4 class="cs_iconbox_title cs_fs_21 cs_semibold">Free Shipping</h4>
                        <p class="cs_iconbox_subtitle mb-0">No need to worry about cost</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="cs_iconbox cs_style_1 position-relative">
                    <div class="cs_iconbox_icon cs_primary_color">
                        <svg width="52" height="50" viewBox="0 0 52 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_395_986)">
                                <path d="M7.41828 14.2809C8.48221 14.2809 9.45749 14.2809 10.4328 14.2809C11.5854 14.2809 12.1173 15.1288 11.6001 16.1553C10.0781 19.2347 8.5561 22.2993 7.03407 25.3788C6.79764 25.8548 6.45777 26.1672 5.92581 26.1672C5.36428 26.1821 5.00964 25.8548 4.77321 25.3639C3.25118 22.3142 1.71438 19.2347 0.192358 16.1702C-0.310057 15.1437 0.221912 14.2957 1.37451 14.2957C2.32023 14.2957 3.26596 14.266 4.19691 14.3106C4.61066 14.3255 4.80276 14.1916 4.99486 13.8197C7.58082 8.67241 11.4524 4.83427 16.6243 2.37964C30.9579 -4.41893 47.8923 3.9268 51.3944 19.5025C54.3498 32.7278 46.252 45.953 33.1892 49.2407C21.2495 52.2458 8.96985 46.0274 4.27079 34.6171C3.9457 33.8435 4.07869 33.2484 4.64021 32.9063C5.2904 32.5046 6.01447 32.7724 6.36911 33.5311C6.78287 34.3939 7.13751 35.3014 7.62515 36.1345C12.3685 44.0488 19.3433 47.9762 28.5197 47.5299C38.7601 47.039 47.2421 39.4519 49.2222 29.321C51.5865 17.1967 43.7104 5.34007 31.6229 2.84082C22.2395 0.891991 12.472 5.3252 7.72859 13.7007C7.62515 13.8643 7.55127 14.028 7.41828 14.2809ZM5.89625 22.3439C6.85675 20.4249 7.75814 18.5802 8.68909 16.7057C6.78287 16.7057 4.98008 16.7057 3.08864 16.7057C4.03436 18.5951 4.95053 20.4249 5.89625 22.3439Z" fill="currentColor"></path>
                                <path d="M27.1895 11.3057C34.6962 11.3206 40.7843 17.4646 40.7695 25.0218C40.7547 32.5791 34.6223 38.738 27.16 38.6934C19.6533 38.6487 13.58 32.4899 13.5948 24.9475C13.6095 17.4348 19.7272 11.2908 27.1895 11.3057ZM27.1747 36.2983C33.3515 36.2983 38.3904 31.2551 38.4052 25.0516C38.42 18.8035 33.4254 13.7306 27.2043 13.7008C21.0128 13.6711 15.9443 18.7291 15.9295 24.9772C15.9295 31.2105 20.9684 36.2834 27.1747 36.2983Z" fill="currentColor"></path>
                                <path d="M28.3568 30.9874C28.3568 31.523 28.3568 32.0436 28.3568 32.5643C28.342 33.4123 27.8692 33.9478 27.1599 33.933C26.4801 33.9181 26.0073 33.3825 26.0073 32.5792C26.0073 32.0585 26.0073 31.5378 26.0073 30.9576C25.431 30.9576 24.899 30.9576 24.3818 30.9576C23.5838 30.9428 23.0519 30.4667 23.0519 29.7675C23.0519 29.0683 23.5838 28.5923 24.3818 28.5923C25.6969 28.5774 26.9973 28.5923 28.3125 28.5923C28.9331 28.5923 29.3912 28.2055 29.5242 27.6551C29.6424 27.1493 29.3764 26.5691 28.8888 26.3608C28.6671 26.2567 28.3863 26.2418 28.1351 26.2269C27.3076 26.1972 26.4654 26.2567 25.6526 26.1674C23.7759 25.9591 22.446 24.4269 22.4756 22.5822C22.5051 20.7375 23.8794 19.2796 25.7708 19.0862C25.8299 19.0862 25.8743 19.0713 26.022 19.0415C26.022 18.5209 26.022 18.0002 26.022 17.4646C26.0368 16.6316 26.5097 16.0811 27.219 16.096C27.9135 16.1109 28.3568 16.6167 28.3716 17.4498C28.3864 17.9704 28.3716 18.4762 28.3716 19.0862C28.9479 19.0862 29.4798 19.0862 30.0118 19.0862C30.8098 19.1011 31.3417 19.5771 31.3417 20.2614C31.3417 20.9606 30.8098 21.4367 30.0118 21.4515C28.6967 21.4664 27.3963 21.4515 26.0811 21.4515C25.4753 21.4515 25.0615 21.7788 24.9138 22.2846C24.766 22.7904 24.9285 23.3409 25.3719 23.5938C25.5935 23.7277 25.889 23.7872 26.155 23.802C26.9087 23.8318 27.6623 23.7872 28.4307 23.8169C30.2778 23.8913 31.7407 25.2302 31.918 26.941C32.0954 28.8303 31.0019 30.4221 29.1991 30.8535C28.9183 30.913 28.6819 30.9279 28.3568 30.9874Z" fill="currentColor"></path>
                            </g>
                            <defs>
                                <clipPath id="clip0_395_986">
                                    <rect width="52" height="50" fill="white"></rect>
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <div class="cs_iconbox_text">
                        <h4 class="cs_iconbox_title cs_fs_21 cs_semibold">Payment Method</h4>
                        <p class="cs_iconbox_subtitle mb-0">Easy and hassle free online transaction</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="cs_iconbox cs_style_1 position-relative">
                    <div class="cs_iconbox_icon cs_primary_color">
                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_395_993)">
                                <path d="M0 20.4102C0 19.5312 0 18.6523 0 17.7734C0.166016 16.7871 0.244141 15.7715 0.507812 14.8047C2.50977 7.22656 7.30469 2.44141 14.9023 0.488281C15.8398 0.244141 16.8164 0.15625 17.7734 0C18.6523 0 19.5312 0 20.4102 0C20.5371 0.0292969 20.6543 0.0683594 20.7812 0.078125C23.0371 0.263672 25.2148 0.810547 27.2363 1.83594C33.7207 5.11719 37.3828 10.3711 38.1055 17.627C38.1543 18.1055 38.3105 18.3008 38.7598 18.457C44.1992 20.3125 47.7441 24.0234 49.3945 29.5117C49.6973 30.5176 49.8047 31.5723 50 32.6074C50 33.418 50 34.2383 50 35.0488C49.9707 35.1758 49.9316 35.293 49.9121 35.4199C49.6973 37.6367 49.0527 39.707 47.9688 41.6504C47.8027 41.9434 47.7832 42.207 47.8711 42.5195C48.5156 44.7949 49.1406 47.0801 49.7754 49.3652C49.8242 49.5312 49.8535 49.6973 49.8926 49.8926C49.7656 49.8633 49.707 49.8535 49.6484 49.8438C47.3145 49.1992 44.9902 48.5645 42.666 47.9004C42.2461 47.7832 41.9238 47.8516 41.5234 48.0176C40.2637 48.5645 38.9844 49.082 37.6758 49.4922C36.8359 49.7559 35.9277 49.8242 35.0586 49.9805C34.248 49.9805 33.4277 49.9805 32.6172 49.9805C32.4902 49.9512 32.373 49.9023 32.2461 49.8926C25.8301 49.2773 20.3418 44.8145 18.418 38.6133C18.3105 38.2617 18.1543 38.1348 17.793 38.1055C14.8926 37.9102 12.1777 37.0996 9.64844 35.6641C9.49219 35.5762 9.23828 35.5664 9.0625 35.6152C7.32422 36.084 5.58594 36.5625 3.84766 37.041C2.61719 37.3828 1.38672 37.7148 0.0976562 38.0664C0.146484 37.8418 0.175781 37.6855 0.214844 37.5391C0.966797 34.8145 1.70898 32.0898 2.48047 29.375C2.59766 28.9551 2.57812 28.6328 2.36328 28.2422C1.47461 26.6797 0.830078 25.0098 0.478516 23.252C0.283203 22.334 0.15625 21.3672 0 20.4102ZM4.27734 33.8965C4.42383 33.8574 4.50195 33.8477 4.58008 33.8281C6.16211 33.3887 7.74414 32.9688 9.32617 32.5098C9.70703 32.4023 9.99023 32.4512 10.3223 32.6562C14.0039 35 18.0078 35.7617 22.2852 34.9414C31.123 33.2324 36.9238 24.3652 34.8438 15.5469C33.3984 9.42383 29.5605 5.3125 23.5156 3.58398C17.5098 1.86523 12.1094 3.33008 7.65625 7.71484C2.20703 13.0957 1.39648 21.3379 5.53711 27.8809C5.73242 28.1934 5.79102 28.4668 5.68359 28.8281C5.20508 30.4883 4.75586 32.1484 4.27734 33.8965ZM38.0664 21.2988C37.4902 25.7227 35.6836 29.4824 32.5684 32.5879C29.4629 35.6836 25.7031 37.4902 21.3184 38.0566C21.3672 38.2129 21.3965 38.3203 21.4258 38.418C23.1738 43.3496 28.1543 46.9434 33.3984 47.0605C36.2305 47.1289 38.8281 46.3965 41.1914 44.834C41.4648 44.6484 41.7188 44.5898 42.0508 44.6973C42.9688 44.9805 43.8965 45.2246 44.8145 45.4785C45.0977 45.5566 45.3906 45.625 45.7227 45.7031C45.3906 44.5117 45.1172 43.3984 44.7656 42.2949C44.6094 41.7969 44.6777 41.4258 44.9512 40.9863C48.3887 35.6055 47.5781 28.7305 42.9883 24.2871C41.5918 22.9395 39.9707 21.9434 38.0664 21.2988Z" fill="currentColor"></path>
                                <path d="M16.1328 14.6287C15.166 14.6287 14.2383 14.6287 13.2715 14.6287C13.2129 13.6326 13.4668 12.7146 13.9453 11.8845C15.1758 9.74587 17.0508 8.65212 19.5117 8.8279C21.9238 9.00368 23.6719 10.2927 24.541 12.5681C25.4297 14.8826 24.9317 16.992 23.2422 18.7791C22.5684 19.4822 21.8359 20.1267 21.084 20.7615C20.6934 21.0935 20.4981 21.4451 20.5469 21.9724C20.5957 22.4705 20.5567 22.9783 20.5567 23.5056C19.5801 23.5056 18.6426 23.5056 17.627 23.5056C17.627 23.0369 17.627 22.5584 17.627 22.0799C17.6367 21.3767 17.4512 20.5955 17.7051 20.0095C17.959 19.4236 18.6621 19.0232 19.1797 18.5447C19.8438 17.9197 20.5371 17.324 21.1817 16.6795C22.0606 15.8103 22.2559 14.492 21.7383 13.3884C21.211 12.2849 20.0391 11.6209 18.8281 11.7283C17.627 11.8357 16.5918 12.6951 16.2695 13.8865C16.211 14.1209 16.1817 14.365 16.1328 14.6287Z" fill="currentColor"></path>
                                <path d="M20.5176 29.3848C19.5605 29.3848 18.6328 29.3848 17.666 29.3848C17.666 28.4277 17.666 27.4805 17.666 26.5039C18.6035 26.5039 19.541 26.5039 20.5176 26.5039C20.5176 27.4414 20.5176 28.3887 20.5176 29.3848Z" fill="currentColor"></path>
                            </g>
                            <defs>
                                <clipPath id="clip0_395_993">
                                    <rect width="50" height="50" fill="white"></rect>
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <div class="cs_iconbox_text">
                        <h4 class="cs_iconbox_title cs_fs_21 cs_semibold">Online Support</h4>
                        <p class="cs_iconbox_subtitle mb-0">N24 hours a day, 7 days a week</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="cs_iconbox cs_style_1 position-relative">
                    <div class="cs_iconbox_icon cs_primary_color">
                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_395_1000)">
                                <path d="M50 8.78906C50 12.6953 50 16.6016 50 20.5078C49.0332 20.5078 48.0664 20.5078 47.0703 20.5078C47.0703 30.3809 47.0703 40.1953 47.0703 50C32.3535 50 17.6465 50 2.92969 50C2.92969 40.1855 2.92969 30.3613 2.92969 20.5078C1.91406 20.5078 0.957031 20.5078 0 20.5078C0 16.6016 0 12.6953 0 8.78906C3.19336 8.78906 6.39648 8.78906 9.63867 8.78906C9.57031 8.62305 9.53125 8.50586 9.47266 8.38867C8.25195 5.80078 9.00391 2.83203 11.2988 1.13281C12.1289 0.517578 13.0762 0.214844 14.0625 0C14.5508 0 15.0391 0 15.5273 0C15.6738 0.0488281 15.8301 0.0976562 15.9766 0.136719C17.4121 0.458984 18.5742 1.20117 19.4531 2.39258C19.8242 2.90039 20.1758 3.4375 20.5566 3.93555C21.8262 5.61523 23.3398 7.05078 25 8.37891C25.1172 8.29102 25.2148 8.21289 25.3125 8.13477C27.2656 6.55273 28.9844 4.74609 30.3711 2.63672C31.0254 1.65039 31.8945 0.908203 32.998 0.46875C33.4766 0.283203 33.9746 0.15625 34.4727 0.00976562C34.9609 0.00976562 35.4492 0.00976562 35.9375 0.00976562C36.0254 0.0390625 36.1133 0.078125 36.2109 0.0976562C39.5215 0.644531 41.6992 3.85742 40.957 7.11914C40.8301 7.67578 40.5957 8.21289 40.4004 8.79883C43.6035 8.78906 46.8066 8.78906 50 8.78906ZM20.5859 20.5469C15.6641 20.5469 10.7715 20.5469 5.89844 20.5469C5.89844 29.4043 5.89844 38.2324 5.89844 47.0508C10.8105 47.0508 15.6836 47.0508 20.5859 47.0508C20.5859 38.2031 20.5859 29.3945 20.5859 20.5469ZM29.4238 20.5273C29.4238 29.3848 29.4238 38.2129 29.4238 47.0312C34.3457 47.0312 39.2285 47.0312 44.1113 47.0312C44.1113 38.1836 44.1113 29.3652 44.1113 20.5273C39.2188 20.5273 34.3359 20.5273 29.4238 20.5273ZM2.94922 17.5391C8.84766 17.5391 14.7168 17.5391 20.5664 17.5391C20.5664 15.5762 20.5664 13.6523 20.5664 11.7383C14.6777 11.7383 8.82812 11.7383 2.94922 11.7383C2.94922 13.6816 2.94922 15.5957 2.94922 17.5391ZM26.4258 47.0508C26.4258 35.2539 26.4258 23.4961 26.4258 11.748C25.4492 11.748 24.5117 11.748 23.5547 11.748C23.5547 23.5254 23.5547 35.2832 23.5547 47.0508C24.5215 47.0508 25.459 47.0508 26.4258 47.0508ZM47.0508 11.748C41.1523 11.748 35.293 11.748 29.4336 11.748C29.4336 13.7109 29.4336 15.6348 29.4336 17.5488C35.3223 17.5488 41.1719 17.5488 47.0508 17.5488C47.0508 15.6152 47.0508 13.7012 47.0508 11.748ZM20.8301 8.7793C20.8789 8.7207 20.9277 8.66211 20.9766 8.60352C20.5664 8.24219 20.0977 7.92969 19.7559 7.50977C18.7988 6.34766 17.9004 5.12695 16.9531 3.95508C16.3086 3.16406 15.4297 2.85156 14.4336 2.95898C12.9102 3.125 11.7773 4.44336 11.8359 5.9375C11.8945 7.49023 13.0957 8.74023 14.6875 8.76953C16.7285 8.81836 18.7793 8.7793 20.8301 8.7793ZM29.1309 8.78906C30.791 8.78906 32.4121 8.78906 34.0332 8.78906C34.5215 8.78906 35.0098 8.80859 35.498 8.76953C36.875 8.64258 37.9199 7.65625 38.1445 6.29883C38.3594 5.0293 37.6562 3.74023 36.4453 3.19336C35.2441 2.64648 33.8281 2.98828 32.9883 4.0625C32.5293 4.64844 32.1387 5.29297 31.6602 5.86914C30.8496 6.8457 30 7.7832 29.1309 8.78906Z" fill="currentColor"></path>
                            </g>
                            <defs>
                                <clipPath id="clip0_395_1000">
                                    <rect width="50" height="50" fill="white"></rect>
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <div class="cs_iconbox_text">
                        <h4 class="cs_iconbox_title cs_fs_21 cs_semibold">Secure Packaging</h4>
                        <p class="cs_iconbox_subtitle mb-0">Every order packaging securely place</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="cs_height_135 cs_height_lg_75"></div>
    </section>
    <!-- End icon boxes -->