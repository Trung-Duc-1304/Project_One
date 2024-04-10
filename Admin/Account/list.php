<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3"><span class="text-muted fw-light">Nguời Dùng /</span> Danh Sách Nguời Dùng</h4>
    <form action="?act=list_sp" method="post">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th class="text-primary  fw-bold">ID</th>
                                <th class="text-primary  fw-bold">FullName</th>
                                <th class="text-primary  fw-bold">User</th>
                                <th class="text-primary  fw-bold">Pass</th>
                                <th class="text-primary  fw-bold">Email</th>
                                <th class="text-primary  fw-bold">Quyền hạn</th>
                                <th class="text-primary  fw-bold">Trang thái</th>
                                <th class="text-primary  fw-bold">Thao Tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($list_account as $account) :
                                extract($account);
                                ?>
                                <tr>
                                    <td class=" col-1 align-middle text-center"><?= $id ?></td>
                                    <td class="col-1 align-middle"><?= $hovaten ?></td>
                                    <td class="col-1 align-middle"><?= $tendangnhap ?></td>
                                    <td class="col-1 align-middle"><?= $matkhau ?></td>
                                    <td class="col-1 align-middle"><?=$email?>
                                    </td>
                                    <td class="col-2 align-middle"><?= $role ?></td>
                                    <td class="col-2 align-middle"><?= $trangthai ?></td>
                                    <td class="col-3 align-middle">
                                        <a href="?act=sua_account&id=<?=$id?>">
                                            <button type="button" class="btn btn-warning btn-sm ">Sửa</button>
                                        </a> |
                                        <a href="?act=delete_account&id=<?=$id?>">
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