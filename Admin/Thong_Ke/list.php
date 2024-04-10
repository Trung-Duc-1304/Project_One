<style>
    .dropdown-menu {
        display: none;
    }
</style>
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3"><span class="text-muted fw-light"> Thông kê/</span> Danh Sách Thông Kê Doanh Thu</h4>
    <div class="dropdown">
        <button onclick="toggleDropdown()" class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
            aria-expanded="false">
            Chọn ngày thống kê
        </button>
        <ul id="dropdownList" class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <li><a class="dropdown-item" href="index.php?act=danhsachthongke&day=1">1 ngày</a></li>
            <li><a class="dropdown-item" href="index.php?act=danhsachthongke&day=5">5 ngày</a></li>
            <li><a class="dropdown-item" href="index.php?act=danhsachthongke&day=7">7 ngày</a></li>
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
                                <th class="text-primary  fw-bold">Số lượng bán</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (!empty($listthongke)):
                                foreach ($listthongke as $thongke):
                                    extract($thongke);
                                    ?>
                                    <tr>
                                        <td class="col-1 align-middle text-center">
                                            <?= $Time_set ?>
                                        </td>
                                        <td class="col-1 align-middle">
                                            <?= sizeof($listthongke) ?>
                                        </td>
                                        <td class="col-1 align-middle">
                                            <?= number_format($tongdoanhthu, 0, ',', '.') . 'đ' ?>
                                        </td>
                                        <td class="col-1 align-middle">
                                            <?= $soluongsp ?>
                                        </td>
                                    </tr>
                                <?php endforeach;
                            endif ?>
                        </tbody>
                    </table>
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