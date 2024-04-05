<?php

function list_cart()
{
    $sql = "SELECT giohang.*, taikhoan.hovaten, sanpham.tensp FROM giohang
    INNER JOIN taikhoan 
    ON giohang.idtaikhoan = taikhoan.id
    INNER JOIN sanpham 
    ON giohang.product_id = sanpham.id
    WHERE 1 
    ORDER BY giohang.id DESC
    ";
    return pdo_query($sql);
}

function list_cart_user($id)
{
    $sql = "SELECT  giohang.*, taikhoan.hovaten, sanpham.tensp, sanpham.image FROM giohang
    INNER JOIN taikhoan 
    ON giohang.idtaikhoan = taikhoan.id
    INNER JOIN sanpham 
    ON giohang.product_id = sanpham.id
    WHERE  giohang.idtaikhoan = $id
    ORDER BY giohang.id DESC
    ";
    return pdo_query($sql);
}

function sum_cart_user($id)
{
    $sql = "SELECT giohang.*, SUM(giohang.thanhtien * giohang.soluong) AS total_amount FROM giohang
    INNER JOIN sanpham 
    ON giohang.product_id = sanpham.id
    WHERE giohang.idtaikhoan = $id";
    return pdo_query($sql);
}

function list_order()
{
    $sql = "SELECT * FROM donhang WHERE 1
    ";
    return pdo_query($sql);
}

function list_order_user($id)
{
    $sql = "SELECT * FROM donhang WHERE idtaikhoan = $id";
    return pdo_query($sql);
}

function list_order_one()
{
    $sql = "SELECT * FROM donhang WHERE id = " . $_GET['id'];
    return pdo_query_one($sql);
}

function update_order($id, $trangthai, $thanhtoan)
{
    $query = "UPDATE `donhang` SET `trangthai`='$trangthai', `thanhtoan`='$thanhtoan'  WHERE id=" . $id;
    pdo_execute($query);
}

function huy_order($id)
{
    $sql = "UPDATE donhang SET trangthai = 'Đã hủy' WHERE id =" . $id;
    pdo_execute($sql);
}

function inserorder(
    $idtaikhoan,
    $hovatennhan,
    $tensp,
    $color,
    $Size,
    $soLuong,
    $ngaydathang,
    $diachinhan,
    $sodienthoainhan,
    $phuongthuctt,
    $thanhtoan
) {
    $sql = "INSERT INTO donhang(idtaikhoan, hovatennhan, tensp, color, Size, soLuong, ngaydathang, diachinhan, sodienthoainhan, phuongthuctt, thanhtoan)
    VALUES('$idtaikhoan'
            ,'$hovatennhan'
            ,'$tensp'
            ,'$color'
            ,'$Size'
            ,'$soLuong'
            ,'$ngaydathang'
            ,'$diachinhan'
            ,'$sodienthoainhan'
            ,'$phuongthuctt'
            ,'$thanhtoan')";
    pdo_execute($sql);
}
