<?php
require_once 'Model/pdo.php';
require_once 'Model/danhmuc.php';
require_once 'Model/sanpham.php';
require_once 'Model/Account.php';
require_once 'Model/Bienthe.php';
require_once 'Model/order.php';
require_once 'global.php';
require_once 'helper.php';
require_once 'views/header.php';
$listsp = load_sp_home();
$listdm = load_all_dm("");
$list_sp_aothun = load_sp_aothun();
$load_sp_khoac = load_sp_khoac();
$list_sp_aoho = load_sp_aoho();
$list_sp_aosw = load_sp_aosw();

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'dangky':
            $hovatenErr="";
            $tendangnhapErr="";
            $matkhauErr="";
            $emailErr="";
            if(isset($_POST['dangky'])){
                $hovaten=$_POST['hovaten'];
                $dkyemail=$_POST['dkyemail'];
                $dkyuser=$_POST['dkyuser'];
                $dkypass=$_POST['dkypass'];
                $listtk=load_all_tk(0,"");
                $check=true;
                if(empty(trim($hovaten))){$check=false; $hovatenErr="Vui lòng không bỏ trống !";} 
                if(empty(trim($dkyuser))){$check=false; $tendangnhapErr="Vui lòng không bỏ trống !";} 
                if(empty(trim($dkypass))){$check=false; $matkhauErr="Vui lòng không bỏ trống !";}
                if(empty(trim($dkyemail))){$check=false; $emailErr="Vui lòng không bỏ trống !";}
                else{
                }
                if($check) {
                    insert_tk($hovaten,$dkyuser,$dkypass,$dkyemail,"","",'Kích Hoạt');
                    echo '<script>
                            alert("Bạn đã đăng ký tài khoản thành công !");
                            window.location.href="?act=dangnhap";
                        </script>';
                }
            }
            include_once 'views/taikhoan/dangky.php';
        break;
        case 'dangnhap':
            $tkErr="";
            $tendangnhapErr="";
            if(isset($_POST['dangnhap'])){
                $user=$_POST['username'];
                $pass=$_POST['password'];
                $check=true;
                if(empty(trim($user))){$check=false; $tendangnhapErr="Vui lòng không để trống !";}
                if(empty(trim($pass))){$check=false; $tkErr="Vui lòng không để trống !";}
                if($check){
                    $checkuser=check_user($user,$pass);
                    if(is_array($checkuser)){
                        if($checkuser['matkhau']!=$pass||$checkuser['tendangnhap']!=$user){
                            $tkErr="Sai mật khẩu hoặc tên đăng nhập. Vui lòng kiểm tra lại !";
                        }else{
                            $_SESSION['user']=$checkuser;
                            header("location: ?act=trangchu");
                        }
                        
                    }else{
                        $tkErr="Tài khoản không tồn tại. Vui lòng kiểm tra lại hoặc đăng ký !";
                    }
                }
            }

            include_once 'views/taikhoan/dangnhap.php';
        break;
        case 'list_cart_user':
            // if (isset($_GET['id']) && ($_GET['id'] > 0)) {
            // }
            $list_cart_user = list_cart_user();
            $sum_cart_user = sum_cart_user();
            include_once 'views/cart/cart.php';
            break;
        case 'sanpham_ct':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $id = $_GET['id'];
                $pro_ct = load_onespct($id);
                $list_bt = loadAll_bt($id);
                include "views/product_ct/sanpham_ct.php";
            } else {
                include "views/home.php";
            }
            break;

        case 'products':
            if (isset($_POST['submittimkiem'])) $kyw = $_POST['timkiem'];
            else $kyw = "";
            if (isset($_POST['submitlocgia'])) {
                $giadau = $_POST['giaspdau'];
                $giacuoi = $_POST['giaspcuoi'];
            } else {
                $giadau = 0;
                $giacuoi = 0;
            }
            if (isset($_GET['page']) && ($_GET['page'] != "")) $page = $_GET['page'];
            else $page = 1;
            $tongsp = dem_sp();
            $load_all_sp = load_all_sphome(0, $kyw, $giadau, $giacuoi, $page);
            $listdm = load_all_dm("");
            // $load_all_sp = load_all_sp($kyw, $page);
            include_once 'views/products/products.php';
            break;

        case 'spdanhmuc':
            if (isset($_GET['id']) && ($_GET['id'] != "")) {
                if (isset($_POST['submittimkiem'])) $kyw = $_POST['timkiem'];
                else $kyw = "";
                if (isset($_POST['submitlocgia'])) {
                    $giadau = $_POST['giaspdau'];
                    $giacuoi = $_POST['giaspcuoi'];
                } else {
                    $giadau = 0;
                    $giacuoi = 0;
                }
                $list_sp_dm = load_all_spdm($_GET['id'], $kyw, $giadau, $giacuoi, 1);
                $sp = load_one_spdm($_GET['id']);
            }
            include "views/products/spdanhmuc.php";
            break;

        default:
            include "views/home.php";
            break;
    }
} else {
    include "views/home.php";
}
include "views/footer.php";
