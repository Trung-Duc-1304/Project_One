<div class="login-register-area pb-100 pt-95">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 offset-lg-2">
                <div class="login-register-wrapper">
                    <div class="login-register-tab-list nav">
                        <a class="active" data-bs-toggle="tab" href="#lg1">
                            <h4> Đăng nhập </h4>
                        </a>
                    </div>
                    <div id="lg1" class="tab-pane active">
                        <div class="login-form-container">
                            <div class="login-register-form">
                                <form action="?act=dangnhap" method="post">
                                    <input type="text" name="username" placeholder="Username" value="<?= isset($user) ? ($user) : '' ?>">
                                    <p style="color:red;"><?=$tendangnhapErr?></p>
                                    <input type="password" name="password" placeholder="Password" value="<?= isset($pass) ? ($pass) : '' ?>">
                                    <p style="color:red;"><?=$tkErr?></p>
                                    <div class="login-toggle-btn">
                                        <a href="?act=quenmatkhau">Quên mật khẩu?</a>
                                    </div>
                                    <div class="button-box btn-hover">
                                        <button type="submit" name="dangnhap">Đăng nhập</button>
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