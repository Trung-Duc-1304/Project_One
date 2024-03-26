<div class="login-register-area pb-100 pt-95 mt-5 mb-5" >
    <div class="container">
        <div class="row justify-content-center login-container">
            <div class="col-md-6 col-lg-5">
                <div class="shadow-lg p-3 mb-5 bg-body-tertiary rounded">
                    <div class="card-header text-center">
                        <h3 class="text-danger mb-3">Đăng Nhập</h3>
                    </div>
                    <form action="?act=dangnhap" method="post">
                        <div class="mb-5">
                            <input type="text" class="form-control"  name="username" placeholder="Tên đăng nhập" value="<?= isset($user) ? ($user) : '' ?>">
                            <p style="color:red;"><?=$tendangnhapErr?></p>
                        </div>
                        <div class="mb-2">
                            <input type="password" class="form-control" name="password" placeholder="Mật khẩu" value="<?= isset($pass) ? ($pass) : '' ?>">
                            <p style="color:red;"><?=$tkErr?></p>
                        </div>
                        <div class="mb-3 float-end">
                            <a href="?act=quenmatkhau">Quên mật khẩu?</a>
                        </div>
                        <div class="button-box btn-hover " style="margin-top: 50px;">
                            <button type="submit" name="dangnhap" class="btn btn-danger btn-lg">Đăng nhập</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
