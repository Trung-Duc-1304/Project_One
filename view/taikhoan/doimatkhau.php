<div class="login-register-area pb-100 pt-95">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 offset-lg-2">
                <div class="login-register-wrapper">
                    <div class="login-register-tab-list nav">
                        <a class="active" data-bs-toggle="tab" href="#lg1">
                            <h4> Đổi mật khẩu </h4>
                        </a>
                    </div>
                    <div class="tab-content">
                        <div id="lg1" class="tab-pane active">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    <form action="?act=doimatkhau" method="post">
                                        <input type="text" name="matkhaucu" placeholder="Nhập mật khẩu cũ..." value="<?= isset($matkhaucu) ? ($matkhaucu) : '' ?>">
                                        <p style="color:red;"><?=$matkhaucuErr?></p>
                                        <input type="password" name="matkhaumoi" placeholder="Nhập mật khẩu mới..." value="<?= isset($matkhaumoi) ? ($matkhaumoi) : '' ?>">
                                        <p style="color:red;"><?=$matkhaumoiErr?></p>
                                        <input type="password" name="nhaplaimatkhaumoi" placeholder="Nhập lại mật khẩu mới...">
                                        <p style="color:red;"><?=$nhaplaimatkhaumoiErr?></p>
                                        <div class="button-box btn-hover">
                                            <button type="submit" name="doimatkhau">Đồng ý</button>
                                            <a href="?act=thongtintk"><button type="button">Quay lại</button></a>
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