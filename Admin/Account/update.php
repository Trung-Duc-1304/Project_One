<?php
if (is_array($load_oneAccount)) {
    extract($load_oneAccount);
}
?><!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4">
        <span class="text-muted fw-light">Tài Khoản /</span><span> Cập Nhật Tài Khoản</span>
    </h4>

    <div class="app-ecommerce">
        <form action="index.php?act=update_account" method="post" enctype="multipart/form-data">
            <!-- Add Product -->
            <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">

                <div class="d-flex flex-column justify-content-center">
                    <h4 class="mb-1 mt-3">Cập Nhật Tài Khoản</h4>
                </div>
                <div class="d-flex align-content-center flex-wrap gap-3">
                    <input type="reset" class="btn btn-label-secondary" value="Nhập Lại">
                    <a href="index.php?act=list_account" class="btn btn-label-primary"> Danh Sách</a>
                    <input type="submit" class="btn btn-primary" name="capnhat" value="Xác Nhận">
                </div>
            </div>

            <div class="row">

                <!-- First column-->
                <div class="col-12 col-lg-12">
                    <!-- Product Information -->
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5 class="card-tile mb-0">Thông Tin Tài Khoản</h5>
                        </div>
                        <div class="card-body">
                            <input type="hidden" name="id" value="<?= $id ?>">
                            <div class="row mb-2">
                                <div class="col-6"><label class="form-label" for="ecommerce-product-sl">Quyền hạn</label>
                                    <select name="role" id="" class="form-control">
                                        <?php if ($role == "Admin") : ?>
                                            <option value="Admin" selected>Admin</option>
                                        <?php else : ?>
                                            <option value="Admin">Admin</option>
                                        <?php endif; ?>

                                        <?php if ($role == "Thành Viên") : ?>
                                            <option value="Thành Viên" selected>Thành Viên</option>
                                        <?php else : ?>
                                            <option value="Thành Viên">Thành Viên</option>
                                        <?php endif; ?>

                                        <?php if ($role == "Nhân Viên") : ?>
                                            <option value="Nhân Viên" selected>Nhân Viên</option>
                                        <?php else : ?>
                                            <option value="Nhân Viên">Nhân Viên</option>
                                        <?php endif; ?>

                                    </select>
                                </div>

                                <div class="col-6"><label class="form-label" for="ecommerce-product-sl">Trạng Thái</label>
                                    <select name="trangthai" id="" class="form-control">
                                        <?php if ($trangthai == "Chưa Kích Hoạt") : ?>
                                            <option value="Chưa Kích Hoạt" selected>Chưa Kích Hoạt</option>
                                        <?php else : ?>
                                            <option value="Chưa Kích Hoạt">Chưa Kích Hoạt</option>
                                        <?php endif; ?>

                                        <?php if ($trangthai == "Kích Hoạt") : ?>
                                            <option value="Kích Hoạt" selected>Kích Hoạt</option>
                                        <?php else : ?>
                                            <option value="Kích Hoạt">Kích Hoạt</option>
                                        <?php endif; ?>

                                    </select>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col"><label class="form-label" for="ecommerce-product-Tên sản phẩm">Họ và tên</label>
                                    <input type="text" class="form-control" id="ecommerce-product-Tên sản phẩm" placeholder="họ và tên" name="hovaten" value="<?= $hovaten ?>" autofocus>
                                </div>
                                <div class="col"><label class="form-label" for="ecommerce-product-barcode">Tên đăng nhập</label>
                                    <input type="text" class="form-control" id="ecommerce-product-email" placeholder="tên đăng nhập" name="tendangnhap" value="<?= $tendangnhap ?>">
                                </div>

                            </div>

                            <div class="row mb-2">
                                <div class="col"><label class="form-label" for="ecommerce-product-sl">Mật Khẩu</label>
                                    <input type="text" class="form-control" id="ecommerce-product-sl" placeholder="mật khẩu" name="matkhau" value="<?= $matkhau ?>">
                                </div>
                                <div class="col"><label class="form-label" for="ecommerce-product-km">Email</label>
                                    <input type="email" class="form-control" id="ecommerce-product-km" placeholder="email" name="email" value="<?= $email ?>">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- /Second column -->
            </div>
        </form>
    </div>
</div>
<!-- / Content -->