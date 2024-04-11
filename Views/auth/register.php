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
                    <form action="?act=register" method="post">
                        <div class="row mb-2">
                            <div class="col">
                                <input type="text" class="form-control" name="hovaten" placeholder="Họ và Tên" value="<?= isset($hovaten) ? ($hovaten) : '' ?>">
                                <p style="color:red;"><?= $hovatenErr ?></p>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" name="dkyuser" placeholder="Tên đăng nhập" value="<?= isset($dkyuser) ? ($dkyuser) : '' ?>">
                                <p style="color:red;"><?= $tendangnhapErr ?></p>
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="dkyemail" placeholder="Email" value="<?= isset($dkyemail) ? ($dkyemail) : '' ?>">
                            <p style="color:red;"><?= $emailErr ?>
                        </div>
                        <div class="">
                            <input type="text" class="form-control" name="dkysdt" placeholder="Số điện thoại" value="<?= isset($dkysdt) ? ($dkysdt) : '' ?>">
                            <p style="color:red;"><?= $sdtErr ?></p>
                        </div>
                        <div class="mb-3 ">
                            <input type="text" class="form-control" name="dkydc" placeholder="địa chỉ" value="<?= isset($dkydc) ? ($dkydc) : '' ?>">
                            <p style="color:red;"><?= $diachiErr ?></p>
                        </div>
                        <!-- <div class="mb-3 col-lg-6">
                            <input type="text" class="form-control" name="dkyuser" placeholder="Tên đăng nhập" value="<?= isset($dkyuser) ? ($dkyuser) : '' ?>">
                            <p style="color:red;"><?= $tendangnhapErr ?></p>
                        </div> -->
                        <div class="mb-3">
                            <input type="password" class="form-control" name="dkypass" placeholder="Mật khẩu" value="<?= isset($dkypass) ? ($dkypass) : '' ?>">
                            <p style="color:red;"><?= $matkhauErr ?></p>
                        </div>
                        <div class="button-box btn-hover text-center">
                            <button type="submit" name="dangky" class="btn btn-primary  btn-lg w-50">Đăng ký</button>
                        </div>
                        <div class="mb-3">
                            <span>Bạn đã có tài khoản? <a href="?act=login" style="color:red;">Đăng nhập ngay</a></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>