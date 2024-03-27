<div class="login-register-area pb-100 pt-95 mt-5 mb-5" >
    <div class="container">
        <div class="row justify-content-center login-container">
            <div class="col-md-6 col-lg-5">
                <div class="shadow-lg p-3 mb-5 bg-body-tertiary rounded">
                    <div class="card-header text-center">
                        <h3 class="text-danger mb-3">Đổi mật khẩu</h3>
                    </div>
                    <form action="?act=doimatkhau" method="post">
                        <div class="mb-5">
                            <input type="text" class="form-control"  name="matkhaucu" placeholder="Nhập mật khẩu cũ..." value="<?= isset($user) ? ($user) : '' ?>">
                            <p style="color:red;"><?=$matkhaucuErr?></p>
                        </div>
                        <div class="mb-5">
                            <input type="password" class="form-control" name="matkhaumoi" placeholder="Nhập mật khẩu mới..." value="<?= isset($pass) ? ($pass) : '' ?>">
                            <p style="color:red;"><?=$matkhaumoiErr?></p>
                        </div>
                        <div class="mb-2">
                            <input type="password" class="form-control" name="nhaplaimatkhaumoi" placeholder="Nhập lại mật khẩu mới..." value="<?= isset($pass) ? ($pass) : '' ?>">
                            <p style="color:red;"><?=$nhaplaimatkhaumoiErr?></p>
                        </div>
                        <div class="button-box btn-hover " style="margin-top: 50px;">
                            <button type="submit" name="doimatkhau" class="btn btn-danger btn-lg">Đồng ý</button>
                            <a href="?act=thongtintk"><button type="button" class="btn btn-warning btn-lg">Quay lại</button></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>