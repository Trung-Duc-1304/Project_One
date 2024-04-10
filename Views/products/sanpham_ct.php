<?php
if (is_array($pro_ct)) {
    extract($pro_ct);
    $gia_formatted = number_format($giasp, 0, ',', '.');
}

if (is_array($list_bt)) {
    extract($list_bt);
    // debug($list_bt, $pro_ct);
}
?>

<!-- Start single product -->
<section>
    <div class="cs_height_35 cs_height_lg_35"></div>
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="cs_single_product_breadcrumb breadcrumb">
                <li class="breadcrumb-item"><a href="?act=index">Trang Chủ</a></li>
                <li class="breadcrumb-item"><a href="?act=products">Sản Phẩm</a></li>
                <li class="breadcrumb-item active"><?= $tensp ?></li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-xl-7">
                <div class="row">
                    <div class="col-9">
                        <div class="cs_single_product_thumb slick-slider">
                            <div class="cs_single_product_thumb_item rounded-3 ">
                                <img src="uploads/<?= $image ?>" alt="Thumb">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5">
                <div class="cs_single_product_details">
                    <h2 class="cs_fs_37 cs_semibold"><?= $tensp ?></h2>
                    <div class="cs_single_product_review">
                        <div class="cs_rating_container">
                            <div class="cs_rating cs_size_sm" data-rating="5">
                                <div class="cs_rating_percentage"></div>
                            </div>
                        </div>
                        <!-- <span>(5)</span> -->
                    </div>
                    <h4 class="cs_single_product_price cs_fs_21 cs_primary_color cs_semibold">Giá Sản Phẩm: <?= $gia_formatted ?> VND</h4>
                    <hr>
                    <div class="cs_single_product_details_text">
                        <p class="mb-0"><?= $mota ?></p>
                    </div>
                    <div class="cs_single_product_size">
                        <h4 class="cs_fs_16 cs_medium">size</h4>
                        <ul class="cs_size_filter_list cs_mp0">
                            <?php foreach ($list_bt as $sizes) :
                                extract($sizes);
                            ?>
                                <li>
                                    <input type="radio" name="size_<?= $pro_id ?>" value="<?= $size ?>">
                                    <span><?= $size ?></span>
                                </li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                    <div class="cs_single_product_color ">
                        <h4 class="cs_fs_16 cs_medium">Màu áo</h4>
                        <ul class="cs_color_filter_list cs_type_1 cs_mp0">
                            <?php foreach ($list_bt as $sizes) :
                                extract($sizes);
                            ?>
                                <?php
                                switch ($color) {
                                    case 'Trắng':
                                        echo "<li>
                                            <div class='cs_color_filter'>
                                                <input type='radio' name='color_$pro_id' value='$color'>
                                                <span class='cs_color_filter_circle cs_white_bg'></span>
                                                <span class='cs_color_text'>$color</span>
                                            </div>
                                            </li>";
                                        break;
                                    case 'Xanh':
                                        echo "<li>
                                                <div class='cs_color_filter'>
                                                <input type='radio'name='color_$pro_id' value='$color'>
                                                    <span class='cs_color_filter_circle bg-primary'></span>
                                                    <span class='cs_color_text'>$color</span>
                                                </div>
                                              </li>";
                                        break;
                                    case 'Đen':
                                        echo "<li>
                                                <div class='cs_color_filter'>
                                                <input type='radio'name='color_$pro_id' value='$color'>
                                                    <span class='cs_color_filter_circle bg-black'></span>
                                                    <span class='cs_color_text'>$color</span>
                                                </div>
                                              </li>";
                                        break;
                                    case 'Vàng':
                                        echo "<li>
                                                    <div class='cs_color_filter'>
                                                    <input type='radio'name='color_$pro_id' value='$color'>
                                                        <span class='cs_color_filter_circle bg-warning'></span>
                                                        <span class='cs_color_text'>$color</span>
                                                    </div>
                                                  </li>";
                                        break;
                                    default:
                                        echo "Trạng thái không xác định<br>";
                                        break;
                                }
                                ?>
                            <?php endforeach ?>
                        </ul>
                    </div>
                    <div class="cs_action_btns">
                        <div class="cs_quantity">
                            <button class="cs_quantity_btn cs_increment"><i class="fa-solid fa-angle-up"></i></button>
                            <span class="cs_quantity_input">1</span>
                            <button class="cs_quantity_btn cs_decrement"><i class="fa-solid fa-angle-down"></i></button>
                        </div>
                        <?php if (!isset($_SESSION['user'])) {
                            echo " <a href='?act=login' type='submit' class='add-to-cart btn btn-primary' > Thêm vào giỏ hàng</a>";
                             // Dừng mã PHP
                        }else{ ?>
                        <button type="submit" class="add-to-cart btn btn-primary" data-product-id="<?= $pro_id ?>" data-user-id="<?= $_SESSION['user']['id'] ?>" data-price-sp="<?= $giasp ?>" style="padding: 10px;">Thêm Vào Giỏ Hàng</button>
                        <?php }?>
                    </div>
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
                    <h6><?= $mota ?></h6>
                    <hr class="mt-4">
                </div>
                <div class="cs_tab active" id="tab_4">
                    <div id="loadbinhluan">
                        <?php extract($dembl); ?>
                        <?php
                        foreach ($list_bl as $bl) {
                            extract($bl);
                            echo '<ul class="cs_client_review_list cs_mp0">
                                        <li>
                                            <div class="cs_client_review">
                                                <div class="cs_review_media">
                                                    <div class="cs_review_media_thumb"><img src="assets/client/img/grid.png" alt="Avatar"></div>
                                                    <div class="cs_review_media_right">
                                                        <div class="cs_rating_container">
                                                            <div class="cs_rating cs_size_sm" data-rating="0">
                                                                <div class="cs_rating_percentage"></div>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0 cs_primary_color cs_semibold">' . $hovaten . '</p>
                                                    </div>
                                                    <p class="cs_review_posted_by">' . $ngaybinhluan . '</p>
                                                </div>
                                                <p class="cs_review_text">' . $noidung . '</p>
                                            </div>
                                        </li>
                                    </ul>';
                        }
                        ?>
                    </div>
                    <div class="cs_height_20 cs_height_lg_20"></div>

                    <?php if (isset($_SESSION['user'])) : ?>
                        <?php extract($sanpham); ?>
                        <div class="cs_input_rating_wrap">
                            <p>Đánh giá của bạn *</p>
                        </div>
                        <div class="cs_height_20 cs_height_lg_22"></div>
                        <form class="row cs_review_form cs_gap_y_24">
                            <div class="col-lg-12">
                                <textarea rows="3" class="cs_form_field" placeholder="Write your review *" id="noidung"></textarea>
                                <p id="binhluanErr" style="color:red;"><?= (isset($noidungErr) && $noidungErr != '') ? $noidungErr : ''; ?></p>
                            </div>
                            <div class="col-lg-12">
                                <input id="ngaybinhluan" type="hidden" value="<?= date('d-m-Y'); ?>">
                                <input type="button" value="Gửi" class="cs_btn cs_style_1 cs_fs_16 cs_medium" onclick="binhluanjs(<?= $id ?>,'<?= $_SESSION['user']['hovaten'] ?>')">
                            </div>
                        </form>
                    <?php else : ?>
                        <h4>Vui lòng <a href="?act=login" style="color:red;">đăng nhập</a> để bình luận!</h4>
                        <hr>
                    <?php endif; ?>

                </div>

            </div>
            <!-- .cs_tabs -->
        </div>
    </div>
