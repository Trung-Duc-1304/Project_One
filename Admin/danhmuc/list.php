<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800 mb-5">Danh sách danh mục</h1>
    <form action="?act=listdm" method="post">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="?act=adddm"><button type="button" class="btn btn-secondary btn-sm">Nhập thêm</button></a>
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
                                <th>Tên danh mục</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($listdm as $dm) {
                                    extract($dm);
                                    echo '<tr>
                                            <td class="col-2">'.$id.'</td>
                                            <td>'.$tendm.'</td>
                                            <td class="col-2"><a href="?act=updatedm&id='.$id.'"><button type="button" class="btn btn-secondary btn-sm">Sửa</button></a> | 
                                                <a onclick="return confirm(\'Bạn có muốn xóa không?\')" href="?act=xoadm&id='.$id.'"><button type="button" class="btn btn-secondary btn-sm">Xóa</button></a></td>
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