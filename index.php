<?php
//test
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
                $splq = load_sp_lq($pro_ct['iddm']);
                $soluong =1;
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
