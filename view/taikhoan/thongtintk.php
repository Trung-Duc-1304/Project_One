<div class="login-register-area pb-100 pt-95">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 offset-lg-2">
                <div class="login-register-wrapper">
                    <div class="login-register-tab-list nav">
                        <a class="active" data-bs-toggle="tab" href="#lg1">
                            <h4> Thông tin tài khoản </h4>
                        </a>
                    </div>
                    <div class="login-form-container">
                        <div class="login-register-form">
                            <?php?>
                            <form action="?act=thongtintk" method="post">
                                <input type="hidden" name="id" value="<?=$_SESSION['user']['id'];?>">
                                <input type="hidden" name="role" value="<?=$_SESSION['user']['role'];?>">
                                <input type="hidden" name="matkhau" value="<?=$_SESSION['user']['matkhau'];?>">

                                <label for="" class="form-label">Tên đăng nhập:</label>
                                <input type="text" name="tendangnhap" value="<?=$_SESSION['user']['tendangnhap'];?>">
                                <p style="color:red;"><?=$tendangnhapErr?></p>

                                <label for="" class="form-label">Họ và tên:</label>
                                <input type="text" name="hovaten" value="<?= isset($hovaten) ? ($hovaten) : $_SESSION['user']['hovaten'];?>">
                                <p style="color:red;"><?=$hovatenErr?></p>

                                <label for="" class="form-label">Số điện thoại:</label>
                                <input type="text" name="sodienthoai" value="<?= isset($sodienthoai) ? ($sodienthoai) : $_SESSION['user']['sodienthoai'];?>">
                                <p style="color:red;"><?=$sodienthoaiErr?></p>

                                <?php $chuoi=$_SESSION['user']['email']; ?>
                                <label for="" class="form-label">Email:</label>
                                <input type="text" value="<?= substr($chuoi, 0, 2) . str_repeat('*', strlen($chuoi) - 2) . substr($chuoi, strpos($chuoi, '@')); ?>">
                                <input type="hidden" name="email" value="<?=$_SESSION['user']['email']?>">

                                <label for="" class="form-label">Địa chỉ:</label>
                                <input type="text" name="diachi" value="<?= isset($diachi) ? ($diachi) : $_SESSION['user']['diachi'];?>">
                                <p style="color:red;"><?=$diachiErr?></p>
                                
                                <div class="login-toggle-btn mb-5">
                                    <a href="?act=quenmatkhau">Quên mật khẩu?</a>
                                    <a href="?act=doimatkhau" style="margin-right:378px;">Đổi mật khẩu</a>
                                </div>
                                <div class="button-box btn-hover">
                                    <button type="submit" name="luu">Lưu</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>