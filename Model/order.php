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
