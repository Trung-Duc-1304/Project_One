<table class="cs_cart_table mt-5">
    <thead>
        <?php $history = (isset($historyOder) && !empty($historyOder)) ? $historyOder : ((isset($historyOder1) && !empty($historyOder1)) ? $historyOder1 : '');
        if ($history == $historyOder || $history == "") { ?>
            <tr>
                <th>
                    Mã hóa đơn
                </th>
                <th>
                    Tên khách hàng
                </th>
                <th>
                    Số điện thoại
                </th>
                <th>
                    Địa chỉ
                </th>
                <th>
                    Thanh toán
                </th>
                <th>
                    Thành tiền
                </th>
                <th>
                    Tình trạng đơn hàng
                </th>
                <th>
                    Thao tác
                </th>
            </tr>
        <?php } else { ?>
            <tr>
                <th>
                    Sản phẩm
                </th>
                <th>
                    Giá
                </th>
                <th>
                    Màu
                </th>
                <th>
                    Size
                </th>
                <th class="col-sm-2">
                    Số lượng
                </th>
                <th>
                    Thành tiền
                </th>
                <!-- <th>
                    Tình trạng đơn hàng
                </th> -->
                <th>

                </th>
            </tr>
        <?php } ?>
    </thead>

    <!-- phần sản phẩm được thêm vào giỏ hàng -->
    <tbody>
        <?php
        if (is_array($history)) :
            foreach ($history as $key => $values) : ?>
                <?php if ($history == $historyOder || $history == "") { ?>
                    <tr>
                        <td>
                            <span class="item_cart">OD-
                                <?= $values['Bill_ID'] ?>
                            </span>
                        </td>
                        <td>
                            <?= $values['hovaten']; ?>
                        </td>
                        <td>
                            <?= $values['sodienthoai']; ?>
                        </td>
                        <td>
                            <?= $values['diachi']; ?>
                        </td>
                        <td>
                            <div>
                                <span>
                                    <?= ($values['Status'] == 0) ? 'Chưa thanh toán' : ($values['Status'] == 1 ? 'Đã thanh toán' : '') ?>
                                </span>
                            </div>
                        </td>
                        <td>
                            <strong>
                                <?= $total = number_format($values['price']);

                                ?>VND
                            </strong>
                        </td>
                        <td>
                            <span class=" text-danger">
                                <?= ($values['trangthaicuadh'] == 0) ? 'Chờ xác nhận' : ($values['trangthaicuadh'] == 1 ? 'Chờ lấy hàng' : ($values['trangthaicuadh'] == 2 ? 'Đang giao hàng' : ($values['trangthaicuadh'] == 3 ? 'Đã giao' : ($values['trangthaicuadh'] == -1 ? 'Đã hủy' : '')))) ?>
                            </span>
                        </td>
                        <td>
                            <a href="<?= '?act=lichsumuahang&idorder=' . $values['Bill_ID'] ?>" class="btn btn-warning">Chi
                                tiết</a>
                            <?php if ($values['trangthaicuadh'] == 0) {
                            ?>
                                <a href="<?= '?act=orderCancel&huy&ID=' . $values['Bill_ID'] ?>" onclick="return confirm('Bạn có chắc hủy không')" class="btn btn-danger">Hủy đơn</a>
                            <?php
                            } else if ($values['trangthaicuadh'] == -1) {
                            ?>
                                <a class="btn btn-secondary">Đã hủy</a>
                            <?php
                            } ?>
                        </td>


                    </tr>
                <?php } else { ?>
                    <tr>
                        <td>
                            <div class="cs_cart_table_media rounded-4 ">
                                <img class="rounded-4" src="uploads/<?= $values['image'] ?>" class="lazy" alt="Image" style="width:30%">
                                <span>
                                    <?= $values['tensp'] ?>
                                </span>
                            </div>
                        </td>
                        <td>
                            <strong>
                                <?= number_format($values['giasp']);

                                ?>
                            </strong>
                        </td>
                        <td>
                            <label class="container_check1">
                                <span>
                                    <?= $values['mau']; ?>
                                </span>
                            </label>
                        </td>
                        <td>
                            <div>
                                <span>
                                    <?= $values['size']; ?>
                                </span>
                            </div>
                        </td>
                        <td class="col-sm-2">
                            <?= $values['soluong'] ?> sản phẩm
                        </td>
                        <td>
                            <strong>
                                <?= $total = number_format(($values['giasp']) * $values['soluong']);

                                ?>VND
                            </strong>
                        </td>
                        <!-- <td class="col-sm-2">
                            <span class=" text-danger">
                                <?= ($values['trangthai'] == 0) ? 'Chờ xác nhận' : ($values['trangthai'] == 1 ? 'Chờ lấy hàng' : ($values['trangthai'] == 2 ? 'Đang giao hàng' : ($values['trangthai'] == 3 ? 'Đã giao' : ($values['trangthai'] == -1 ? 'Đã hủy' : '')))) ?>
                            </span>
                        </td> -->
                        <td class="col-sm-2"><a class="btn btn-danger" href="<?= '?act=lichsumuahang' ?>">Quay lại</a></td>
                    </tr>
                <?php } ?>

        <?php endforeach;
        endif;

        ?>
    </tbody>
</table>