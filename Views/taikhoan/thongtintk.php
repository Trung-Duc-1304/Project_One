<div class="login-register-area pb-100 pt-95 mt-5 mb-5">
    <div class="container">
        <div class="row justify-content-center login-container">
            <div class="col-md-6 col-lg-5">
                <div class="shadow-lg p-3 mb-5 bg-body-tertiary rounded">
                    <div class="card-header text-center">
                        <h3 class="text-danger mb-3">Thông tin tài khoản</h3>
                    </div>
                    <form action="?act=thongtintk" method="post">
                        <input type="hidden" name="id" value="<?= $_SESSION['user']['id']; ?>">
                        <input type="hidden" name="role" value="<?= $_SESSION['user']['role']; ?>">
                        <input type="hidden" name="matkhau" value="<?= $_SESSION['user']['matkhau']; ?>">
                        <div class="mb-5">
                            <input type="text" class="form-control" name="hovaten" placeholder="Họ và Tên" value="<?= isset($hovaten) ? ($hovaten) : $_SESSION['user']['hovaten'];?>">
                            <p style="color:red;"><?= $hovatenErr ?></p>
                        </div>
                        <div class="mb-5">
                            <input type="text" class="form-control" name="tendangnhap" placeholder="Tên đăng nhập" value="<?=$_SESSION['user']['tendangnhap'];?>">
                            <p style="color:red;"><?= $tendangnhapErr ?></p>
                        </div>
                        <div class="mb-5">
                            <input type="text" class="form-control" name="sodienthoai" placeholder="Số điện thoại" value="<?= isset($sodienthoai) ? ($sodienthoai) : $_SESSION['user']['sodienthoai'];?>">
                            <p style="color:red;"><?= $sodienthoaiErr ?></p>
                        </div>
                        <div class="mb-5">
                            <?php $chuoi=$_SESSION['user']['email']; ?>
                            <input type="email" class="form-control" name="dkyemail" placeholder="Email" value="<?= substr($chuoi, 0, 2) . str_repeat('*', strlen($chuoi) - 2) . substr($chuoi, strpos($chuoi, '@')); ?>">
                            <input type="hidden" name="email" value="<?=$_SESSION['user']['email']?>">
                            <p style="color:red;"><?= $emailErr ?></p>
                        </div>
                        <div class="">
                            <input type="text" class="form-control" name="diachi" placeholder="Địa chỉ" value="<?= isset($diachi) ? ($diachi) : $_SESSION['user']['diachi'];?>">
                            <p style="color:red;"><?= $diachiErr ?></p>
                        </div>
                        <div class="mb-3">
                             <a href="?act=doimatkhau" style="color:red;">Đổi mật khẩu</a>
                        </div>
                        <div class="button-box btn-hover ">
                            <button type="submit" name="luu" class="btn btn-danger btn-lg">Lưu</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>