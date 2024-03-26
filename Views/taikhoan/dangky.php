<div class="login-register-area pb-100 pt-95 mt-5 mb-5">
    <div class="container">
        <div class="row justify-content-center login-container">
            <div class="col-md-6 col-lg-5">
                <div class="shadow-lg p-3 mb-5 bg-body-tertiary rounded">
                    <div class="card-header text-center">
                        <h3 class="text-danger mb-3">Đăng ký</h3>
                    </div>
                    <form action="?act=dangky" method="post">
                        <div class="mb-5">
                            <input type="text" class="form-control" name="hovaten" placeholder="Họ và Tên" value="<?= isset($hovaten) ? ($hovaten) : '' ?>">
                            <p style="color:red;"><?=$hovatenErr?></p>
                        </div>
                        <div class="mb-5">
                            <input type="text" class="form-control" name="dkyuser"  placeholder="Tên đăng nhập" value="<?= isset($dkyuser) ? ($dkyuser) : '' ?>">
                            <p style="color:red;"><?=$tendangnhapErr?></p>
                        </div>
                        <div class="mb-5">
                            <input type="password" class="form-control" name="dkypass" placeholder="Mật khẩu" value="<?= isset($dkypass) ? ($dkypass) : '' ?>">
                            <p style="color:red;"><?=$matkhauErr?></p>
                        </div>
                        <div class="">
                            <input type="email" class="form-control" name="dkyemail" placeholder="Email" value="<?= isset($dkyemail) ? ($dkyemail) : '' ?>">
                            <p style="color:red;"><?=$emailErr?></p>
                        </div>
                        <div class="mb-3">
                            <span>Bạn đã có tài khoản? <a href="?act=dangnhap" style="color:red;">Đăng nhập ngay</a></span>
                        </div>
                        <div class="button-box btn-hover ">
                            <button type="submit" name="dangky" class="btn btn-danger btn-lg">Đăng ký</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
