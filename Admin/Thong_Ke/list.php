<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3"><span class="text-muted fw-light"> Thông kê/</span> Danh Sách Thông Kê Doanh Thu</h4>
    <form action="?act=list_sp" method="post">
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
                            foreach ($listthongke as $thongke) :
                                extract($thongke);
                                ?>
                                <tr>
                                    <td class=" col-1 align-middle text-center"><?= $ngaydat ?></td>
                                    <td class="col-1 align-middle"><?= $donhang ?></td>
                                    <td class="col-1 align-middle"><?= number_format($doanhthu,0,',','.').'đ' ?></td>
                                    <td class="col-1 align-middle"><?= $soluongban ?></td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </form>
</div>