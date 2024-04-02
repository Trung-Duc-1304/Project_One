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

function list_cart_user()
{
    $sql = "SELECT  giohang.*, taikhoan.hovaten, sanpham.tensp, sanpham.image FROM giohang
    INNER JOIN taikhoan 
    ON giohang.idtaikhoan = taikhoan.id
    INNER JOIN sanpham 
    ON giohang.product_id = sanpham.id
    WHERE  giohang.idtaikhoan = 31
    ORDER BY giohang.id DESC
    ";
    return pdo_query($sql);
}

function sum_cart_user()
{
    $sql = "SELECT giohang.*, SUM(giohang.thanhtien * giohang.soluong) AS total_amount FROM giohang
    INNER JOIN sanpham 
    ON giohang.product_id = sanpham.id
    WHERE giohang.idtaikhoan = 31";
    return pdo_query($sql);
}
function load_all_thongke($ngay){
    $query="SELECT * FROM thongke WHERE 1";
    if($ngay==365){
        $query .=" AND ngaydat >= DATE_SUB(NOW(), INTERVAL 365 DAY)";
    }else if($ngay==180){
        $query .=" AND ngaydat >= DATE_SUB(NOW(), INTERVAL 180 DAY)";
    }else if($ngay==90){
        $query .=" AND ngaydat >= DATE_SUB(NOW(), INTERVAL 90 DAY)";
    }else if($ngay==28){
        $query .=" AND ngaydat >= DATE_SUB(NOW(), INTERVAL 28 DAY)";
    }else if($ngay==7){
        $query .=" AND ngaydat >= DATE_SUB(NOW(), INTERVAL 7 DAY)";
    }
    else if($ngay==1){
        $query .=" AND ngaydat >= DATE_SUB(NOW(), INTERVAL 1 DAY)";
    }
    return pdo_query($query);
}


