<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Cập nhật thông tin</h1>
</div>
<div class="card shadow mb-4">
    <div class="card-body">
        <form action="?act=suadh" method="post" class="form">
            <input type="hidden" name="id" value="<?=$id?>">
            <div class="mb-4">
                <label for="" class="form-label">Mã đơn hàng</label>
                <input type="text" name="maloai" id="" class="form-control" value="TB-<?=$id?>" disabled>
            </div>
            <div class="mb-3">
                <?php foreach ($ctdh as $ct) : ?>
                    <img src="../uploads/<?= $ct['image'];?>" alt="" height="60px">
                    <span style="margin-left:15px;"><?= $ct['tensp'];?></span>
                    <span style="margin-left:80px;">Số lượng x <?= $ct['soluong'];?></span>
                    <span style="margin-left:100px;">Thành tiền: <?= number_format($ct['thanhtien'],0,',','.');?>đ</span>
                    <hr>
                <?php endforeach; ?>  
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="" class="form-label">Họ và tên</label>
                    <input type="text" name="hovatennhan" id="" class="form-control" value="<?= $hovatennhan?>" onkeydown="return false">
                </div>
                <div class="col-md-6">
                    <label for="" class="form-label">Số điện thoại</label>
                    <input type="text" name="sodienthoainhan" id="" class="form-control" value="<?= $sodienthoainhan?>" onkeydown="return false">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="" class="form-label">Địa chỉ</label>
                    <input type="text" name="diachinhan" id="" class="form-control" value="<?= $diachinhan?>" onkeydown="return false">
                </div>
                <div class="col-md-6">
                    <label for="" class="form-label">ngày đặt hàng</label>
                    <input type="text" name="ngaydathang" id="" class="form-control" value="<?= $ngaydathang?>" onkeydown="return false">
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-md-12">
                    <label for="sel1">Trạng thái giao hàng</label>
                    <select class="form-control" id="sel1" name="trangthai">
                        <option <?= ($trangthai=="2")?'selected':'' ?> value="2">Đơn hàng mới</option>
                        <option <?= ($trangthai=="3")?'selected':'' ?> value="3">Đang giao</option>
                        <?php if($thanhtoan==1) : ?>
                        <option <?= ($trangthai=="4")?'selected':'' ?> value="4">Đã giao</option>
                        <?php endif; ?>
                    </select>
                </div>
            </div>
            <div>
                <button type="submit" name="submit" class="btn btn-success">Xác nhận</button>
                <a href="?act=listdh"><button type="button" class="btn btn-success">Quay lại</button></a>
            </div>
        </form>
    </div>
</div>


</div>
<!-- /.container-fluid -->