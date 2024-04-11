<!-- Start Cart Page Heading -->
<section>
    <div class="container">
        <div class="cs_height_80 cs_height_lg_60"></div>
        <div class="cs_shop_page_heading text-center">
            <h1 class="cs_fs_50 cs_bold">Thủ tục thanh toán</h1>
            <div class="cs_shop_breadcamp cs_medium">
                <a href="?act=home">Trang Chủ</a>
                <svg width="17" height="8" viewBox="0 0 17 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16.3536 4.35355C16.5488 4.15829 16.5488 3.84171 16.3536 3.64645L13.1716 0.464467C12.9763 0.269205 12.6597 0.269205 12.4645 0.464467C12.2692 0.659729 12.2692 0.976312 12.4645 1.17157L15.2929 4L12.4645 6.82843C12.2692 7.02369 12.2692 7.34027 12.4645 7.53553C12.6597 7.7308 12.9763 7.7308 13.1716 7.53554L16.3536 4.35355ZM-4.37114e-08 4.5L16 4.5L16 3.5L4.37114e-08 3.5L-4.37114e-08 4.5Z" fill="#5E5E5E" />
                </svg>
                <span>Thủ tục thanh toán</span>
            </div>
        </div>
        <div class="cs_height_80 cs_height_lg_60"></div>
    </div>
