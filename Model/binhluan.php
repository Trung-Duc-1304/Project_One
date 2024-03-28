<?php
 function load_all_bl($kyw){
    $query="SELECT binhluan.*, taikhoan.hovaten, taikhoan.tendangnhap, sanpham.tensp FROM binhluan
    INNER JOIN taikhoan ON binhluan.idtaikhoan=taikhoan.id INNER JOIN sanpham ON binhluan.idsanpham=sanpham.id WHERE 1";
    if ($kyw != "") {
        $query .= " AND (tendangnhap LIKE '%" . $kyw . "%' OR tensp LIKE '%" . $kyw . "%' OR noidung LIKE '%" . $kyw . "%')";
    }
    $query .=" ORDER BY id asc";
    return pdo_query($query);
}
function load_bl_sp($idsanpham){
    $query="SELECT binhluan.*, taikhoan.hovaten, taikhoan.tendangnhap FROM binhluan
    INNER JOIN taikhoan ON binhluan.idtaikhoan=taikhoan.id WHERE idsanpham=".$idsanpham;
    return pdo_query($query);
}
function insert_bl($idtaikhoan,$idsanpham,$noidung,$ngaybinhluan){
    $query="INSERT INTO `binhluan`(`idtaikhoan`, `idsanpham`, `noidung`, `ngaybinhluan`) VALUES ('$idtaikhoan','$idsanpham','$noidung','$ngaybinhluan')";
    pdo_execute($query);
}
function dem_bl_sp($idsanpham){
    $query="SELECT COUNT(*) as countbl FROM binhluan WHERE idsanpham='$idsanpham'";
    return pdo_query_one($query);
}
function delete_bl($id){
    $query="DELETE FROM binhluan WHERE id='$id'";
    pdo_execute($query);
}
function count_bl(){
    $query="SELECT COUNT(*) FROM binhluan";
    return pdo_query_one($query);
}
?>