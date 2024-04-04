<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 "><span class="text-muted fw-light">Đơn Hàng /</span> Danh sách đơn hàng</h4>
    <div class="d-flex align-content-center justify-content-end flex-wrap gap-3 mb-3">
        <!-- <a href="index.php?act=create_danh_muc" class="btn btn-primary text-end">
            Thêm Danh Mục
        </a> -->
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th class="text-primary  fw-bold">Họ Tên</th>
                            <th class="text-primary  fw-bold">Tên sản phẩm</th>
                            <th class="text-primary  fw-bold">Màu-Size-SL</th>
                            <th class="text-primary  fw-bold">Ngày đặt</th>
                            <th class="text-primary  fw-bold">Phone</th>
                            <th class="text-primary  fw-bold">Địa chỉ</th>
                            <th class="text-primary  fw-bold">Phương thức</th>
                            <th class="text-primary  fw-bold">Trạng thái</th>
                            <th class="text-primary  fw-bold">Thanh toán</th>
                            <th class="text-primary  fw-bold">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($list_order as $order) :
                            extract($order);
                            $sua = "index.php?act=update_order&id=" . $id;
                        ?>
                            <tr>
                                <td><?= $hovatennhan ?></td>
                                <td><?= $tensp ?></td>
                                <td><?= $color ?>-<?= $Size ?>-<?= $soLuong ?></td>
                                <td><?= $ngaydathang ?></td>
                                <td><?= $sodienthoainhan ?></td>
                                <td><?= $diachinhan ?></td>
                                <td><?= $phuongthuctt ?></td>
                                <td><?= $trangthai ?></td>
                                <td><?= $thanhtoan ?></td>
                                <td>
                                    <a href="<?= $sua ?>"><input class="btn btn-primary btn-sm trash" type="button" value="Sửa">
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>