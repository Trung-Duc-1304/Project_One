<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3"><span class="text-muted fw-light">Sản Phẩm /</span> Danh Sách Sản Phẩm</h4>
    <form action="?act=list_sp" method="post">
        <div class="d-flex justify-content-between flex-wrap gap-3 mb-3">
            <div class="col-3 text-start d-flex ">
                <input type="text" class="form-control" name="kyw" placeholder="Tìm kiếm...">
                <div class="input-group-append">
                    <button class="btn btn-primary tim ms-3" type="submit" name="search">
                        Search
                    </button>
                </div>
            </div>
            <a href="index.php?act=create_sp" class="btn btn-primary text-end">
                Thêm Sản Phẩm
            </a>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th>Mã loại</th>
                                <th>Tên sản phẩm</th>
                                <th>Giá gốc</th>
                                <th>Giá Sales</th>
                                <th>Ảnh</th>
                                <th>SL</th>
                                <th>Loại</th>
                                <th>Thao Tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($listsp as $sp) :
                                extract($sp);
                                if ($soluong <= 0)
                                    $trangthai = 1;
                                else
                                    $trangthai = 0; ?>
                                <tr>
                                    <td class=" col-1 align-middle text-center"><?= $id ?></td>
                                    <td class="col-2 align-middle"><?= $tensp ?></td>
                                    <td class="col-2 align-middle"><?= number_format($giasp, 0, ',', '.') ?> VND</td>
                                    <td class="col-2 align-middle"><?= number_format($giakm, 0, ',', '.') ?> VNĐ</td>
                                    <td class="col-1 align-middle"><img src="../uploads/<?=$image?>" alt="err" height="50px" width="50px">
                                    </td>
                                    <td class="col-1 align-middle"><?= $soluong ?></td>
                                    <td class="col-1 align-middle"><?= $tendm ?></td>
                                    <td class="col-2 align-middle">
                                        <a href="?act=sua_sp&id=<?=$id?>">
                                            <button type="button" class="btn btn-warning btn-sm">Sửa</button>
                                        </a> |
                                        <a href="?act=xoa_sp&id=<?=$id?>">
                                            <button type="button" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" class="btn btn-danger btn-sm">Xóa</button>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </form>
</div>