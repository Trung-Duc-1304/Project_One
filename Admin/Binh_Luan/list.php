<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3"><span class="text-muted fw-light">Sản Phẩm /</span> Danh Sách Bình Luận</h4>
    <form action="?act=list_sp" method="post">
        <!-- <div class="d-flex justify-content-between flex-wrap gap-3 mb-3">
            <div class="col-3 text-start d-flex ">
                <input type="text" class="form-control" name="kyw" placeholder="Tìm kiếm...">
                <div class="input-group-append">
                    <button class="btn btn-primary tim ms-3" type="submit" name="search">
                        Search
                    </button>
                </div>
            </div>
        </div> -->

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th class="text-primary  fw-bold">Họ và tên</th>
                                <th class="text-primary  fw-bold">Tài khoản </th>
                                <th class="text-primary  fw-bold">Sản phẩm</th>
                                <!-- <th class="text-primary  fw-bold">Giá Sales</th> -->
                                <th class="text-primary  fw-bold">Nội dung</th>
                                <th class="text-primary  fw-bold">Ngày bình luận</th>
                                <th class="text-primary  fw-bold">Thao Tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($listbl as $bl) :
                                extract($bl); ?>
                                <tr>
                                    <td class="col-2 align-middle"><?= $hovaten ?></td>
                                    <td class="col-1 align-middle"><?= $tendangnhap ?></td>
                                    <td class="col-1 align-middle"><?= $tensp ?></td>
                                    <td class="col-1 align-middle"><?= $noidung ?></td>
                                    <td class="col-1 align-middle"><?= $ngaybinhluan ?></td>
                                    <td class="col-2 align-middle">
                                        <a href="?act=xoabl&id=<?= $id ?>">
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