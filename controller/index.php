<?php
ob_start();
session_start();
include "../modal/pdo.php";
include "../modal/danhmuc.php";
include "../modal/sanpham.php";
include "../modal/taikhoan.php";
include "../modal/binhluan.php";
include "../modal/donhang.php";
if(isset($_SESSION['user'])) {
    $listgh=load_all_giohang($_SESSION['user']['id']); 
    $countgh=count_giohang($_SESSION['user']['id']);
    $minicart=load_minicart($_SESSION['user']['id']);
}
$list_sp_home=load_sp_home();
$list_sp_nb=load_sp_nb();
$list_sp_aothun=load_sp_aothun();
$list_sp_aoho=load_sp_aoho();
$list_sp_aosw=load_sp_aosw();
$listdm=load_all_dm("");
include "../view/header.php";
if(isset($_GET['act'])&&($_GET['act']!="")){
    $act=$_GET['act'];
    switch ($act) {
        case 'sanpham':
            if(isset($_POST['submittimkiem'])) $kyw=$_POST['timkiem'];
            else $kyw="";
            // $dssp_new = selectAll_NewProduct(12);
            if(isset($_GET['page'])&&($_GET['page']!="")) $page=$_GET['page'];
            else $page=1;
            $tongsp=dem_sp();
            $list_sp_home=load_all_sp($kyw, $page);
            include "../view/sanpham/sanpham.php";
            break;
        case 'spdanhmuc':
            if(isset($_GET['id'])&&($_GET['id']!="")){
                if(isset($_POST['submittimkiem'])) $kyw=$_POST['timkiem'];
                else $kyw="";
                if(isset($_POST['submitlocgia'])){
                    $giadau=$_POST['giaspdau'];
                    $giacuoi=$_POST['giaspcuoi'];
                }else{
                    $giadau=0;
                    $giacuoi=0;
                }
                $list_sp_dm=load_all_spdm($_GET['id'],$kyw,$giadau,$giacuoi,1);
                $sp=load_one_spdm($_GET['id']);
            }
            include "../view/sanpham/spdanhmuc.php";
            break;
        case 'chitietsp':
            if (isset($_GET['id'])&& ($_GET['id']!="")){
                $id = $_GET['id'];
                $sanpham = load_one_sp($id);
                if($sanpham){
                    $luotxem=$sanpham['luotxem']+1;
                    update_luotxem_sp($sanpham['id'],$luotxem);
                    $noidungErr="";
                    if($_SERVER["REQUEST_METHOD"] == "POST"){
                        $noidung=$_POST['noidung'];
                        $ngaybinhluan=date('Y-m-d');
                        if(empty(trim($noidung))){
                            $noidungErr="Vui lòng nhập nội dung bình luận trước khi gửi !";
                        }else{
                            insert_bl($_SESSION['user']['id'],$sanpham['id'],$noidung,$ngaybinhluan);
                        }
                    }
                    $splq = load_sp_lq($sanpham['iddm']);
                    $listbl=load_bl_sp($sanpham['id']);
                    $danhmuc = load_one_dm($sanpham['iddm']);
                    $dembl=dem_bl_sp($sanpham['id']);
                    if(isset($_POST['datngayct'])){
                        if(isset($_SESSION['user'])){
                            $soluong = 1;
                            $thanhtien = $sanpham['giakm'] * $soluong;
                            $check = true;
                            foreach ($listgh as $giohang) {
                                if ($sanpham['id'] == $giohang['idsanpham']) {
                                    $giohang['soluong'] += $soluong;
                                    $giohang['thanhtien'] = $sanpham['giakm'] * $giohang['soluong'];
                                    update_giohang($giohang['soluong'],$giohang['thanhtien'],$giohang['idsanpham']);
                                    $check = false;
                                    header("location: ?act=giohang");
                                    break;
                                    }
                                }
                                if ($check) {
                                    insert_cart($_SESSION['user']['id'], $sanpham['id'], $soluong, $thanhtien);
                                    header("location: ?act=giohang");
                                }
                        }else{
                            header("location: ?act=dangnhap");
                        }
                    }
                }

            }
            include "../view/sanpham/chitietsp.php";
            break;
            if(isset($_SESSION['user'])){
                if(isset($_GET['id'])&&($_GET['id']!="")){
                    $id=$_GET['id'];
                    $donhang=load_one_dh($id);
                    if($donhang){
                        $listctdh=load_all_ctdh_lsmh($donhang['id']);
                    }
                    
                }
            }else{ header("location: ?act=dangnhap");};
           include "../view/cart/chitiethuydon.php";
            break;
            if($_SERVER['REQUEST_METHOD']=="POST"){
                $hovatenlh=$_POST['hovatenlh'];
                $emaillh=$_POST['emaillh'];
                $sodienthoailh=$_POST['sodienthoailh'];
                $noidunglh=$_POST['noidunglh'];
                date_default_timezone_set('Asia/Ho_Chi_Minh');
                $ngaygui = date('Y-m-d H:i:s');
                insert_lienhe($hovatenlh,$emaillh,$sodienthoailh,$noidunglh,$ngaygui);
            }
            include "../view/tintuc/lienhe.php";
            break;
        default:
        include "../view/home.php";
            break;
    }
}else{
    include "../view/home.php";
}

include "../view/footer.php";
?>