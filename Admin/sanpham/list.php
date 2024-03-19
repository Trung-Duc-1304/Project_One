<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800 mb-5">Danh sách sản phẩm</h1>
    <form action="?act=listsp" method="post">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="?act=addsp"><button type="button" class="btn btn-secondary btn-sm">Nhập thêm</button></a>
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
                                <th>Mã loại</th>
                                <th>Tên sản phẩm</th>
                                <th>Giá gốc</th>
                                <th>Giá khuyến mãi</th>
                                <th>Ảnh</th>
                                <th>Số lượng</th>
                                <th>Khuyến mãi</th>
                                <th>Danh mục</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($listsp as $sp) {
                                extract($sp);
                                if($soluong<=0) $trangthai=1;
                                else $trangthai=0;
                                echo '<tr>
                                        <td class=" align-middle text-center">'.$id.'</td>
                                        <td class="col-2 align-middle">'.$tensp.'</td>
                                        <td class="col-2 align-middle">'.number_format($giasp, 0, ',', '.').' VND</td>
                                        <td class="col-2 align-middle">'.number_format($giakm, 0, ',', '.').' VND</td>
                                        <td  class="col-1 align-middle"><img src="../uploads/'.$image.'" alt="err" height="60px"></td>
                                        <td  class="col-1 align-middle">'.$soluong.'</td>
                                        <td  class="align-middle">'.$khuyenmai.'</td>
                                        <td  class="col-1 align-middle">'.$tendm.'</td>
                                        <td class="col-2 align-middle"><a href="?act=updatesp&id='.$id.'"><button type="button" class="btn btn-secondary btn-sm">Sửa</button></a> | 
                                            <a href="?act=xoasp&id='.$id.'"><button type="button" class="btn btn-secondary btn-sm">Xóa</button></a></td>
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