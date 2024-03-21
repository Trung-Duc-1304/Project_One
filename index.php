<?php
require_once 'Model/pdo.php';
require_once 'Model/danhmuc.php';
require_once 'Model/sanpham.php';
require_once 'Model/Account.php';
require_once 'Model/Bienthe.php';
require_once 'global.php';
require_once 'helper.php';
require_once 'views/header.php';
$listsp = load_sp_home();


if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'cart':
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
            if (isset($_POST['search'])) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['page']) && ($_GET['page'] != ""))
                $page = $_GET['page'];
            else
                $page = 1;
            $tongsp = dem_sp();
            $load_all_sp = load_all_sp($kyw, $page);
            include_once 'views/products/products.php';
            break;
            
        default:
            include "views/home.php";
            break;
    }
} else {
    include "views/home.php";
}
include "views/footer.php";
