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
                    <form action="?act=forgot" method="post">
                        <div class="mb-4">
                            <input type="text" class="form-control p-3" name="email" placeholder="Email">
                            <p style="color:red;"><?php
                                                    if (isset($Thongbao) && ($Thongbao != ""))
                                                        echo $Thongbao;
                                                    ?></p>
                        </div>
                        <div class=" text-center">
                            <input type="submit" name="forgot" class="btn btn-primary  btn-lg" value="Gửi Mật Khẩu">
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