<?php
if (is_array($list_order_one)) {
    extract($list_order_one);
}
?>
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4">
        <span class="text-muted fw-light">Đơn Hàng /</span><span> Cập Nhật Đơn Hàng</span>
    </h4>

    <div class="app-ecommerce">
        <form action="?act=update_orders" method="post">
            <!-- Add Product -->
            <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">

                <div class="d-flex flex-column justify-content-center">
                    <h4 class="mb-1 mt-3">Cập Nhật Đơn Hàng</h4>
                </div>
                <div class="d-flex align-content-center flex-wrap gap-3">
                    <input type="reset" class="btn btn-label-secondary" value="Nhập Lại">
                    <a href="?act=list_order" class="btn btn-label-primary"> Danh Sách</a>
                    <input type="submit" class="btn btn-primary" value="Xác Nhận" name="submit">
                </div>
            </div>

            <div class="row">

                <!-- First column-->
                <div class="col-12 col-lg-12">
                    <!-- Product Information -->
                    <div class="card mb-4">

                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label" for="ecommerce-product-name">Trạng Thái</label>
                                <select name="trangthai" id="" class="form-select w-25">
                                    <option value="0">Chờ xác nhận</option>
                                    <option value="1">Chờ lấy hàng</option>
                                    <option value="2">Đang giao hàng</option>
                                    <option value="3">Đã giao</option>
                                    <option value="-1">Đã hủy</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Second column -->
            </div>
            <input type="hidden" name="id" value="<?= $Bill_ID ?>">
            <input type="hidden" name="Userid" value="<?= $User_ID ?>">
            <input type="hidden" name="Time_set" value="<?= $Time_set ?>">
            <input type="hidden" name="idbillct" value="<?= $idbillct ?>">
        </form>
    </div>
</div>
<!-- / Content -->