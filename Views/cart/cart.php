<!-- Start Cart Page Heading -->
<section>
    <div class="container">
        <div class="cs_height_80 cs_height_lg_60"></div>
        <div class="cs_shop_page_heading text-center">
            <h1 class="cs_fs_50 cs_bold">Giỏ Hàng</h1>
            <div class="cs_shop_breadcamp cs_medium">
                <a href="?act=home">Trang Chủ</a>
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
                        <?php ?>
                        <?php foreach ($list_cart_user as $cart) : ?>
                            <tr data-product-id="<?= $cart['id'] ?>">
                                <td>
                                    <div class="cs_cart_table_media rounded-4 ">
                                        <img class="rounded-4" src="./uploads/<?= $cart['image'] ?>" alt="Thumb">
                                        <h3><?= $cart['tensp'] ?></h3>
                                    </div>
                                </td>
                                <td class="unit-price"><?= number_format($cart['giasp'], 0, ',', '.') ?> VNĐ</td>
                                <td><?= $cart['size'] ?></td>
                                <td><?= $cart['color'] ?></td>
                                <td>
                                    <div class="cs_quantity">
                                        <a href="?act=tangsl&soluong=<?=$cart['soluong']?>&id=<?= $cart['id']?>&product_id=<?=$cart['product_id']?>&tang"><button class="cs_quantity_btn cs_increment"><i class="fa-solid fa-angle-up"></i></button></a>
                                        <span class="cs_quantity_input"><?= $cart['soluong'] ?></span>
                                        <a href="?act=tangsl&soluong=<?=$cart['soluong']?>&id=<?= $cart['id']?>&product_id=<?=$cart['product_id']?>&giam"><button class="cs_quantity_btn cs_decrement"><i class="fa-solid fa-angle-down"></i></button></a>
                                    </div>
                                </td>
                                <td class="total-price"><?= number_format($cart['soluong'] * $cart['giasp'], 0, ',', '.') ?> VNĐ</td>
                                <td class="text-center">
                                    <a href="?act=delete_cart&user_id=<?= $_SESSION['user']['id'] ?>&id=<?= $cart['id'] ?>">
                                        <button onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" class="cs_cart-table-close"><i class="fa-solid fa-xmark"></i></button>
                                    </a>
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
                    <div class="cs_height_30 cs_height_lg_30"></div>
                    <h2 class="cs_fs_21 cs_medium">Tổng số tiền thanh toán</h2>
                    <table class="cs_medium">
                        <tbody>
                            <tr>
                                <td>Đơn giá</td>
                                <td class="text-end total-amount"><?= number_format($total_amount, 0, ',', '.') ?> VNĐ</td>
                            </tr>
                            <tr>
                                <td>Tổng cộng</td>
                                <td class="text-end total-amount"><?= number_format($total_amount, 0, ',', '.') ?> VNĐ</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="cs_height_30 cs_height_lg_30"></div>
                    <a href="?act=checkout_cart_user&id=<?= $_SESSION['user']['id'] ?>" class="cs_btn cs_style_1 cs_fs_16 cs_medium w-100">Tiến hành thanh toán</a>
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
