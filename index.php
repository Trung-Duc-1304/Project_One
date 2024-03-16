<?php
require_once 'Model/pdo.php';
require_once 'Model/danhmuc.php';
require_once 'Model/sanpham.php';
require_once 'Model/Account.php';
require_once 'Model/Bienthe.php';
require_once 'global.php';
require_once 'views/header.php';
$listsp = load_all_sp(0, "");

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case'cart':
            include_once 'views/cart/cart.php';
            break;

        default:
            include "views/home.php";
            break;
    }
} else {
    include "views/home.php";
}
include "views/footer.php";
