<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3"><span class="text-muted fw-light">Giỏ Hàng /</span> Danh Sách Giỏ Hàng</h4>
    <form action="?act=list_sp" method="post">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <!-- <th class="text-primary  fw-bold">ID</th> -->
                                <th class="text-primary  fw-bold">Tài Khoản</th>
                                <th class="text-primary  fw-bold">Tên Sản Phẩm</th>
                                <!-- <th class="text-primary  fw-bold">Giá Sales</th> -->
                                <th class="text-primary  fw-bold">Size</th>
                                <th class="text-primary  fw-bold">Màu</th>
                                <th class="text-primary  fw-bold">Quantity</th>
                                <th class="text-primary  fw-bold">Giá</th>
                                <th class="text-primary  fw-bold">Thao Tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($list_cart as $cart) :
                                extract($cart);?>
                                <tr>
                                    <!-- <td class="col-1 align-middle text-center"><?= $id ?></td> -->
                                    <td class="col-2 align-middle"><?= $hovaten ?></td>
                                    <td class="col-3 align-middle"><?= $tensp ?></td>
                                    <td class="col-1 align-middle"><?= $size ?></td>
                                    <td class="col-1 align-middle"><?= $color ?></td>
                                    <td class="col-1 align-middle"><?= $soluong ?></td>
                                    <td class="col-2 align-middle"><?= number_format($thanhtien, 0, ',', '.') ?> VNĐ</td>                                   
                                    <td class="col-2 align-middle">
                                        <a href="?act=xoa_sp&id=<?=$id?>">
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