</section>
<!-- End Cart Page Heading -->
<!-- Start Checkout -->
<div class="container">
    <div class="row">
        <div class="col-xl-7">
            <div class="cs_height_40 cs_height_lg_40"></div>
            <h2 class="cs_checkout-title cs_fs_28">Chi tiết thanh toán</h2>
            <div class="cs_height_45 cs_height_lg_40"></div>
            <div class="row">
                <div class="col-lg-6">
                    <label class="cs_shop-label">Họ và tên *</label>
                    <input value="<?= $_SESSION['user']['hovaten'] ?>" type="text" class="cs_shop-input">
                    <div data-lastpass-icon-root="true" style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;"></div>
                </div>
                <div class="col-lg-6">
                    <label class="cs_shop-label">Tên đăng nhập*</label>
                    <input value="<?= $_SESSION['user']['tendangnhap'] ?>" type="text" class="cs_shop-input">
                </div>
                <div class="col-lg-12">
                    <label class="cs_shop-label">Địa chỉ nhận hàng*</label>
                    <input value="<?= $_SESSION['user']['diachi'] ?>" type="text" class="cs_shop-input">
                </div>
                <div class="col-lg-6">
                    <label class="cs_shop-label">Điện thoại *</label>
                    <input value="<?= $_SESSION['user']['sodienthoai'] ?>" type="text" class="cs_shop-input">
                </div>
                <div class="col-lg-6">
                    <label class="cs_shop-label">Địa chỉ email*</label>
                    <input value="<?= $_SESSION['user']['email'] ?>" type="text" class="cs_shop-input">
                </div>
            </div>
            <div class="cs_height_45 cs_height_lg_45"></div>
            <h2 class="cs_checkout-title">Thông tin thêm</h2>
            <div class="cs_height_25 cs_height_lg_25"></div>
            <label class="cs_shop-label">Ghi chú đơn hàng (tùy chọn)</label>
            <textarea cols="30" rows="2" class="cs_shop-input"></textarea>
            <div class="cs_height_30 cs_height_lg_30"></div>
        </div>
        <div class="col-xl-5">
            <div class="cs_shop-side-spacing">
                <div class="cs_shop-card">
                    <h2 class="cs_fs_21">Đơn hàng của bạn</h2>
                    <table>
                        <tbody>
                            <tr class="cs_semi_bold">
                                <td>Các sản phẩm</td>
                                <td class="text-end">Giá tiền</td>
                            </tr>
                            <?php foreach ($list_cart_user as $key => $cart) :
                                $_SESSION['cartsp'][$key] = $cart;
                                extract($cart) ?>
                                <tr>
                                    <td><?= $tensp ?> <span style="color:red;">(<?= $soluong ?>)</span> </td>
                                    <td class="text-end"><?= number_format(($soluong * $giasp), 0, ',', '.') ?> VNĐ</td>
                                </tr>
                            <?php endforeach ?>
                            <tr>
                                <?php
                                foreach ($sum_cart_user as $cart) :
                                    extract($cart)
                                ?>
                                <?php endforeach ?>
                                <td class="cs_semi_bold">Tổng phụ</td>
                                <td class="text-end"><?= number_format($total_amount, 0, ',', '.') ?> VNĐ</td>
                            </tr>
                            <tr class="cs_semi_bold">
                                <td>Tổng cộng</td>
                                <td class="text-end"><?= number_format($total_amount, 0, ',', '.') ?> VNĐ</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="cs_height_30 cs_height_lg_30"></div>
                    <!-- <a href="success.html" class="cs_btn cs_style_1 cs_fs_16 cs_medium w-100">Đặt hàng</a> -->
                </div>
                <div class="cs_height_50 cs_height_lg_30"></div>
                <div class="cs_shop-card">
                    <h2 class="cs_fs_21">Sự chi trả</h2>
                    <div class="cs_height_20 cs_height_lg_20"></div>
                    <p class="m-0 cs_payment_text">Dữ liệu cá nhân của bạn sẽ được sử dụng để xử lý đơn đặt hàng, hỗ trợ trải nghiệm của bạn trên trang web này và cho các mục đích khác được mô tả trong của chúng tôi. <a href="#">Chính sách bảo mật.</a>.</p>
                    <div class="cs_height_20 cs_height_lg_20"></div>
                    <!-- <button class="cs_btn cs_style_1 cs_fs_16 cs_medium w-100">Đặt Hàng Ngay</button> -->
                    <div class="d-flex justify-content-center align-items-center">

                        <form method="POST" target="_blank" action="?act=thanhtaanonline">
                            <input type="submit" class="btn btn-primary" name="monny" value="Thanh Toán Tiền Mặt"></input>
                            <input class="btn btn-primary" type="submit" name="payUrl" value="Thanh Toán VN Pay">
                            <input type="hidden" name="price" value="<?= $total_amount ?>">
                            <input type="hidden" name="tensp" value="<?= $tensp ?>">
                            <input type="hidden" name="soluong" value="<?= $soluong ?>">
                            <input type="hidden" name="size" value="<?= $size ?>">
                            <input type="hidden" name="giasp" value="<?= $giasp ?>">
                            <input type="hidden" name="color" value="<?= $color ?>">
                            <input type="hidden" name="user_id" value="<?= $_SESSION['user']['id'] ?>">
                        </form>
                    </div>
                </div>
                <div class="cs_height_30 cs_height_lg_30"></div>
            </div>
        </div>
    </div>
</div>
<!-- End Checkout -->
<script>
    function confirmPayment_vnpay() {
        // Hiển thị thông báo xác nhận
        Swal.fire({
            title: 'Xác nhận thanh toán',
            text: 'Bạn chắc chắn muốn thanh toán chứ?',
            icon: 'question',
            showCancelButton: true,
            confirmButtonText: 'Đồng ý',
            cancelButtonText: 'Hủy bỏ'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = 'view/Vnpay.php';
            }
        });
    }

    function confirmPayment() {
        // Hiển thị thông báo xác nhận
        Swal.fire({
            title: 'Xác nhận thanh toán',
            text: 'Bạn chắc chắn muốn thanh toán chứ?',
            icon: 'question',
            showCancelButton: true,
            confirmButtonText: 'Đồng ý',
            cancelButtonText: 'Hủy bỏ'
        }).then((result) => {
            if (result.isConfirmed) {
                // Nếu người dùng đồng ý, chuyển hướng đến trang thanh toán
                window.location.href = 'view/noti_pay.php';
            }
        });
    }
</script>