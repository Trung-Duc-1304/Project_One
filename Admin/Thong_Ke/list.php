<style>
    .dropdown-menu {
        display: none;
    }
</style>
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3"><span class="text-muted fw-light"> Thông kê/</span> Danh Sách Thông Kê Doanh Thu</h4>
    <div class="dropdown">
        <button onclick="toggleDropdown()" class="btn btn-primary dropdown-toggle mb-3" type="button" id="dropdownMenuButton" aria-expanded="false">
            Chọn ngày thống kê
        </button>
        <ul id="dropdownList" class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <li><a class="dropdown-item" href="?act=thongke_ngay">Ngày</a></li>
            <li><a class="dropdown-item" href="?act=thongke_tuan">Tuần</a></li>
            <li><a class="dropdown-item" href="?act=thongke_thang">Tháng</a></li>
            <!-- Thêm các mục khác nếu cần -->
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th class="text-primary  fw-bold">Ngày tháng</th>
                            <th class="text-primary  fw-bold">Tổng số đơn hàng</th>
                            <th class="text-primary  fw-bold">Doanh thu</th>
                            <th class="text-primary  fw-bold">Người dùng mua</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (!empty($listthongke)) :
                            foreach ($listthongke as $thongke) :
                                extract($thongke);
                                $formatDate = date("d/m/Y", strtotime($Time_set));
                        ?>
                                <tr>
                                    <td class="col-1 align-middle text-center">
                                        <?= $formatDate ?>
                                    </td>
                                    <td class="col-1 align-middle">
                                        <button class=" btn badge bg-label-warning"><?= $soluongsp ?> Đơn</button>
                                    </td>
                                    <td class="col-1 align-middle">
                                        <?= number_format($tongdoanhthu) ?> VNĐ
                                    </td>
                                    <td class="col-1 align-middle">
                                        <?= $hovaten ?>
                                    </td>
                                </tr>
                        <?php endforeach;
                        endif ?>
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-end align-items-center mt-2">
                <h4 class="fw-bold me-2">
                    Tổng danh thu:
                </h4>
                <h5 class="fw-bold text-danger "> <?= number_format($Count_price_tk['total_price']) ?> VNĐ</h5>
            </div>
        </div>
    </div>
</div>
<script>
    function toggleDropdown() {
        var dropdownMenu = document.getElementById("dropdownList");
        dropdownMenu.style.display = (dropdownMenu.style.display === "block") ? "none" : "block";
    }
</script>