<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800 mb-5">Danh sách tài khoản đã bị khóa</h1>
    <form action="?act=listtkkhoa" method="post">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="float-right">
                    <div class="input-group">
                        <input type="text" class="form-control" name="kyw" placeholder="Tìm kiếm...">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit" name="search">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead class="thead-light">
                            <tr>
                                <th>MATK</th>
                                <th>Họ và Tên</th>
                                <th>Tên đăng nhập</th>
                                <th>Email</th>
                                <th>Số điện thoại</th>
                                <th>Địa chỉ</th>
                                <th>Vai trò</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($listtk as $tk) {
                                extract($tk);
                                if($role==1){
                                    $role="Quản trị viên";
                                }else{
                                    $role="Thành viên";
                                }
                                if($trangthai==1){
                                    echo '<tr>
                                        <td class="align-middle text-center">'.$id.'</td>
                                        <td class="col-2 align-middle">'.$hovaten.'</td>
                                        <td class="col-1 align-middle">'.$tendangnhap.'</td>
                                        <td  class="col-1 align-middle">'.$email.'</td>
                                        <td class="col-1 align-middle">'.$sodienthoai.'</td>
                                        <td class="col-2 align-middle">'.$diachi.'</td>
                                        <td class="col-1">'.$role.'</td>
                                        <td class="col-1 align-middle text-center"><a href="?act=mokhoatk&id='.$id.'"><button type="button" class="btn btn-secondary btn-sm">Mở khóa</button></a></td>
                                    </tr>';
                                }
                            }
                            ?>                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </form>
</div>
<!-- /.container-fluid -->