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
                            <th class="text-primary  fw-bold">Ngày đặt</th>
                            <th class="text-primary  fw-bold">Thanh toán</th>
                            <th class="text-primary  fw-bold">Xem</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($list_order as $order) :
                            extract($order);
                            $chitiet = "?act=ct_order&user_id=$User_ID&time=$Time_set";
                            $formatDate = date("d/m/Y", strtotime($Time_set));
                        ?>
                            <tr>
                                <td><?= $hovaten ?></td>
                                <td><?= $formatDate ?></td>
                                <td><?= number_format($total_amount) ?> VND</td>
                                <td>
                                    <a class="btn btn-primary" href="<?= $chitiet ?>">Xem đơn</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>