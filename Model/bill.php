<?php
function insert_bill($id, $tongtien, $timeset)
{
    $query = "INSERT INTO `bill`(`User_ID`, `price`, `Time_set`,`Status`) 
        VALUES ('$id','$tongtien','$timeset',0)";
    $conn = pdo_get_connection();
    $stmt = $conn->prepare($query);
    $stmt->execute();
    return $conn->lastInsertId();
}
function update_billct($id)
{
    $query = "UPDATE `bill` SET `Status`='1', Pay = 'Đã thanh toán'  WHERE Bill_ID=" . $id;
    pdo_execute($query);
}
function insert_bill_ct($idbill, $product_id, $tensp, $giasp, $soluong, $mau, $size)
{
    $query = "INSERT INTO `bil_ct`(`id_bill`, `product_id`, `tensp`,`giasp`,`soluong`,`size`,`mau`) 
        VALUES ('$idbill','$product_id' , '$tensp', '$giasp', '$soluong','$size','$mau')";
    pdo_execute($query);
}
function delete_cart1($user_id)
{
    $query = "DELETE FROM giohang WHERE idtaikhoan= $user_id ";
    pdo_execute($query);
}
function lsmuahang($id)
{
    $sql = "SELECT * FROM bill
    INNER JOIN bil_ct 
    ON bill.Bill_ID = bil_ct.id_bill JOIN sanpham ON sanpham.id = bil_ct.product_id 
    WHERE bill.User_ID= $id";
    return pdo_query($sql);
}
function xoa_trangthai($id)
{
    $query = "UPDATE `bill` SET `trangthai`='-1'  WHERE Bill_ID=" . $id;
    pdo_execute($query);
}

function historyOder($kh_id, $idoder, $star, $end)
{
    try {
        $sql = "SELECT *
        FROM bill a join bil_ct b on Bill_ID = b.id_bill  join sanpham c on b.product_id  = c.id
        WHERE User_ID = :user_id AND Bill_ID = :id GROUP BY b.id ORDER BY b.id DESC";
        if ($star != '' && $end != "") {
            $sql .= " LIMIT $star,$end";
        }

        $stmt = pdo_get_connection()->prepare($sql);

        $stmt->bindParam(":user_id", $kh_id);
        $stmt->bindParam(":id", $idoder);
        $stmt->execute();

        return $stmt->fetchAll();
    } catch (\PDOException $e) {
        debug($e);
    }
}

function listallhistoryOder($kh_id, $star, $end)
{
    try {
        $sql = "SELECT *,bill.trangthai as trangthaicuadh FROM bill 
        JOIN taikhoan ON bill.User_ID = taikhoan.id
        WHERE User_ID = :user_id  ORDER BY bill.Bill_ID DESC";
        if ($star != '' && $end != "") {
            $sql .= " LIMIT $star,$end";
        }

        $stmt = pdo_get_connection()->prepare($sql);

        $stmt->bindParam(":user_id", $kh_id);
        $stmt->execute();

        return $stmt->fetchAll();
    } catch (\PDOException $e) {
        debug($e);
    }
}
