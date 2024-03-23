<section>
        <div class="cs_height_35 cs_height_lg_35 mt-5"></div>
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="cs_single_product_breadcrumb breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="#">Sản phẩm</a></li>
                    <li class="breadcrumb-item"><a href="#">Men</a></li>
                    <li class="breadcrumb-item active">T-Shirt</li>
                </ol>
            </nav>
            <div class="row">
                <div class="col-xl-7">
                    <div class="row">
                        <div class="col-3">
                            <div class="cs_single_product_nav slick-slider">
                                <div class="cs_single_product_thumb_mini">
                                    <img src="../assets/img/thumb1.png" alt="Thumb">
                                </div>
                                <div class="cs_single_product_thumb_mini">
                                    <img src="../assets/img/thumb2.png" alt="Thumb">
                                </div>
                                <div class="cs_single_product_thumb_mini">
                                    <img src="../assets/img/thumb3.png" alt="Thumb">
                                </div>
                                <div class="cs_single_product_thumb_mini">
                                    <img src="../assets/img/thumb4.png" alt="Thumb">
                                </div>
                                <div class="cs_single_product_thumb_mini">
                                    <img src="../assets/img/thumb1.png" alt="Thumb">
                                </div>
                                <div class="cs_single_product_thumb_mini">
                                    <img src="../assets/img/thumb2.png" alt="Thumb">
                                </div>
                                <div class="cs_single_product_thumb_mini">
                                    <img src="../assets/img/thumb3.png" alt="Thumb">
                                </div>
                                <div class="cs_single_product_thumb_mini">
                                    <img src="../assets/img/thumb4.png" alt="Thumb">
                                </div>
                            </div>
                        </div>
                        <div class="col-9">
                            <?php
                                extract($sanpham);
                            ?>
                                <div class="cs_single_product_thumb slick-slider">
                                    <div class="cs_single_product_thumb_item">
                                        <a href="#">
                                        <img src="../uploads/<?=$image?>" alt="">
                                        </a>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="cs_single_product_details">
                        <a style="font-size: 25px" href="?act=chitietsp&id=<?=$id?>"><?=$tensp?></a>
                        <div class="cs_single_product_review">
                            <span>Kho: <span class="cs_accent_color">12 trong kho</span></span>
                        </div>
                        <div class="mt-5">
                            <sapn class="cs_product_price cs_fs_18 cs_accent_color mb-0 cs_medium new-price">Giá: <?= number_format($giakm, 0, ',', '.')?>₫</span>
                            <span class="cs_product_price cs_fs_18 cs_accent_color mb-0 cs_medium  mb-0 cs_medium old-price"><?= number_format($giasp, 0, ',', '.')?>₫</span>
                        </div>
                        <hr>
                        <div class="cs_single_product_details_text">
                            <p class="mb-0">Áo thun nam màu đen của chúng tôi mang đến kiểu dáng cổ điển và được làm từ chất liệu cotton nguyên chất chất lượng cao giúp bạn luôn cảm thấy thoải mái và trông thật tuyệt.</p>
                        </div>
                        <div class="cs_single_product_size">
                            <h4 class="cs_fs_16 cs_medium">Size</h4>
                            <ul class="cs_size_filter_list cs_mp0">
                                <li>
                                    <input type="radio" name="size">
                                    <span>S</span>
                                </li>
                                <li>
                                    <input type="radio" name="size">
                                    <span>M</span>
                                </li>
                                <li>
                                    <input type="radio" name="size">
                                    <span>L</span>
                                </li>
                                <li>
                                    <input type="radio" name="size">
                                    <span>XL</span>
                                </li>
                            </ul>
                        </div>
                        <div class="cs_single_product_color ">
                            <h4 class="cs_fs_16 cs_medium">Color</h4>
                            <ul class="cs_color_filter_list cs_type_1 cs_mp0">
                                <li>
                                    <div class="cs_color_filter">
                                        <input type="radio" name="color">
                                        <span class="cs_color_filter_circle cs_accent_bg"></span>
                                        <span class="cs_color_text">Red</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="cs_color_filter">
                                        <input type="radio" name="color">
                                        <span class="cs_color_filter_circle cs_secondary_bg"></span>
                                        <span class="cs_color_text">Gray</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="cs_color_filter">
                                        <input type="radio" name="color">
                                        <span class="cs_color_filter_circle cs_primary_bg"></span>
                                        <span class="cs_color_text">Black</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="cs_color_filter">
                                        <input type="radio" name="color">
                                        <span class="cs_color_filter_circle cs_white_bg"></span>
                                        <span class="cs_color_text">White</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="cs_action_btns">
                            <div class="cs_quantity">
                                <button class="cs_quantity_btn cs_increment"><i class="fa-solid fa-angle-up"></i></button>
                                <span class="cs_quantity_input">1</span>
                                <button class="cs_quantity_btn cs_decrement"><i class="fa-solid fa-angle-down"></i></button>
                            </div>
                            <a href="#" class="cs_btn cs_style_1 cs_fs_16 cs_medium">Add to Cart</a>
                            <button class="cs_heart_btn"><i class="fa-regular fa-heart"></i></button>
                        </div>
                        <ul class="cs_single_product_info">
                            <li class="cs_fs_16 cs_normal">
                                <b class="cs_medium">SKU: </b>0215552
                            </li>
                            <li class="cs_fs_16 cs_normal">
                                <b class="cs_medium">Categories: </b>T-Shirt
                            </li>
                            <li class="cs_fs_16 cs_normal">
                                <b class="cs_medium">Tags: </b>Men, T-Shirt, Clothing
                            </li>
                            <li class="cs_fs_16 cs_normal">
                                <b class="cs_medium">Brand: </b>Levine
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="cs_height_70 cs_height_lg_60"></div>
            <hr>
            <div class="cs_product_meta_info">
                <ul class="cs_tab_links cs_style_2 cs_product_tab cs_fs_21 cs_primary_color cs_semibold cs_mp0">
                    <li><a href="#tab_1">Miêu tả</a></li>
                    <!-- <li><a href="#tab_2">Thêm thông tin</a></li>
                    <li><a href="#tab_3">Hướng dẫn chọn kích cỡ</a></li> -->
                    <li class="active"><a href="#tab_4">Đánh giá </a></li>
                </ul>
                <div class="cs_tabs">
                    <div class="cs_tab" id="tab_1">
                    Áo thun nam màu đen của chúng tôi mang đến kiểu dáng cổ điển và được làm từ chất liệu cotton nguyên chất chất lượng cao giúp bạn luôn cảm thấy thoải mái và trông thật tuyệt.
                    </div>
                    <!-- <div class="cs_tab" id="tab_2">
                        <table class="m-0">
                            <tbody>
                                <tr>
                                    <td>Color</td>
                                    <td>Blue, Gray, Green, Red, Yellow</td>
                                </tr>
                                <tr>
                                    <td>Size</td>
                                    <td>Large, Medium, Small</td>
                                </tr>
                            </tbody>
                        </table>
                        <hr>
                    </div> -->
                    <!-- <div class="cs_tab" id="tab_3">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sagittis orci ac odio dictum tincidunt. Donec ut metus leo. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed luctus, dui eu sagittis sodales,
                        nulla nibh sagittis augue, vel porttitor diam enim non metus. Vestibulum aliquam augue neque. Phasellus tincidunt odio eget ullamcorper efficitur. Cras placerat ut turpis pellentesque vulputate. Nam sed consequat tortor. Curabitur
                        finibus sapien dolor. Ut eleifend tellus nec erat pulvinar dignissim. Nam non arcu purus. Vivamus et massa massa.
                    </div> -->
                    <div class="cs_tab active" id="tab_4">
                        <?php extract($dembl);?>
                        <?php
                            foreach ($listbl as $bl) {
                            extract($bl);
                            echo'<ul class="cs_client_review_list cs_mp0">
                                    <li>
                                        <div class="cs_client_review">
                                            <div class="cs_review_media">
                                                <div class="cs_review_media_thumb"><img src="../assets/img/avatar.png" alt="Avatar"></div>
                                                <div class="cs_review_media_right">
                                                    <div class="cs_rating_container">
                                                        <div class="cs_rating cs_size_sm" data-rating="5">
                                                            <div class="cs_rating_percentage"></div>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0 cs_primary_color cs_semibold">Nguyễn Kim Kỳ</p>
                                                </div>
                                                <p class="cs_review_posted_by">'.$ngaybinhluan.'</p>
                                            </div>
                                            <p class="cs_review_text">'.$noidung.'</p>
                                        </div>
                                    </li>
                                </ul>';
                            }
                            ?>
                        <!-- <ul class="cs_client_review_list cs_mp0">
                            <li>
                                <div class="cs_client_review">
                                    <div class="cs_review_media">
                                        <div class="cs_review_media_thumb"><img src="../assets/img/avatar.png" alt="Avatar"></div>
                                        <div class="cs_review_media_right">
                                            <div class="cs_rating_container">
                                                <div class="cs_rating cs_size_sm" data-rating="5">
                                                    <div class="cs_rating_percentage"></div>
                                                </div>
                                            </div>
                                            <p class="mb-0 cs_primary_color cs_semibold">Zhon Abony</p>
                                        </div>
                                        <p class="cs_review_posted_by">August 12, 2023</p>
                                    </div>
                                    <p class="cs_review_text">Gần đây tôi đã mua áo phông Arino và tôi thực sự ấn tượng. Chất lượng âm thanh vượt trội, kết nối không dây liền mạch và công nghệ khử tiếng ồn là một tính năng nổi bật <br>
                                </div>
                            </li>
                        </ul> -->
                        <div class="cs_height_20 cs_height_lg_20"></div>
                        <div class="cs_input_rating_wrap">
                            <p>Đánh giá của bạn *</p>
                            <div class="cs_input_rating cs_accent_color" data-rating="0">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                        </div>
                        <div class="cs_height_20 cs_height_lg_22"></div>
                        <form class="row cs_review_form cs_gap_y_24">
                            <div class="col-lg-12">
                                <textarea rows="3" class="cs_form_field" placeholder="Write your review *"></textarea>
                            </div>
                            <div class="col-lg-12">
                                <button class="cs_btn cs_style_1 cs_fs_16 cs_medium" type="submit">Submit Now</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- .cs_tabs -->
            </div>
        </div>
    </section>

    <div class="container-fluid mt-5">
            <div class="section-title-2 st-border-center text-center mb-75" data-aos="fade-up" data-aos-delay="200">
                <h2>Sản phẩm liên quan</h2>
            </div>
            <div class="cs_isotope cs_style_1 cs_isotope_col_4 cs_has_gutter_24" >
                <div class="cs_grid_sizer"></div>
                    <?php foreach($splq as $sp) : ?>
                        <?php extract($sp);if($soluong>0) {?>
                            <div class="cs_isotope_item t_shirt shoes" >
                                <div class="cs_product cs_style_1 cs_bordered " >
                                    <div class="cs_product_thumb position-relative" >
                                        <a href="?act=chitietsp&id=<?= $id?>" data-aos="fade-up" data-aos-delay="200">
                                            <img src="../uploads/<?= $image?>" style=" object-fit: cover; height:400px;" class="w-100" alt="">
                                        </a>
                                        <div class="cs_discount_badge cs_white_bg cs_fs_14 cs_primary_color position-absolute">-25%</div>
                                        <div class="cs_cart_badge position-absolute">
                                            <a href="wishlist.html" class="cs_cart_icon cs_accent_bg cs_white_color">
                                                <i class="fa-regular fa-heart"></i>
                                            </a>
                                            <a href="?act=chitietsp&id=<?= $id?>" class="cs_cart_icon cs_accent_bg cs_white_color">
                                                <i class="fa-regular fa-eye"></i>
                                            </a>
                                        </div>
                                        <a href="cart.html" class="cs_cart_btn cs_accent_bg cs_fs_16 cs_white_color cs_medium position-absolute">Add To Cart</a>
                                    </div>
                                    <div class="cs_product_info text-center">
                                        <h5><a href="?act=chitietsp&id=<?= $id?>"><?= $tensp?></a></h5>
                                        <div class="mt-5">
                                            <sapn class="cs_product_price cs_fs_18 cs_accent_color mb-0 cs_medium new-price"><?= number_format($giakm, 0, ',', '.')?>₫</span>
                                            <span class="cs_product_price cs_fs_18 cs_accent_color mb-0 cs_medium  mb-0 cs_medium old-price"><?= number_format($giasp, 0, ',', '.')?>₫</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } endforeach; ?>
            </div>
    </div>
        