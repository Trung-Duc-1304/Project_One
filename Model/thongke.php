<?php
function thongke_ngay($currentDate)
{
    $sql = "SELECT *, SUM(bill.price) as tongdoanhthu, SUM(bil_ct.soluong) as soluongsp, SUM(bill.User_ID) as sumbill 
    FROM bill JOIN bil_ct 
    ON bill.Bill_ID  = bil_ct.id_bill
    JOIN taikhoan
    ON taikhoan.id = bill.User_ID
    WHERE bill.Time_set = '$currentDate'
    GROUP BY bill.User_ID
    ORDER BY bil_ct.id DESC 
    ";
    return pdo_query($sql);
}

function thongke_tuan($currentDate, $firstDayOfWeek)
{
    $sql = "SELECT *, SUM(bill.price) as tongdoanhthu, SUM(bil_ct.soluong) as soluongsp, SUM(bill.User_ID) as sumbill 
    FROM bill JOIN bil_ct 
    ON bill.Bill_ID  = bil_ct.id_bill
    JOIN taikhoan
    ON taikhoan.id = bill.User_ID
    WHERE bill.Time_set >= '$firstDayOfWeek' AND bill.Time_set <= '$currentDate'
    GROUP BY bill.User_ID, bill.Time_set
    ORDER BY bill.Time_set DESC 
    ";
    return pdo_query($sql);
}

function thongke_thang($currentMonth)
{
    $sql = "SELECT *, SUM(bill.price) as tongdoanhthu, DATE_FORMAT(bill.Time_set, '%Y-%m') AS Month, SUM(bil_ct.soluong) as soluongsp, SUM(bill.User_ID) as sumbill 
    FROM bill JOIN bil_ct 
    ON bill.Bill_ID  = bil_ct.id_bill
    JOIN taikhoan
    ON taikhoan.id = bill.User_ID
    WHERE DATE_FORMAT(bill.Time_set, '%Y-%m') = '$currentMonth'
    GROUP BY bill.User_ID, bill.Time_set
    ORDER BY bill.Time_set DESC 
    ";
    return pdo_query($sql);
}


function Count_price_tk($currentDate)
{
    $sql = "SELECT SUM(price) AS total_price FROM bill WHERE Time_set = '$currentDate'";
    return pdo_query_one($sql);
}

function Count_price_tuan($currentDate, $firstDayOfWeek)
{
    $sql = "SELECT SUM(price) AS total_price FROM bill WHERE Time_set >= '$firstDayOfWeek' AND Time_set <= '$currentDate'";
    return pdo_query_one($sql);
}

function Count_price_thang($currentMonth)
{
    $sql = "SELECT SUM(price) AS total_price FROM bill WHERE DATE_FORMAT(Time_set, '%Y-%m') = '$currentMonth'";
    return pdo_query_one($sql);
}
