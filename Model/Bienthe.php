<?php

function loadAll_bt($id)
{
    $sql = "SELECT  bienthe.*, sanpham.tensp FROM bienthe
    INNER JOIN sanpham
    ON bienthe.pro_id = sanpham.id
    WHERE bienthe.pro_id = '$id' 
    ORDER BY bienthe.id DESC";
    $list_bt = pdo_query($sql);
    return $list_bt;
}

function loadOne_bt($id)
{
    $sql = "SELECT  bienthe.*, sanpham.tensp FROM bienthe
    INNER JOIN sanpham
    ON bienthe.pro_id = sanpham.id
    WHERE bienthe.id=".$id ;
    $listOne_bt = pdo_query_one($sql);
    return $listOne_bt;
}


function insert_bt($pro_id, $size, $color, $soLuong)
{
    $sql = "INSERT INTO bienthe( pro_id, size, color, soLuong) 
        VALUES ('$pro_id','$size','$color','$soLuong')";
    pdo_execute($sql);
}

function delete_bt($pro_id, $id)
{
    $query = "DELETE FROM bienthe WHERE pro_id= $pro_id AND id=" . $id;
    pdo_execute($query);
}

function update_bt($id, $pro_id, $soluong)
{
    $sql = "UPDATE bienthe SET soluong ='$soluong' WHERE pro_id= $pro_id AND id=" . $id;
    pdo_execute($sql);
}
