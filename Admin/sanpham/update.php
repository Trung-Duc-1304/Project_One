<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Cập nhật thông tin</h1>
</div>
<div class="card shadow mb-4">
    <div class="card-body">
        <form action="?act=updatesp" method="post" enctype="multipart/form-data" class="form">
            <input type="hidden" name="id" value="<?=$id?>">
            <input type="hidden" name="oldImage" value="<?=$oldImage?>">
            <div class="mb-3">
                <label for="tensp" class="form-label">Tên sản phẩm</label>
                <input type="text" class="form-control" id="tensp" name="tensp" placeholder="Nhập tên sản phẩm..." value="<?=$tensp?>">
                <p class="Err mt-1"><?=$tenspErr?></p>
            </div>
            <div class="mb-3">
                <label for="gia" class="form-label">Giá</label>
                <input type="number" class="form-control" id="gia" name="giasp" placeholder="Nhập giá..." value="<?=$giasp?>">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Tải ảnh lên:</label>
                <input type="file" name="image" id="image" class="form-control-file border">
                <p class="Err mt-1"><?=$imageErr?></p>
                <img src="../uploads/<?=$oldImage?>" alt="" height="100px">
            </div>
            <div class="mb-3">
                <label for="soluong" class="form-label">Số lượng</label>
                <input type="number" class="form-control" id="soluong" name="soluong" placeholder="Nhập số lượng..." value="<?=$soluong?>">
            </div>
            <div class="mb-3">
                <label for="khuyenmai" class="form-label">Khuyến mãi (%)</label>
                <input type="number" class="form-control" id="khuyenmai" name="khuyenmai" placeholder="Nhập khuyến mãi..." value="<?=$khuyenmai?>">
            </div>
            <div class="mb-3">
                <label for="mota">Mô tả</label>
                <textarea class="form-control" rows="5" id="mota" name="mota" placeholder="Nhập mô tả..."><?=$mota?></textarea>
            </div>
            <div class="mb-3">
                <label for="sel1">Danh mục</label>
                <select class="form-control" id="sel1" name="danhmuc">
                    <?php
                    foreach ($listdm as $dm) {
                        extract($dm);
                        echo '<option '.($danhmuc?($danhmuc==$id?'selected':''):'').' value="'.$id.'">'.$tendm.'</option>';
                    }
                    ?>
                </select>
            </div>
            <div>
                <button type="submit" name="submit" class="btn btn-success">Xác nhận</button>
                <a href="?act=listsp"><button type="button" class="btn btn-success">Quay lại</button></a>
            </div>
        </form>
    </div>
</div>


</div>
<!-- /.container-fluid -->