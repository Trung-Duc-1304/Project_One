<div class="login-register-area pb-100 pt-95 mt-5 mb-5">
    <div class="container">
        <div class="row justify-content-center login-container">
            <div class="col-md-6 col-lg-5">
                <div class="shadow-lg p-3 mb-5 bg-body-tertiary rounded">
                    <div class="card-header text-center">
                        <h3 class="text-danger mb-3">Quên Mật Khẩu</h3>
                    </div>
                    <form action="?act=quenmatkhau" method="post">
                        <div class="mb-5">
                            <input type="text" class="form-control" name="tendangnhap" placeholder="Tên đăng nhập">
                            <p style="color:red;"><?= $tendangnhapErr ?></p>
                        </div>
                        <div class="mb-2">
                            <input type="email" class="form-control" name="email" placeholder="Email">
                            <p style="color:red;"><?=$emailErr?></p>
                            <p style="color:red;"><?= $thongbao ?></p>
                        </div>
                        <div class="button-box btn-hover " style="margin-top: 50px;">
                            <?php if (isset($_SESSION['user'])) $link = "?act=thongtintk";else $link = "?act=dangnhap" ?>
                            <button type="submit" name="quenmatkhau" class="btn btn-danger btn-lg">Gửi</button>
                            <a href="<?=$link?>"><button type="button" class="btn btn-warning btn-lg">Quay lại</button></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>