<?php
    /* Trong qua trinh sua */
    function insert_cart($idtaikhoan,$idsanpham,$soluong,$thanhtien){
        $query="INSERT INTO `giohang`(`idtaikhoan`, `idsanpham`, `soluong`, `thanhtien`) VALUES ('$idtaikhoan','$idsanpham','$soluong','$thanhtien')";
        pdo_execute($query);
    }
    function delete_giohang($idsanpham,$idtaikhoan){
        $query="DELETE FROM giohang WHERE 1";
        if($idsanpham>0){
            $query .=" AND idsanpham=".$idsanpham;
        }
        if($idtaikhoan>0){
            $query .=" AND idtaikhoan=".$idtaikhoan;
        }
        pdo_execute($query);
    }
    function delete_chitietdh($iddonhang){
        $query="DELETE FROM chitietdonhang WHERE iddonhang='$iddonhang'";
        pdo_execute($query);
    }
    function huydonhang($id){
        $query="DELETE FROM chitietdonhang WHERE id='$id'";
        pdo_execute($query);
    }
    function delete_donhang($iddonhang){
        $query="DELETE FROM donhang WHERE id='$iddonhang'";
        pdo_execute($query);
    }
    function update_giohang($soluong,$thanhtien,$idsanpham){
        $query="UPDATE `giohang` SET `soluong`='$soluong',`thanhtien`='$thanhtien' WHERE idsanpham=".$idsanpham;
        pdo_execute($query);
    }
    function update_donhang($trangthai,$iddonhang,$ngaydathang){
        $query="UPDATE `donhang` SET `trangthai`='$trangthai',`ngaydathang`='$ngaydathang' WHERE id=".$iddonhang;
        pdo_execute($query);
    }
    function update_donhang_thanhtoan($trangthai,$thanhtoan,$iddonhang){
        $query="UPDATE `donhang` SET `thanhtoan`='$thanhtoan',`trangthai`='$trangthai' WHERE id=".$iddonhang;
        pdo_execute($query);
    }
    function load_one_dh($id){
        $query="SELECT * FROM donhang WHERE id=".$id;
        return pdo_query_one($query);
    }
    function load_one_gh($idsanpham){
        $query="SELECT * FROM giohang WHERE idsanpham=".$idsanpham;
        return pdo_query_one($query);
    }
    function load_ctdh_delete($iddh){
        $query="SELECT COUNT(*) FROM chitietdonhang WHERE iddonhang=".$iddh;
        return pdo_query_one($query);
    }
    function load_all_giohang($idtaikhoan){
        $query="SELECT giohang.id, giohang.idtaikhoan, giohang.idsanpham, giohang.soluong, giohang.thanhtien,
        sanpham.id as idsp, sanpham.iddm, sanpham.tensp, sanpham.giasp, sanpham.giakm, sanpham.image, sanpham.soluong as soluongsp, sanpham.trangthai, sanpham.khuyenmai FROM giohang 
        INNER JOIN sanpham ON giohang.idsanpham=sanpham.id WHERE idtaikhoan=".$idtaikhoan;
        return pdo_query($query);
    }
    function load_all_duyetdon($kyw){
        $query="SELECT donhang.id as iddh, donhang.idtaikhoan, donhang.hovatennhan, donhang.ngaydathang, donhang.diachinhan, donhang.sodienthoainhan, donhang.phuongthuctt, donhang.trangthai, donhang.thanhtoan,
         SUM(chitietdonhang.soluong) as soluongct, SUM(chitietdonhang.thanhtien) as thanhtien,
         taikhoan.id as idtk, taikhoan.hovaten, taikhoan.tendangnhap, taikhoan.matkhau, taikhoan.email, taikhoan.sodienthoai, taikhoan.diachi FROM chitietdonhang 
         INNER JOIN donhang ON donhang.id=chitietdonhang.iddonhang 
         INNER JOIN taikhoan ON donhang.idtaikhoan=taikhoan.id WHERE donhang.trangthai='0'";
        if($kyw!=''){
            $query .=" AND (donhang.diachinhan LIKE '%" . $kyw . "%' OR donhang.sodienthoainhan LIKE '%" . $kyw . "%' OR taikhoan.tendangnhap LIKE '%" . $kyw . "%')";
        }
        $query .=" GROUP BY chitietdonhang.iddonhang ORDER BY iddh desc";
        return pdo_query($query);
    }
    function load_all_ctdh($kyw){
        $query="SELECT donhang.id as iddh, donhang.idtaikhoan, donhang.hovatennhan, donhang.ngaydathang, donhang.diachinhan, donhang.sodienthoainhan, donhang.phuongthuctt, donhang.trangthai,donhang.thanhtoan,
         SUM(chitietdonhang.soluong) as soluongct, SUM(chitietdonhang.thanhtien) as thanhtien,
         taikhoan.id as idtk, taikhoan.hovaten, taikhoan.tendangnhap, taikhoan.matkhau, taikhoan.email, taikhoan.sodienthoai, taikhoan.diachi FROM chitietdonhang 
         INNER JOIN donhang ON donhang.id=chitietdonhang.iddonhang 
         INNER JOIN taikhoan ON donhang.idtaikhoan=taikhoan.id WHERE donhang.trangthai IN ('1','2', '3')";
        if($kyw!=''){
            $query .=" AND (donhang.diachinhan LIKE '%" . $kyw . "%' OR donhang.sodienthoainhan LIKE '%" . $kyw . "%' OR taikhoan.tendangnhap LIKE '%" . $kyw . "%')";
        }
        $query .=" GROUP BY chitietdonhang.iddonhang ORDER BY iddh desc";
        return pdo_query($query);
    }
    function dagiao($kyw,$trangthai){
        $query="SELECT donhang.id as iddh, donhang.idtaikhoan, donhang.hovatennhan, donhang.ngaydathang, donhang.diachinhan, donhang.sodienthoainhan, donhang.phuongthuctt, donhang.trangthai,donhang.thanhtoan,
         SUM(chitietdonhang.soluong) as soluongct, SUM(chitietdonhang.thanhtien) as thanhtien,
         taikhoan.id as idtk, taikhoan.hovaten, taikhoan.tendangnhap, taikhoan.matkhau, taikhoan.email, taikhoan.sodienthoai, taikhoan.diachi FROM chitietdonhang 
         INNER JOIN donhang ON donhang.id=chitietdonhang.iddonhang 
         INNER JOIN taikhoan ON donhang.idtaikhoan=taikhoan.id WHERE 1";
        if($kyw!=''){
            $query .=" AND (donhang.diachinhan LIKE '%" . $kyw . "%' OR donhang.sodienthoainhan LIKE '%" . $kyw . "%' OR taikhoan.tendangnhap LIKE '%" . $kyw . "%')";
        }
        if($trangthai==4){
            $query.=" AND donhang.trangthai ='4'";
        }elseif($trangthai==5){
            $query.=" AND donhang.trangthai ='5'";
        }
        $query .=" GROUP BY chitietdonhang.iddonhang ORDER BY iddh desc";
        return pdo_query($query);
    }
    function load_minicart($idtaikhoan){
        $query="SELECT giohang.id, giohang.idtaikhoan, giohang.idsanpham, giohang.soluong, giohang.thanhtien,
        sanpham.id as idsp, sanpham.iddm, sanpham.tensp, sanpham.giasp, sanpham.giakm, sanpham.image, sanpham.soluong as soluongsp, sanpham.trangthai, sanpham.khuyenmai FROM giohang 
        INNER JOIN sanpham ON giohang.idsanpham=sanpham.id WHERE idtaikhoan='$idtaikhoan' ORDER BY giohang.id desc limit 0,2" ;
        return pdo_query($query);
    }
    function count_giohang($idtaikhoan){
        $query="SELECT COUNT(*) FROM giohang WHERE idtaikhoan=".$idtaikhoan;
        return pdo_query_one($query);
    }
    function count_donhang(){
        $query="SELECT COUNT(*) FROM donhang WHERE trangthai='1' OR trangthai='2' OR trangthai='3'";
        return pdo_query_one($query);
    }
    function count_donhang_kiemduyet(){
        $query="SELECT COUNT(*) FROM donhang WHERE trangthai='0'";
        return pdo_query_one($query);
    }
    function mua_hang($idtaikhoan,$hovatennhan,$ngaydathang,$diachinhan,$sodienthoainhan,$phuongthuctt,$trangthai,$thanhtoan){
        $query="INSERT INTO `donhang`(`idtaikhoan`, `hovatennhan`, `ngaydathang`, `diachinhan`, `sodienthoainhan`, `phuongthuctt`, `trangthai`,`thanhtoan`) 
        VALUES ('$idtaikhoan','$hovatennhan','$ngaydathang','$diachinhan','$sodienthoainhan','$phuongthuctt','$trangthai','$thanhtoan')";
        return pdo_execute_return_lastInsertId($query);
    }
    function insert_chitietdonhang($iddonhang,$idsanpham,$soluong,$dongia,$thanhtien){
        $query="INSERT INTO `chitietdonhang`(`iddonhang`, `idsanpham`, `soluong`, `dongia`, `thanhtien`) VALUES ('$iddonhang','$idsanpham','$soluong','$dongia','$thanhtien')";
        pdo_execute($query);
    }
    function load_all_ctdh_lsmh($iddonhang){
        $query="SELECT chitietdonhang.id, chitietdonhang.iddonhang, chitietdonhang.idsanpham, chitietdonhang.soluong, chitietdonhang.dongia, chitietdonhang.thanhtien,
        donhang.id as iddh, donhang.idtaikhoan, donhang.hovatennhan, donhang.ngaydathang, donhang.diachinhan, donhang.sodienthoainhan, donhang.phuongthuctt, donhang.trangthai,
        sanpham.id as idsp, sanpham.iddm, sanpham.tensp, sanpham.giakm, sanpham.image, sanpham.khuyenmai FROM chitietdonhang 
        INNER JOIN donhang ON chitietdonhang.iddonhang=donhang.id
        INNER JOIN sanpham ON chitietdonhang.idsanpham=sanpham.id  WHERE chitietdonhang.iddonhang='$iddonhang'";
        return pdo_query($query);
    }
    function load_all_ctdh_update($iddonhang){
        $query="SELECT chitietdonhang.id, chitietdonhang.iddonhang, chitietdonhang.idsanpham, chitietdonhang.soluong, chitietdonhang.dongia, chitietdonhang.thanhtien,
        donhang.id as iddh, donhang.idtaikhoan, donhang.hovatennhan, donhang.ngaydathang, donhang.diachinhan, donhang.sodienthoainhan, donhang.phuongthuctt, donhang.trangthai,
        sanpham.id as idsp, sanpham.iddm, sanpham.tensp, sanpham.giakm, sanpham.image, sanpham.khuyenmai FROM chitietdonhang 
        INNER JOIN donhang ON chitietdonhang.iddonhang=donhang.id
        INNER JOIN sanpham ON chitietdonhang.idsanpham=sanpham.id  WHERE chitietdonhang.iddonhang='$iddonhang'";
        return pdo_query($query);
    }
    function load_all_dh_lsmh($idtaikhoan,$trangthai){
        $query="SELECT * FROM donhang WHERE idtaikhoan='$idtaikhoan'";
        if($trangthai==0){
            $query .=" AND trangthai='$trangthai'";
        }else if($trangthai==2){
            $query .=" AND (trangthai='1' OR trangthai='2')";
        }else if($trangthai==3){
            $query .=" AND trangthai='$trangthai'";
        }else if($trangthai==4){
            $query .=" AND trangthai='$trangthai'";
        }
        else if($trangthai==5){
            $query .=" AND trangthai='$trangthai'";
        }
        $query .=" ORDER BY id desc";
        return pdo_query($query);
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
        return pdo_query($query);
    }
    function update_thongke($doanhthu,$soluongban,$ngaydat){
        $query="UPDATE thongke SET donhang=(donhang+1),doanhthu=(doanhthu+'$doanhthu'),soluongban=(soluongban+'$soluongban') WHERE ngaydat='$ngaydat'";
        pdo_execute($query);
    }
    function insert_thongke($doanhthu,$soluongban,$ngaydat){
        $query="INSERT INTO `thongke`(`ngaydat`, `donhang`, `doanhthu`, `soluongban`) VALUES ('$ngaydat',1,'$doanhthu','$soluongban')";
        pdo_execute($query);
    }
    function load_dhtk($iddh){
        $query="SELECT * FROM chitietdonhang WHERE iddonhang='$iddh'";
        return pdo_query($query);
    }
    function load_all_checktk(){
        $datenow=date('Y-m-d');
        $query="SELECT ngaydat FROM thongke WHERE ngaydat='$datenow'";
        return pdo_query_one($query);
    }
?>