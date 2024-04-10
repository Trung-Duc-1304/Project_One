<?php
function thongke($day)
{
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $currentDate = new DateTime();
    $subtractedDate = clone $currentDate;
    $subtractedDate->modify('-' . $day . ' days');
    $ngaykthuc = $subtractedDate->format('Y/m/d');
    $sql = "SELECT *,SUM(price) as tongdoanhthu,SUM(bil_ct.soluong) as soluongsp FROM bill JOIN bil_ct ON bill.Bill_ID  = bil_ct.id_bill
    WHERE Time_set >=$ngaykthuc";
    return pdo_query($sql);
}

function load_all_thongke($ngay)
{
    $query = "SELECT * FROM thongke WHERE 1";
    if ($ngay == 365) {
        $query .= " AND ngaydat >= DATE_SUB(NOW(), INTERVAL 365 DAY)";
    } else if ($ngay == 180) {
        $query .= " AND ngaydat >= DATE_SUB(NOW(), INTERVAL 180 DAY)";
    } else if ($ngay == 90) {
        $query .= " AND ngaydat >= DATE_SUB(NOW(), INTERVAL 90 DAY)";
    } else if ($ngay == 28) {
        $query .= " AND ngaydat >= DATE_SUB(NOW(), INTERVAL 28 DAY)";
    } else if ($ngay == 7) {
        $query .= " AND ngaydat >= DATE_SUB(NOW(), INTERVAL 7 DAY)";
    } else if ($ngay == 1) {
        $query .= " AND ngaydat >= DATE_SUB(NOW(), INTERVAL 1 DAY)";
    }
    return pdo_query($query);
}
?>