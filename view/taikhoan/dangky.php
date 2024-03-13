<div class="login-register-area pb-100 pt-95">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 offset-lg-2">
                <div class="login-register-wrapper">
                    <div class="login-register-tab-list nav">
                        <a data-bs-toggle="tab" class="active" href="#lg2">
                            <h4> Đăng ký </h4>
                        </a>
                    </div>
                    <div id="lg2" class="tab-pane">
                        <div class="login-form-container">
                            <div class="login-register-form">
                                <form action="?act=dangky" method="post">
                                    <input type="text" name="hovaten" placeholder="Họ và Tên" value="<?= isset($hovaten) ? ($hovaten) : '' ?>">
                                    <p style="color:red;"><?=$hovatenErr?></p>
                                    <input type="text" name="dkyuser" placeholder="Username" value="<?= isset($dkyuser) ? ($dkyuser) : '' ?>">
                                    <p style="color:red;"><?=$tendangnhapErr?></p>
                                    <input type="password" name="dkypass" placeholder="Password" value="<?= isset($dkypass) ? ($dkypass) : '' ?>">
                                    <p style="color:red;"><?=$matkhauErr?></p>
                                    <input name="dkyemail" placeholder="Email" type="email" value="<?= isset($dkyemail) ? ($dkyemail) : '' ?>">
                                    <p style="color:red;"><?=$emailErr?></p>
                                    <span>Bạn đã có tài khoản? <a href="?act=dangnhap" style="color:red;">Đăng nhập ngay</a></span>
                                    <div class="button-box btn-hover mt-3">
                                        <button type="submit" name="dangky">Đăng ký</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>