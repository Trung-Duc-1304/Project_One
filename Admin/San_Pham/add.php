<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4">
        <span class="text-muted fw-light">Sản Phẩm /</span><span> Thêm Sản Phẩm</span>
    </h4>

    <div class="app-ecommerce">
        <form action="index.php?act=create_sp" method="post" enctype="multipart/form-data">
            <!-- Add Product -->
            <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">

                <div class="d-flex flex-column justify-content-center">
                    <h4 class="mb-1 mt-3">Thêm Sản Phẩm</h4>

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
                            <div class="col-2 mb-2"><label class="form-label" for="ecommerce-product-Tên sản phẩm">Danh Mục</label>
                                <select class="form-control" id="sel1" name="danhmuc">
                                    <?php
                                    foreach ($listdm as $dm) {
                                        extract($dm);
                                        echo '<option value="' . $id . '">' . $tendm . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="row mb-2">
                                <div class="col"><label class="form-label" for="ecommerce-product-Tên sản phẩm">Tên sản phẩm</label>
                                    <input type="text" class="form-control" id="ecommerce-product-Tên sản phẩm" placeholder="Tên sản phẩm" name="tensp" aria-label="Product Tên sản phẩm">
                                    <p class="text-danger"><?= $tenspErr ?></p>
                                </div>
                                <div class="col"><label class="form-label" for="ecommerce-product-barcode">Price</label>
                                    <input type="text" class="form-control" id="ecommerce-product-Price" placeholder="Price" name="giasp" aria-label="Product Price">
                                </div>

                            </div>

                            <!-- <div class="row mb-2">

                                <div class="col"><label class="form-label" for="ecommerce-product-km">Khuyến mãi</label>
                                    <input type="text" class="form-control" id="ecommerce-product-km" placeholder="Khuyến mãi" name="khuyenmai" aria-label="Product khuyenmai">
                                </div>
                            </div> -->
                            <div class="mb-3">
                                <label class="form-label" for="ecommerce-product-name">Mô Tả</label>
                                <textarea name="mota" class="form-control" cols="30" rows="1" placeholder="Mô tả"></textarea>
                                <p class="text-danger"><?= $motaErr ?></p>
                            </div>
                            <div class="card mb-2">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h5 class="mb-0 card-title">Avatar</h5>
                                    <a href="javascript:void(0);" class="fw-medium">Add avatar from URL</a>
                                </div>
                                <style>
                                    #image-preview img {
                                        max-width: 100%;
                                        border-radius: 8px;
                                        box-shadow: 0 0 8px rgba(0, 0, 0, 0.2);
                                    }
                                </style>
                                <div class="card-body text-center">
                                    <div class="dz-message needsclick my-5" id="custom-button">
                                        Kéo và thả hình ảnh của bạn vào đây
                                        <small class="text-muted d-block fs-5 my-2">or</small>
                                        <label class="needsclick btn btn-outline-primary d-inline" for="image-input">Browse
                                            image</label>
                                    </div>
                                    <input type="file" id="image-input" name="image" accept="image/*" onchange="previewImage()" required style="display: none" />
                                    <div id="image-preview"></div>
                                    <p class="text-danger"><?= $imageErr ?></p>
                                </div>
                            </div>
                            <div class="d-flex align-content-center flex-wrap gap-3 ">
                                <input type="reset" class="btn btn-label-secondary" value="Nhập Lại">
                                <a href="index.php?act=list_sp" class="btn btn-label-primary"> Danh Sách</a>
                                <input type="submit" class="btn btn-primary" value="Xác Nhận" name="submit">
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
<script>
    function previewImage() {
        var input = document.getElementById('image-input');
        var preview = document.getElementById('image-preview');
        var customButton = document.getElementById('custom-button');

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                var image = new Image();
                image.src = e.target.result;

                image.onload = function() {
                    preview.innerHTML = '<img src="' + e.target.result + '" alt="Image Preview" class="img-fluid">';
                    customButton.style.display = 'none'; // Hide the "Choose an image" label
                };
            };

            reader.readAsDataURL(input.files[0]);
        } else {
            preview.innerHTML = '';
            customButton.style.display = 'inline-block'; // Show the "Choose an image" label
        }
    }
</script>