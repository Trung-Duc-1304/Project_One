<div class="login-register-area pb-100 pt-95">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 offset-lg-2">
                <div class="login-register-wrapper">
                    <div class="login-register-tab-list nav">
                        <a class="active" data-bs-toggle="tab" href="#lg1">
                            <h4> Quên mật khẩu </h4>
                        </a>
                    </div>
                    <div class="tab-content">
                        <div id="lg1" class="tab-pane active">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    <form action="?act=quenmatkhau" method="post">
                                        <input type="text" name="tendangnhap" placeholder="Tên đăng nhập...">
                                        <input type="email" name="email" placeholder="Email">
                                        <p style="color:red;"><?=$thongbao?></p>
                                        <div class="button-box btn-hover">
                                            <?php if(isset($_SESSION['user'])) $link="?act=thongtintk"; else $link="?act=dangnhap" ?>
                                            <button type="submit" name="quenmatkhau">Gửi</button>
                                            <a href="<?=$link?>"><button type="button">Quay lại</button></a>
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
</div>