</section>
<!-- End single product -->
<!-- Start new item store -->
<section class="cs_slider container-fluid position-relative">
    <div class="cs_height_120 cs_height_lg_70"></div>
    <div class="container">
        <div class="cs_section_heading cs_style_1">
            <div class="cs_section_heading_in">
                <h2 class="cs_section_title cs_fs_50 cs_bold cs_fs_48 cs_semibold mb-0">Những sảm phẩm tương tự</h2>
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
    <div class="cs_slider_container container" data-autoplay="0" data-loop="1" data-speed="600" data-center="0" data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="2" data-md-slides="2" data-lg-slides="3" data-add-slides="4">
        <div class="cs_slider_wrapper">
            <?php foreach ($splq as $sp) : ?>
                <?php extract($sp);?>
                    <div class="slick_slide_in">
                        <div class="cs_product cs_style_1">
                            <div class="cs_product_thumb position-relative">
                                <a href="?act=sanpham_ct&id=<?= $id ?>">
                                    <img src="./uploads/<?= $image ?>" style=" object-fit: cover; height:400px;" class="w-100" alt="">
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
                                <h3 class="cs_product_title cs_fs_21 cs_medium">
                                    <a href="?act=sanpham_ct&id=<?= $id ?>">Pure black cotton men T-shirt</a>
                                </h3>
                                <div class="mt-5">
                                    <span class="cs_product_price cs_fs_18 cs_accent_color mb-0 cs_medium  mb-0 cs_medium old-price"><?= number_format($giasp, 0, ',', '.') ?>₫</span>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php  endforeach; ?>

        </div>
    </div>
    <div class="cs_height_134 cs_height_lg_80"></div>
</section>
<script>
    document.addEventListener('DOMContentLoaded', function() {
    const incrementBtn = document.querySelector('.cs_increment');
    const quantityInput = document.querySelector('.cs_quantity_input');

    incrementBtn.addEventListener('click', function() {
        let currentQuantity = parseInt(quantityInput.textContent);
        quantityInput.textContent = currentQuantity + 1;
    });


});

document.addEventListener('DOMContentLoaded', function() {
    const decrementBtn = document.querySelector('.cs_decrement');
    const quantityInput = document.querySelector('.cs_quantity_input ');

    decrementBtn.addEventListener('click', function() {
        let currentValue = parseInt(quantityInput.textContent);
        if (currentValue > 1) {
            quantityInput.textContent = currentValue - 1;
        }
    });
});
</script>