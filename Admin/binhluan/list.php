<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800 mb-5">Danh sách bình luận</h1>
    <form action="?act=listbl" method="post">
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
                                <th>Họ và Tên</th>
                                <th>Tài khoản</th>
                                <th>Sản phẩm</th>
                                <th>Nội dung</th>
                                <th>Ngày bình luận</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($listbl as $bl) {
                                    extract($bl);
                                    echo '<tr>
                                            <td class="col-2 align-middle">'.$hovaten.'</td>
                                            <td class="col-1 align-middle">'.$tendangnhap.'</td>
                                            <td class="col-3 align-middle">'.$tensp.'</td>
                                            <td  class="col-3 align-middle">'.$noidung.'</td>
                                            <td class="col-2 align-middle">'.$ngaybinhluan.'</td>
                                            <td class="col-1 align-middle"><a href="?act=xoabl&id='.$id.'"><button type="button" class="btn btn-secondary btn-sm">Ẩn</button></a></td>
                                        </tr>';
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