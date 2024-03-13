<div class="checkout-main-area pb-100 pt-100">
    <div class="container">
        <div class="checkout-wrap pt-30">
            <form action="?act=tieptucdathang" method="post">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="billing-info-wrap">
                            <h3>Chi tiết thanh toán</h3>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="billing-info mb-20">
                                        <label>Họ và Tên<abbr class="required" title="required">*</abbr></label>
                                        <input type="text" name="hovaten" value="Đặng Hồng Vinh">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="billing-info mb-20">
                                        <label>Số điện thoại<abbr class="required" title="required">*</abbr></label>
                                        <input type="text" name="sodienthoai" value="0123456789">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="billing-info mb-20">
                                        <label>Địa chỉ<abbr class="required" title="required">*</abbr></label>
                                        <input type="text" name="diachi" value="Trịnh Văn Pô, Nam Từ Liêm, Hà Nội">
                                    </div>
                                </div>
                                <div class="checkout-account mt-25">
                                    <input class="checkout-toggle" type="checkbox" name="diachikhac" value="diachimoi">
                                    <span>Giao hàng tới một địa chỉ khác?</span>
                                </div>
                                <div class="different-address open-toggle mt-30">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="billing-info mb-20">
                                                <label>Họ và Tên<abbr class="required" title="required">*</abbr></label>
                                                <input type="text" name="hovatennhan" value="">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="billing-info mb-20">
                                                <label>Số điện thoại<abbr class="required" title="required">*</abbr></label>
                                                <input type="text" name="sodienthoainhan" value="">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="billing-info mb-20">
                                                <label>Địa chỉ<abbr class="required" title="required">*</abbr></label>
                                                <input type="text" name="diachinhan" value="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="your-order-area">
                            <h3>Đơn hàng của bạn</h3>
                            <div class="your-order-wrap gray-bg-4">
                                <div class="your-order-info-wrap">
                                    <div class="your-order-info">
                                        <ul>
                                            <li>Sản phẩm <span>Tổng cộng</span></li>
                                        </ul>
                                    </div>
                                    <div class="your-order-middle">
                                        <ul>
                                           
                                                <li> <span>150000₫</span></li>
                                        </ul>
                                    </div>
                                    <div class="your-order-info order-shipping">
                                        <ul>
                                            <li>Thông tin <p><?=$_SESSION['user']['diachi']?></p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="your-order-info order-total">
                                        <ul>
                                            <li>Thành tiền <span id="vnp_thanhcong"><?=number_format($tongthanhtoan, 0, ',', '.')?>đ</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="payment-method">
                                    <div class="pay-top sin-payment">
                                        <input id="payment-method-3" class="input-radio" type="radio" value="0" name="phuongthuctt" checked>
                                        <label for="payment-method-3">THANH TOÁN KHI GIAO HÀNG</label>
                                        <!-- <div class="payment-box payment_method_bacs">

                                        </div> -->
                                    </div>
                                    <div class="pay-top sin-payment">
                                        <input id="payment_method_1" class="input-radio" type="radio" value="1" name="phuongthuctt">
                                        <label for="payment_method_1">CHUYỂN KHOẢN</label>
                                    </div>
                                </div>
                            </div>
                            <div class="Place-order btn-hover">
                                <button type="submit" name="dathang" class="btn btn-danger" style="width:100%;">Đặt hàng</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>