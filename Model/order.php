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
    $sql = "SELECT  giohang.*, taikhoan.hovaten, sanpham.tensp, sanpham.image,giasp,giakm FROM giohang
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
    $sql = "SELECT giohang.*, SUM(giohang.thanhtien) AS total_amount FROM giohang
    INNER JOIN sanpham 
    ON giohang.product_id = sanpham.id
    WHERE giohang.idtaikhoan = $id";
    return pdo_query($sql);
}

function list_order()
{
    $sql = "SELECT *,bill.trangthai as trangthaidh,  SUM(bil_ct.giasp * bil_ct.soluong) AS total_amount FROM bill 
    JOIN taikhoan ON bill.User_ID  = taikhoan.id 
    JOIN bil_ct ON bill.Bill_ID = bil_ct.id_bill
    JOIN sanpham ON bil_ct.product_id = sanpham.id 
    GROUP BY bill.User_ID, bill.Time_set";
    return pdo_query($sql);
}

function Count_order()
{
    $sql = "SELECT COUNT(*) AS total_orders FROM `bil_ct`";
    return pdo_query_one($sql);
}

function Count_price()
{
    $sql = "SELECT SUM(price) AS total_price FROM bill";
    return pdo_query_one($sql);
}
function list_order_home()
{
    $sql = "SELECT *,bill.trangthai as trangthaidh FROM bill 
    JOIN taikhoan ON bill.User_ID  = taikhoan.id 
    JOIN bil_ct ON bill.Bill_ID = bil_ct.id_bill
    JOIN sanpham ON bil_ct.product_id = sanpham.id
    ORDER BY bill.Bill_ID DESC";
    return pdo_query($sql);
}

function list_order_user($Userid)
{
    $time = isset($_GET['time']) ? $_GET['time'] : '';
    $sql = "SELECT *, bill.trangthai as trangthaidh, bil_ct.id AS idbillct FROM bill 
    JOIN taikhoan ON bill.User_ID = taikhoan.id 
    JOIN bil_ct ON bill.Bill_ID = bil_ct.id_bill
    JOIN sanpham ON bil_ct.product_id = sanpham.id
    WHERE bill.User_ID = $Userid AND bill.Time_set = '$time'"; // Sử dụng tham số đặt chỗ với tên :time
    return pdo_query($sql); // Truyền giá trị của tham số vào truy vấn SQL
}


function list_order_one()
{
    $sql = "SELECT *,bill.trangthai as trangthaidh, bil_ct.id AS idbillct FROM bill 
    JOIN bil_ct ON bill.Bill_ID = bil_ct.id_bill
    WHERE Bill_ID  = " . $_GET['id'];
    return pdo_query_one($sql);
}

function update_order($id, $idbill, $trangthai)
{
    $query = "UPDATE `bill` AS b
    INNER JOIN `bil_ct` AS bc
    SET b.trangthai = $trangthai  
    WHERE b.Bill_ID = $id AND bc.id = " . $idbill;
    pdo_execute($query);
}
function update_giohang($id, $soluong, $thanhtien)
{
    $query = "UPDATE `giohang` SET `soluong`='$soluong', `thanhtien`='$thanhtien'  WHERE id=" . $id;
    pdo_execute($query);
}
