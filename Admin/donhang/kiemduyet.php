 <!-- Begin Page Content -->
 <div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800 mb-5">Duyệt đơn hàng</h1>
    <form action="?act=kiemduyet" method="post">
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
                                <th>Mã đơn hàng</th>
                                <th>Khách hàng</th>
                                <th>Số lượng</th>
                                <th>Giá trị đơn hàng</th>
                                <th>Ngày đặt hàng</th>
                                <th>Thanh toán</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($listdh as $dh) {
                                extract($dh);
                                if($thanhtoan==0){$thanhtoan="Chưa thanh toán"; $class="thanhtoanadmin2";} 
                                else {$thanhtoan="Đã thanh toán"; $class="thanhtoanadmin1";} 
                                echo '<tr>
                                        <td class="col-1 align-middle">TB-'.$iddh.'</td>
                                        <td class="col-3 align-middle">
                                            '.$hovatennhan.' <br>
                                            '.$sodienthoainhan.' <br>
                                            '.$email.' <br>
                                            '.$diachinhan.'
                                        </td>
                                        <td class="text-center align-middle">'.$soluongct.'</td>
                                        <td  class="col-2 align-middle">'.number_format($thanhtien, 0, ',', '.').'₫</td> 
                                        <td class="col-2 align-middle">'.$ngaydathang.'</td>
                                        <td  class="col-2 align-middle '.$class.'">'.$thanhtoan.'</td>
                                        <td class="col-2 align-middle"><a href="?act=duyetdon&id='.$iddh.'"><button type="button" class="btn btn-secondary btn-sm">Duyệt</button></a> | 
                                            <a href="?act=xoadh&id='.$iddh.'"><button type="button" class="btn btn-secondary btn-sm">Hủy</button></a></td>
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