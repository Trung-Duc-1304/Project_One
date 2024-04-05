<style>
    .child {
        width: 250px;
        margin: 10px;
        padding: 15px;
        cursor: pointer;
    }

    .child a {
        margin-left: 10px;
        text-decoration: none;
        color: #080808;
        font-size: 1em;
        font-weight: bold;
    }

    .child a:hover {
        color: rgb(38, 0, 253);
    }

    .child li {
        list-style: none;
        display: inline-block;
    }

    .child .active {
        color: rgb(255, 21, 0);
    }

    .product_rights {
        float: left;
        border-radius: 10px;
        width: 230px;
        box-shadow: 0 1px 2px 0 rgba(60, 64, 67, .1), 0 2px 6px 2px rgba(60, 64, 67, .15);
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th,
    td {
        padding: 12px;
        text-align: center;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #4CAF50;
        color: white;
    }

    tr:hover {
        background-color: #f5f5f5;
    }

    .product_rightst th {
        text-align: center;
    }

    .bold {
        font-weight: bold;
        color: red;
        cursor: pointer;
    }

    .product_rightst .btn {
        border-radius: 5px;
    }

    .product_rights .active {
        color: red;
    }

    .active {
        color: red;
    }
</style>
<?php
if (is_array($list_order_user)) {
    extract($list_order_user);
}
?>
<?php

?>
<section style="padding:30px;">
    <div class="row">
        <div class="col-2">
            <div class="product_rights">
                <div class="child">
                    <i class="fa-solid fa-house-chimney"></i>
                    <li><a href="?act=account">Trang Chủ</a></li>
                </div>
                <?php
                if ($role == 'Admin') {
                ?>
                    <div class="child">
                        <i class="fa-solid fa-screwdriver-wrench"></i>
                        <li><a href="Admin/index.php">Vào Trang Quản Trị</a></li>
                    </div>
                <?php } else ?>
                <div class="child">
                    <i class="fa-solid fa-cart-arrow-down"></i>
                    <li><a href="?act=user_order&id=<?= $id ?>" class="active">Đơn Hàng</a></li>
                </div>
                <div class="child">
                    <i class="fa-solid fa-user-shield"></i>
                    <li> <a href="?act=your">Tài khoản của bạn</a></li>
                </div>
                <div class="child">
                    <i class="fa-solid fa-recycle"></i>
                    <li> <a href="?act=update_user">Cập Nhật Thông Tin</a></li>
                </div>
            </div>
        </div>
        <div class="col-10">
            <div class="product_rightst">
                <main>
                    <table>
                        <thead>
                            <tr>
                                <?php
                                foreach ($list_order_user as $user) {
                                    extract($user);
                                }
                                ?>
                                <th>Mã_ĐH</th>
                                <th>Tên người nhận</th>
                                <th>Sản Phẩm</th>
                                <th>Màu - Size - SL</th>
                                <th>Ngày Đặt</th>
                                <th>Địa Chỉ</th>
                                <th>Phone</th>
                                <th>Phương Thức</th>
                                <th>Trạng Thái</th>
                                <?php
                                if ($trangthai == 'Chưa duyệt') {
                                    echo "<th>Set</th>";
                                }
                                ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($list_order_user as $user) {
                                extract($user);
                                $formatdate = date("d/m/Y", strtotime($ngaydathang));
                                if ($trangthai == 'Chưa duyệt') {
                                    echo "<tr>
                                          <td>$id</td>
                                          <td>$hovatennhan</td>
                                          <td>$tensp</td>
                                          <td>$color - $Size - $soLuong</td>
                                          <td>$formatdate</td>
                                          <td>$diachinhan</td>
                                          <td>$sodienthoainhan</td>
                                          <td>$phuongthuctt</td>
                                          <td>$trangthai</td>
                                          <td>
                                          <a href='#' onclick='confirmCancelTicket(this);' data-id='$id'><input class='btn btn-primary btn-sm' type='button' value='Hủy'>
                                          </a>
                                          </td>
                                     </tr> ";
                                } else {
                                    echo "<tr>
                                          <td>$id</td>
                                          <td>$hovatennhan</td>
                                          <td>$tensp</td>
                                          <td>$color - $Size - $soLuong</td>
                                          <td>$formatdate</td>
                                          <td>$diachinhan</td>
                                          <td>$sodienthoainhan</td>
                                          <td>$phuongthuctt</td>
                                          <td>$trangthai</td>
                                     </tr> ";
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </main>
            </div>
        </div>
</section>
<script>
    // Chức năng xử lý sự kiện click vào liên kết
    function confirmCancelTicket(link) {
        var dataId = link.getAttribute("data-id");
        Swal.fire({
            icon: "question",
            title: "Xác nhận hủy vé",
            text: "Bạn có chắc chắn muốn hủy vé?",
            showCancelButton: true,
            confirmButtonText: "Đồng ý",
            cancelButtonText: "Hủy bỏ",
        }).then((result) => {
            if (result.isConfirmed) {
                // window.location.href = 'index.php?action=delete_book&id=' + dataId; // Thay thế bằng URL
                // Gọi hàm thông báo Ajax
                simulateDeleteSuccess(dataId);
            }
        });
    }

    function simulateDeleteSuccess(dataId) {
        // Hiển thị thông báo thành công bằng SweetAlert2
        Swal.fire({
            icon: "success",
            title: "Hủy thành công",
            text: "Vé đã được hủy thành công.",
        }).then((result) => {
            if (result.isConfirmed) {
                // Nếu người dùng xác nhận, bạn có thể chuyển hướng hoặc thực hiện bất kỳ hành động nào khác
                window.location.href = '?act=huy_order&id=' + dataId;
            }
        });
    }
</script>