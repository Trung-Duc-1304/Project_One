<!-- Start Cart Page Heading -->
<section>
    <div class="container">
        <div class="cs_height_80 cs_height_lg_60"></div>
        <div class="cs_shop_page_heading text-center">
            <h1 class="cs_fs_50 cs_bold">Shopping Cart</h1>
            <div class="cs_shop_breadcamp cs_medium">
                <a href="index.html">Home</a>
                <svg width="17" height="8" viewBox="0 0 17 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16.3536 4.35355C16.5488 4.15829 16.5488 3.84171 16.3536 3.64645L13.1716 0.464467C12.9763 0.269205 12.6597 0.269205 12.4645 0.464467C12.2692 0.659729 12.2692 0.976312 12.4645 1.17157L15.2929 4L12.4645 6.82843C12.2692 7.02369 12.2692 7.34027 12.4645 7.53553C12.6597 7.7308 12.9763 7.7308 13.1716 7.53554L16.3536 4.35355ZM-4.37114e-08 4.5L16 4.5L16 3.5L4.37114e-08 3.5L-4.37114e-08 4.5Z" fill="#5E5E5E" />
                </svg>
                <span>Cart</span>
            </div>
        </div>
        <div class="cs_height_80 cs_height_lg_60"></div>
    </div>
</section>
<!-- End Cart Page Heading -->
<!-- Start Cart -->
<div class="container">
    <div class="row">
        <div class="col-xl-8">
            <div class="table-responsive">
                <table class="cs_cart_table">
                    <thead>
                        <tr>
                            <th>Tên Sản Phẩm</th>
                            <th>Giá</th>
                            <th>Size</th>
                            <th>Màu</th>
                            <th>Số Lượng</th>
                            <th>Tổng</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($list_cart_user as $cart) :
                            extract($cart) ?>
                            <tr>
                                <td>
                                    <div class="cs_cart_table_media rounded-4 ">
                                        <img class="rounded-4" src="./uploads/<?= $image ?>" alt="Thumb">
                                        <h3><?= $tensp ?></h3>
                                    </div>
                                </td>
                                <td><?= number_format($thanhtien, 0, ',', '.') ?> VNĐ</td>
                                <td><?= $size ?></td>
                                <td><?= $color ?></td>
                                <td>
                                    <div class="cs_quantity">
                                        <button class="cs_quantity_btn cs_increment"><i class="fa-solid fa-angle-up"></i></button>
                                        <span class="cs_quantity_input"><?= $soluong ?></span>
                                        <button class="cs_quantity_btn cs_decrement"><i class="fa-solid fa-angle-down"></i></button>
                                    </div>
                                </td>
                                <td><?= number_format($thanhtien, 0, ',', '.') ?> VNĐ</td>
                                <td class="text-center">
                                    <button class="cs_cart-table-close"><i class="fa-solid fa-xmark"></i></button>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
            <div class="cs_height_30 cs_height_lg_30"></div>
        </div>
        <div class="col-xl-4">
            <div class="cs_shop-side-spacing">
                <div class="cs_shop-card">
                    <!-- <h2 class="cs_fs_21 cs_medium">Coupon Code</h2>
                        <form action="#" class="cs_coupon-doce-form">
                            <input type="text" placeholder="Coupon Code">
                            <button class="cs_product_btn cs_color1 cs_semi_bold">Apply</button>
                        </form> -->
                    <div class="cs_height_30 cs_height_lg_30"></div>
                    <h2 class="cs_fs_21 cs_medium">Tổng số tiền thanh toán</h2>
                    <table class="cs_medium">
                        <tbody>
                            <?php
                            foreach ($sum_cart_user as $cart) :
                                extract($cart)
                            ?>
                            <?php endforeach ?>
                            <tr>
                                <td>Đơn giá</td>
                                <td class="text-end"><?= number_format($total_amount, 0, ',', '.') ?> VNĐ</td>
                            </tr>
                            <tr>
                                <td>Tổng cộng</td>
                                <td class="text-end"><?= number_format($total_amount, 0, ',', '.') ?> VNĐ</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="cs_height_30 cs_height_lg_30"></div>
                    <a href="checkout.html" class="cs_btn cs_style_1 cs_fs_16 cs_medium w-100">Procced To Checkout</a>
                </div>
                <div class="cs_height_30 cs_height_lg_30"></div>
            </div>
        </div>
    </div>
</div>
<!-- End Cart -->
<div class="cs_height_110 cs_height_lg_50"></div>
<hr>
<!-- Start footer -->