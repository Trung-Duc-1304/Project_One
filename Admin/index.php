<?php
ob_start();
session_start();
if(!isset($_SESSION['user'])||($_SESSION['user']['role']!=1)){
    header("location: ../index.php");
}
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/taikhoan.php";
include "../model/binhluan.php";
include "../model/donhang.php";
include "header.php";
$countdh=count_donhang();
$countbl=count_bl();
$counttk=count_tk();
$tongluotxem=sum_luotxem();
if(isset($_GET['act'])&&($_GET['act']!="")){
    $act=$_GET['act'];
    switch ($act) {
        //danh muc
        case 'listdm':
            if(isset($_POST['search'])){
                $kyw=$_POST['kyw'];
            }else{
                $kyw='';
            }
            $listdm=load_all_dm($kyw);
            include "danhmuc/list.php";
            break;
        case 'adddm':
            $tendmErr="";
            if(isset($_POST['submit'])){
                $tendm=$_POST['tendm'];
                if(empty(trim($tendm))){
                    $tendmErr="Vui lòng nhập tên danh mục !";
                }else{
                        insert_dm($tendm);      
                }
            }
            include "danhmuc/add.php";
            break;
        case 'updatedm':
            $tendmErr="";
            if(isset($_GET['id'])&&($_GET['id']!="")){
                $id=$_GET['id'];
                $dm=load_one_dm($id);
                if($dm){
                    $id=$dm['id'];
                    $tendm=$dm['tendm'];
                }
            }
            if(isset($_POST['submit'])){
                $id=$_POST['id'];
                $tendm=$_POST['tendm'];
                if(empty(trim($tendm))){
                    $tendmErr="Vui lòng nhập tên danh mục !";
                }else{
                        update_dm($id,$tendm);
                        echo '<script>
                            alert("Bạn đã sửa danh mục thành công !");
                            window.location.href="?act=listdm";
                        </script>';
                    
                }
            }
            include "danhmuc/update.php";
            break;
        case 'xoadm':
            if(isset($_GET['id'])&&($_GET['id']!="")){
                $id=$_GET['id'];
                $listsp=load_one_spdm($id);
                foreach ($listsp as $sp) {
                    delete_sp_dm($sp['iddm']);
                }
                delete_dm($id);
                echo '<script>
                        alert("Bạn đã xóa danh mục thành công !");
                        window.location.href="?act=listdm";
                    </script>';
            }
            include "danhmuc/list.php";
            break;

        //san pham
        case 'listsp':
            if(isset($_POST['search'])){
                $kyw=$_POST['kyw'];
            }else{
                $kyw="";
            }
            if(isset($_GET['page'])&&($_GET['page']!="")) $page=$_GET['page'];
            else $page=1;
            $tongsp=dem_sp();
            $listsp=load_all_sp($kyw,$page);
            include "sanpham/list.php";
            break;
        case 'addsp':
            $tenspErr="";
            $imageErr="";
            $motaErr="";
            if(isset($_POST['submit'])){
                $tensp=$_POST['tensp'];
                $giasp=$_POST['giasp'];
                $image=basename($_FILES['image']['name']);
                $soluong=$_POST['soluong'];
                $khuyenmai=$_POST['khuyenmai'];
                $mota=$_POST['mota'];
                $danhmuc=$_POST['danhmuc'];
                $check=true;
                if(empty(trim($tensp))){
                    $tenspErr="Vui lòng nhập tên sản phẩm !";
                    $check=false;
                }
                if(empty(trim($mota))){
                    $motaErr="Vui lòng nhập mô tả sản phẩm !";
                    $check=false;
                }
                if(empty($giasp)) $giasp=1;
                if(empty($soluong)) $soluong=1;
                if(empty($khuyenmai)) $khuyenmai=0;
                $giakm=intval($giasp)*((100-intval($khuyenmai))/100);
                if(empty($image)){
                    $check=false;
                    $imageErr="Vui lòng uploads file ảnh !";
                }else{
                    $file_tmp=$_FILES['image']['tmp_name'];
                    $target_file="../uploads/".$image;
                    $extension=pathinfo($target_file,PATHINFO_EXTENSION);
                    if(!in_array($extension,["png","jpeg","jpg","webp"])){
                        $check=false;
                        $imageErr="File không đúng định dạng !";
                    }else{
                        if($check){
                            move_uploaded_file($file_tmp,$target_file);
                        }
                    }
                }
                if($check){
                    insert_sp($danhmuc, $tensp, $giasp, $image,$giakm, $soluong,$khuyenmai, $mota);                 
                }
            }
            $listdm=load_all_dm("");
            include "sanpham/add.php";
            break;
        case 'updatesp':
            if(isset($_GET['id'])&&($_GET['id']!="")){
                $id=$_GET['id'];
                $sp=load_one_sp($id);
                if($sp){
                    $id=$sp['id'];
                    $oldImage=$sp['image'];
                    $tensp=$sp['tensp'];
                    $giasp=$sp['giasp'];
                    $soluong=$sp['soluong'];
                    $khuyenmai=$sp['khuyenmai'];
                    $mota=$sp['mota'];
                    $danhmuc=$sp['iddm'];
                }
            }
            $tenspErr="";
            $imageErr="";
            $trangthai=0;
            if(isset($_POST['submit'])){
                $id=$_POST['id'];
                $oldImage=$_POST['oldImage'];
                $tensp=$_POST['tensp'];
                $giasp=$_POST['giasp'];
                $image=basename($_FILES['image']['name']);
                $soluong=$_POST['soluong'];
                $khuyenmai=$_POST['khuyenmai'];
                $mota=$_POST['mota'];
                $danhmuc=$_POST['danhmuc'];
                $check=true;
                if(empty(trim($tensp))){
                    $tenspErr="Vui lòng nhập tên sản phẩm !";
                    $check=false;
                }
                if(empty($giasp)||($giasp<1)) $giasp=1;
                if(empty($khuyenmai)||($khuyenmai<0)) $khuyenmai=0;
                if(empty($soluong)||($soluong<0)){$soluong=0;$trangthai=1;}
                $giakm=intval($giasp)*((100-intval($khuyenmai))/100);
                if(empty($image)){
                    $image=$oldImage;
                }else{
                    $file_tmp=$_FILES['image']['tmp_name'];
                    $target_file="../uploads/".$image;
                    $extension=pathinfo($target_file,PATHINFO_EXTENSION);
                    if(!in_array($extension,["png","jpeg","jpg","webp"])){
                        $check=false;
                        $imageErr="File không đúng định dạng !";
                    }else{
                        if($check){
                            move_uploaded_file($file_tmp,$target_file);
                            unlink("../uploads/".$oldImage);
                        }
                    }
                }
                if($check){
                    update_sp($id,$danhmuc,$tensp,$giasp,$giakm,$image,$oldImage,$soluong,$khuyenmai,$mota,$trangthai);
                    echo '<script>
                        alert("Bạn đã sửa sản phẩm thành công !");
                        window.location.href="?act=listsp";
                    </script>';
                }
            }
            $listdm=load_all_dm("");
            include "sanpham/update.php";
            break;
        case 'xoasp':
            if(isset($_GET['id'])&&($_GET['id']!="")){
                $id=$_GET['id'];
                $sp=load_one_sp($id);
                if($sp){
                    unlink("../uploads/".$sp['image']);
                    delete_sp($sp['id']);
                    echo '<script>
                        alert("Bạn đã xóa sản phẩm thành công !");
                        window.location.href="?act=listsp";
                    </script>';
                }
            }
            $listsp=load_all_sp("",0);
            include "sanpham/list.php";
            break;
        //thanh vien
        case 'addtk':
            $tendangnhapErr="";
            $matkhauErr="";
            $emailErr="";
            $sodienthoaiErr="";
            $hovatenErr="";
            $diachiErr="";
            if(isset($_POST['submit'])){
                $hovaten=$_POST['hovaten'];
                $tendangnhap=$_POST['tendangnhap'];
                $matkhau=$_POST['matkhau'];
                $email=$_POST['email'];
                $sodienthoai=$_POST['sodienthoai'];
                $diachi=$_POST['diachi'];
                $role=$_POST['role'];
                $listtk=load_all_tk(0,"");
                $check=true;
                if(empty(trim($hovaten))){$check=false; $hovatenErr="Vui lòng không bỏ trống !";} 
                if(empty(trim($tendangnhap))){$check=false; $tendangnhapErr="Vui lòng không bỏ trống !";}
                if(empty(trim($matkhau))){$check=false; $matkhauErr="Vui lòng không bỏ trống !";}
                if(empty(trim($email))){$check=false; $emailErr="Vui lòng không bỏ trống !";}
                if(empty(trim($sodienthoai))){$check=false; $sodienthoaiErr="Vui lòng không bỏ trống !";}
                if(empty(trim($diachi))){$check=false; $diachiErr="Vui lòng không bỏ trống !";}
                if($check){
                    insert_tk($hovaten,$tendangnhap,$matkhau,$email,$sodienthoai,$diachi,$role);
                    if($role==0){
                        echo '<script>
                                alert("Bạn đã thêm tài khoản thành công !");
                                window.location.href="?act=listtv";
                            </script>';
                    }else{
                        echo '<script>
                                alert("Bạn đã thêm tài khoản thành công !");
                                window.location.href="?act=listqtv";
                            </script>';
                    }
                    
                }
            }
            include "taikhoan/add.php";
            break;
        case 'listtv':
            if(isset($_POST['search'])){
                $kyw=$_POST['kyw'];
            }else{
                $kyw="";
            }
            $listtk=load_all_tk(0,$kyw);
            include "taikhoan/listtv.php";
            break;
        case 'listqtv':
            if(isset($_POST['search'])){
                $kyw=$_POST['kyw'];
            }else{
                $kyw="";
            }
            $listtk=load_all_tk(1,$kyw);
            include "taikhoan/listqtv.php";
            break;
        case 'listtkkhoa':
            if(isset($_POST['search'])){
                $kyw=$_POST['kyw'];
            }else{
                $kyw="";
            }
            $listtk=load_all_tk(2,$kyw);
            include "taikhoan/listtkkhoa.php";
            break;
        case 'mokhoatk':
            if(isset($_GET['id'])&&($_GET['id']!='')){
                $id=$_GET['id'];
                $tk=load_one_tk($id);
                if($tk){
                    update_trangthai_tk($tk['id'],0);
                    header("location: ?act=listtkkhoa");
                }
            }
            break;
        case 'updatetk':
            if(isset($_GET['id'])&&($_GET['id']!="")){
                $id=$_GET['id'];
                $tk=load_one_tk($id);
                if($tk){
                    $id=$tk['id'];
                    $hovaten=$tk['hovaten'];
                    $tendangnhap=$tk['tendangnhap'];
                    $matkhau=$tk['matkhau'];
                    $email=$tk['email'];
                    $sodienthoai=$tk['sodienthoai'];
                    $diachi=$tk['diachi'];
                    $role=$tk['role'];
                }
            }
            $tendangnhapErr="";
            $matkhauErr="";
            $emailErr="";
            $sodienthoaiErr="";
            $hovatenErr="";
            if(isset($_POST['submit'])){
                $id=$_POST['id'];
                $hovaten=$_POST['hovaten'];
                $tendangnhap=$_POST['tendangnhap'];
                $matkhau=$_POST['matkhau'];
                $email=$_POST['email'];
                $sodienthoai=$_POST['sodienthoai'];
                $diachi=$_POST['diachi'];
                $role=$_POST['role'];
                $check=true;
                if(empty(trim($hovaten))){$hovatenErr="";} 
                if(empty(trim($tendangnhap))){$check=false; $tendangnhapErr="Vui lòng không bỏ trống !";} 
                if(empty(trim($matkhau))){$check=false; $matkhauErr="Vui lòng không bỏ trống !";}
                if(empty(trim($email))){$check=false; $emailErr="Vui lòng không bỏ trống !";}
                if(empty($sodienthoai)) {$check=false; $sodienthoaiErr="Vui lòng không bỏ trống !";}
                if($check){
                    update_tk($id,$hovaten,$tendangnhap,$matkhau,$email,$sodienthoai,$diachi,$role);
                    echo '<script>
                        alert("Bạn đã sửa tài khoản thành công !");
                    </script>';
                }
            }
            include "taikhoan/update.php";
            break;
        case 'xoatk':
            $vaitro="";
            $duongdan="";
            if(isset($_GET['id'])&&($_GET['id']!="")){
                $id=$_GET['id'];
                $tk=load_one_tk($id);
                if($tk){
                    update_trangthai_tk($tk['id'],1);
                    if($tk['role']==0){
                        $vaitro=0;
                        $duongdan="sanpham/listtv.php";
                        echo '<script>
                            alert("Bạn đã khóa tài khoản thành công !");
                            window.location.href="?act=listtv";
                        </script>';
                    }else if($tk['role']==1){
                        $vaitro=1;
                        $duongdan="sanpham/listqtv.php";
                        echo '<script>
                            alert("Bạn đã khóa tài khoản thành công !");
                            window.location.href="?act=listqtv";
                        </script>';
                    }
                }
            }else{$duongdan="home.php";}
            $list=load_all_tk($vaitro,"");
            include $duongdan;
            break;
        //don hang
        case 'listdh':
            if(isset($_POST['search'])){
                $kyw=$_POST['kyw'];
            }else{
                $kyw="";
            }
            $listdh=load_all_ctdh($kyw);
            include "donhang/list.php";
            break;
        case 'kiemduyet':
            if(isset($_POST['search'])){
                $kyw=$_POST['kyw'];
            }else{
                $kyw="";
            }
            $listdh=load_all_duyetdon($kyw);
            include "donhang/kiemduyet.php";
            break;
        case 'duyetdon':
            if(isset($_GET['id'])&&($_GET['id']!="")){
                $id=$_GET['id'];
                $dh=load_one_dh($id);
                if($dh){
                    $ngaydathang=$dh['ngaydathang'];
                    update_donhang(2,$id,$ngaydathang);
                    header("location:?act=kiemduyet");
                }
            }
            include "donhang/kiemduyet.php";
            break;
        case 'dagiao':
            if(isset($_POST['search'])){
                $kyw=$_POST['kyw'];
            }else{
                $kyw="";
            }
            $listdh=dagiao($kyw,4);
            include "donhang/dagiao.php";
            break;
        case 'dahuy':
            if(isset($_POST['search'])){
                $kyw=$_POST['kyw'];
            }else{
                $kyw="";
            }
            $listdh=dagiao($kyw,5);
            include "donhang/dahuy.php";
            break;
        case 'suadh':
            if(isset($_GET['id'])&&($_GET['id']!="")){
                $id=$_GET['id'];
                $dh=load_one_dh($id);
                if($dh){
                    $id=$dh['id'];
                    $hovatennhan=$dh['hovatennhan'];
                    $sodienthoainhan=$dh['sodienthoainhan'];
                    $diachinhan=$dh['diachinhan'];
                    $trangthai=$dh['trangthai'];
                    $ngaydathang=$dh['ngaydathang'];
                    $thanhtoan=$dh['thanhtoan'];
                    $ctdh=load_all_ctdh_update($dh['id']);
                }
            }
            if(isset($_POST['submit'])){
                $id=$_POST['id'];
                $trangthai=$_POST['trangthai'];
                $ngaydathang=$_POST['ngaydathang'];
                update_donhang($trangthai,$id,$ngaydathang);
                if($trangthai==4){
                    $doanhthu=0;
                    $soluongban=0;
                    $dhthongke=load_dhtk($id);
                    foreach ($dhthongke as $thongke) {
                        extract($thongke);
                        $doanhthu+=$thanhtien;
                        $soluongban+=$soluong;
                    }
                    $checkthongke=load_all_checktk();
                    if($checkthongke!=0){
                        update_thongke($doanhthu,$soluongban,date('Y-m-d'));
                        
                    }else{
                        insert_thongke($doanhthu,$soluongban,date('Y-m-d'));
                    }
                }
                header("location: ?act=listdh");
            }
            include "donhang/update.php";
            break;
        case 'xoadh':
            if(isset($_GET['id'])&&($_GET['id']!="")){
                $id=$_GET['id'];
                $listdh=load_one_dh($id);
                if($listdh){
                    date_default_timezone_set('Asia/Ho_Chi_Minh');
                    $ngayhuydon = date('Y-m-d H:i:s');
                    update_donhang(5,$listdh['id'],$ngayhuydon);
                    $listctdh=load_all_ctdh_lsmh($listdh['id']);
                    foreach ($listctdh as $ct) {
                        $sp=load_one_sp($ct['idsp']);
                        if($sp['id']==$ct['idsp']){
                            $sp['soluong']+=$ct['soluong'];
                            update_sl_sp($sp['id'],$sp['soluong']);
                        }
                    }
                    if($listdh['trangthai']==0){
                        header("location: ?act=kiemduyet");
                    }else{
                        header("location: ?act=listdh");
                    }
                }
                
            }
            break;
        //binhluan
        case 'listbl':
            if(isset($_POST['search'])){
                $kyw=$_POST['kyw'];
            }else{
                $kyw="";
            }
            $listbl=load_all_bl($kyw);
            include "binhluan/list.php";
            break;
        case 'xoabl':
            if(isset($_GET['id'])&&($_GET['id']!="")){
                $id=$_GET['id'];
                delete_bl($id);
                echo '<script>
                        alert("Bạn đã xóa bình luận thành công !");
                        window.location.href="?act=listbl";
                    </script>';
            }
            $listbl=load_all_bl("");
            include "binhluan/list.php";
            break;
        //thongke
            include "thongke/bieudo.php";
            break; 
        case 'danhsachthongke': 
            $listthongke=load_all_thongke(365);
            include "thongke/list.php";
            break;   
            if(isset($_GET['id'])&&($_GET['id']!="")){
                $id=$_GET['id'];
                $banner=load_one_banner($id);
                if($banner){
                    delete_banner($banner['idbanner']);
                    echo '<script>
                        alert("Bạn đã xóa thành công !");
                        window.location.href="?act=qlbanner";
                    </script>';
                }
            }
            break;
        default:
        include "home.php";
            break;
    }
}else{
    include "home.php";
}


include "footer.php";
?>