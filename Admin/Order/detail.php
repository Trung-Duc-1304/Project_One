<?php
foreach ($list_order as $ten) {
    extract($ten);
}
?>
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 "><span class="text-muted fw-light"><a href="?act=list_order">Đơn Hàng</a> / </span><?= $hovaten ?></h4>
    <div class="d-flex align-content-center justify-content-end flex-wrap gap-3 mb-3">

        <a href="?act=list_order" class="btn btn-primary">quay lại</a>
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
                            <th class="text-primary  fw-bold">Tên sản phẩm</th>
                            <th class="text-primary  fw-bold">Màu-Size-SL</th>
                            <th class="text-primary  fw-bold">Ngày đặt</th>
                            <th class="text-primary  fw-bold">Phone</th>
                            <th class="text-primary  fw-bold">Địa Chỉ</th>
                            <th class="text-primary  fw-bold">Trạng thái</th>
                            <th class="text-primary  fw-bold">Pay</th>
                            <th class="text-primary  fw-bold">Thanh toán</th>
                            <th class="text-primary  fw-bold">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($list_order as $order) :
                            extract($order);
                            $total = $giasp * $soluong;

                            $sua = "?act=update_order&id=$Bill_ID&idbill=$idbillct";
                        ?>
                            <tr>
                                <td><?= $tensp ?></td>
                                <td><?= $mau ?>-<?= $size ?>-<?= $soluong ?></td>
                                <td><?= $Time_set ?></td>
                                <td><?= $sodienthoai ?></td>
                                <td><?= $diachi ?></td>
                                <td> <?= ($trangthaidh == 0) ? 'Chờ xác nhận' : ($trangthaidh == 1 ? 'Chờ lấy hàng' : ($trangthaidh == 2 ? 'Đang giao hàng' : ($trangthaidh == 3 ? 'Đã giao' : ($trangthaidh == -1 ? 'Đã hủy' : '')))) ?></td>
                                <td><?= $Pay ?> </td>
                                <td><?= number_format($total) ?> VND</td>
                                <td>
                                    <?php
                                    if ($trangthaidh == 3 || $trangthaidh == -1) {
                                        echo '';
                                    } else {
                                        echo '<a class="btn btn-warning" href="' . $sua . '">Sửa</a>';
                                    }
                                    ?>
                                </td>

                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>