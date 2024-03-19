<?php
function load_all_tk($vaitro,$kyw){
    $query="SELECT * FROM taikhoan WHERE 1";
    if ($kyw != "") {
        $query .= " AND (hovaten LIKE '%" . $kyw . "%' OR email LIKE '%" . $kyw . "%' OR sodienthoai LIKE '%" . $kyw . "%')";
    }
    if($vaitro==1){
        $query .=" AND role='$vaitro' AND trangthai=0";
    }else if($vaitro==0){
        $query .=" AND role='$vaitro' AND trangthai=0";
    }
    $query .=" ORDER BY id asc";
    return pdo_query($query);
}
function load_all_tkcheck(){
    $query="SELECT * FROM taikhoan AND trangthai=0";
    return pdo_query($query);
}
function load_one_tk($id){
    $query="SELECT * FROM taikhoan WHERE id=".$id;
    return pdo_query_one($query);
}
function insert_tk($hovaten,$tendangnhap,$matkhau,$email,$sodienthoai,$diachi,$role){
    $query="INSERT INTO `taikhoan`(`hovaten`, `tendangnhap`, `matkhau`, `email`, `sodienthoai`, `diachi`, `role`) 
    VALUES ('$hovaten','$tendangnhap','$matkhau','$email','$sodienthoai','$diachi','$role')";
    pdo_execute($query);
}
function update_tk($id,$hovaten,$tendangnhap,$matkhau,$email,$sodienthoai,$diachi,$role){
    $query="UPDATE `taikhoan` SET `id`='$id',`hovaten`='$hovaten',`tendangnhap`='$tendangnhap',`matkhau`='$matkhau',`email`='$email',`sodienthoai`='$sodienthoai',`diachi`='$diachi',`role`='$role' WHERE id=".$id;
    pdo_execute($query);
}
function update_mk($matkhau,$id){
    $query="UPDATE `taikhoan` SET `matkhau`='$matkhau' WHERE id=".$id;
    pdo_execute($query);
}
function delete_tk($id){
    $query="DELETE FROM taikhoan WHERE id=".$id;
    pdo_execute($query);
}
function checkuser($tendangnhap,$matkhau){
    $query="SELECT * FROM taikhoan WHERE tendangnhap='$tendangnhap' AND  matkhau='$matkhau' AND trangthai=0";
    return pdo_query_one($query);
}
function quenmatkhau($email , $tendangnhap){
    $query="SELECT * FROM taikhoan WHERE email='$email' AND tendangnhap='$tendangnhap' AND trangthai=0";
    return pdo_query_one($query);
}
function count_tk(){
    $query="SELECT COUNT(*) FROM taikhoan WHERE trangthai=0";
    return pdo_query_one($query);
}
function update_trangthai_tk($id,$trangthai){
    $query="UPDATE taikhoan SET trangthai='$trangthai' WHERE id='$id'";
    pdo_execute($query);
}
?>