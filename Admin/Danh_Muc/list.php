<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 "><span class="text-muted fw-light">Danh mục /</span> Danh sách danh mục</h4>
    <div class="d-flex align-content-center justify-content-end flex-wrap gap-3 mb-3">
    <a href="index.php?act=create_danh_muc" class="btn btn-primary text-end">
    Thêm Danh Mục
    </a>
            </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <table class="table text-center">
                    <thead>
                        <tr >
                            <th class="text-primary  fw-bold">ID</th>
                            <th class="text-primary  fw-bold">Tên Danh Mục</th>
                            <th class="text-primary  fw-bold">Thao Tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($listdm as $danhmuc) :
                            $xoa = "index.php?act=delete_dm&id=" . $danhmuc['id'];
                            $sua = "index.php?act=update_dm&id=" . $danhmuc['id']; ?>
                            <tr>
                                <td><?= $danhmuc['id'] ?></td>
                                <td><?= $danhmuc['tendm'] ?></td>
                               <td>
                                    <div class="change d-flex justify-content-center">
                                        <form action="<?= $sua ?>" method="post">
                                            <input type="submit" name="sua-category" class="btn btn-warning  me-2" value="sửa">
                                        </form>
                                        <form action="<?= $xoa ?>" method="post">
                                            <input type="submit" name="" class="btn btn-danger" value="xóa">
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>