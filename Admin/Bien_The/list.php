<?php

if (is_array($list_bt)) {
    extract($list_bt);
} 
if (is_array($sp)) {
    extract($sp);}
?>

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3"><span class="text-muted fw-light">Biến Thể /</span> <?=$tensp?></h4>
    <form action="?act=list_sp" method="post">
        <div class="d-flex justify-content-end flex-wrap gap-3 mb-3">
        <a href="index.php?act=list_sp" class="btn btn-label-primary"> Danh Sách</a>
            <a href="index.php?act=create_bt&id=<?=$id?>" class="btn btn-primary text-end">
                Thêm Biến Thể
            </a>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th class="text-primary  fw-bold">ID_Biến Thể</th>
                                <th class="text-primary  fw-bold">Size</th>
                                <th class="text-primary  fw-bold">Color</th>
                                <th class="text-primary  fw-bold">Số lượng</th>
                                <th class="text-primary  fw-bold">Thao Tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($list_bt as $bt) :
                                extract($bt);
                            ?>
                                <tr>
                                    <td class="col-1 align-middle"><?= $id ?></td>
                                    <td class="col-1 align-middle"><?= $size ?></td>
                                    <td class="col-1 align-middle"><?= $color ?></td>
                                    <td class="col-1 align-middle"><?= $soLuong ?></td>
                                    <td class="col-1 align-middle">
                                        <a href="?act=sua_bt&id=<?= $id?>">
                                            <button type="button" class="btn btn-warning btn-sm">Sửa</button>
                                        </a>
                                        <a href="?act=delete_bt&pro_id=<?= $pro_id ?>&id=<?= $id?>">
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