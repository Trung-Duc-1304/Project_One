<?php
if (is_array($sp)) {
    extract($sp);
}
?>
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4">
        <span class="text-muted fw-light">Biến Thể /</span><span> Thêm Biến Thể</span>
    </h4>

    <div class="app-ecommerce">
        <form action="index.php?act=create_bt&id=<?= $id ?>" method="post">
            <!-- Add Product -->
            <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">

                <div class="d-flex flex-column justify-content-center">
                    <h4 class="mb-1 mt-3">Thêm Biến Thể</h4>
                    <input type="hidden" name="id_sp" value="<?= $id ?>">
                </div>
                <div class="d-flex align-content-center flex-wrap gap-3">
                    <input type="reset" class="btn btn-label-secondary" value="Nhập Lại">
                    <a href="index.php?act=list_bt&id=<?= $id ?>" class="btn btn-label-primary"> Danh Sách</a>
                    <input type="submit" class="btn btn-primary" value="Xác Nhận" name="capnhat">
                </div>
            </div>

            <div class="row">

                <!-- First column-->
                <div class="col-12 col-lg-12">
                    <!-- Product Information -->
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5 class="card-tile mb-0">Thông Tin Sản Phẩm</h5>
                        </div>
                        <div class="card-body">
                            <div class="row mb-2">
                                <div class="col"><label class="form-label" for="ecommerce-product-Tên sản phẩm">Tên sản phẩm</label>
                                    <input type="text" class="form-control" id="ecommerce-product-Tên sản phẩm" placeholder="Tên sản phẩm" name="tensp" aria-label="Product Tên sản phẩm" value="<?= $tensp ?>" disabled>
                                </div>
                                <div class="col mb-2"><label class="form-label" for="ecommerce-product-Tên sản phẩm">Size</label>
                                    <select class="form-control" id="size" name="size">
                                        <option value="S">Size S</option>
                                        <option value="M">Size M</option>
                                        <option value="L">Size L</option>
                                        <option value="XL">Size XL</option>
                                    </select>
                                </div>

                            </div>

                            <div class="row mb-2">
                                <div class="col"><label class="form-label" for="ecommerce-product-km">Màu</label>
                                    <select class="form-control" id="size" name="color">
                                        <option value="Trắng">Màu Trắng</option>
                                        <option value="Đen">Màu Đen</option>
                                        <option value="Xanh">Màu Xanh</option>
                                        <option value="Vàng">Màu Vàng</option>
                                    </select>
                                </div>
                                <div class="col"><label class="form-label" for="ecommerce-product-sl">Số Lượng</label>
                                    <input type="number" class="form-control" id="ecommerce-product-sl" placeholder="Số lương" min="1" name="soLuong" aria-label="Product soluong">
                                    <p class="text-danger"><?= $soluongErr  ?></p>
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