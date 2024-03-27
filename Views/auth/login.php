<style>
    .shadows {
        box-shadow: 0 1px 2px 0 rgba(60, 64, 67, 0.1),
            0 2px 6px 2px rgba(60, 64, 67, 0.15);
    }
</style>
<div class="login-register-area pb-100 pt-95 mt-5 mb-5">
    <div class="container">
        <div class="row justify-content-center login-container">
            <div class="col-md-6 col-lg-6">
                <div class="shadows p-3 mb-5 bg-body-tertiary rounded">
                    <div class="logo text-center mb-3">
                        <img src="https://img.logoipsum.com/296.svg" alt="" width="50px">
                    </div>
                    <div class="card-header text-center ">
                        <h3 class="mb-3">𝐟𝐚𝐬𝐡𝐢𝐨𝐧</h3>
                    </div>
                    <form action="?act=login" method="post">
                        <div class="mb-4">
                            <input type="text" class="form-control p-3" name="username" placeholder="Tên đăng nhập" value="<?= isset($user) ? ($user) : '' ?>">
                            <p style="color:red;"><?= $tendangnhapErr ?></p>
                        </div>
                        <div class="mb-4">
                            <input type="password" class="form-control p-3" name="password" placeholder="Mật khẩu" value="<?= isset($pass) ? ($pass) : '' ?>">
                            <p style="color:red;"><?= $tkErr ?></p>
                        </div>
                        <div class="mb-1 text-end">
                            <a href="?act=forgot">Quên mật khẩu?</a>
                        </div>
                        <div class=" text-center">
                            <button type="submit" name="dangnhap" class="btn btn-primary  btn-lg">Đăng nhập</button>
                        </div>
                        <div class="text-start ">
                            Bạn chưa có tài khoản? <a class="text-primary " href="?act=register">Đăng Ký</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>