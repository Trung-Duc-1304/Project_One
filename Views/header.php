<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from static.laralink.com/html/sattiyas/home-v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Mar 2024 15:07:40 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Laralink">
    <title>𝒇𝒂𝒔𝒉𝒊𝒐𝒏</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="https://img.logoipsum.com/296.svg">
    <!-- Plugins css -->
    <link rel="stylesheet" href="assets/client/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/client/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/client/css/slick.css">
    <link rel="stylesheet" href="assets/client/css/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/client/css/animated-headline.css">
    <!-- Custom css -->
    <link rel="stylesheet" href="assets/client/css/style.css">
</head>

<body>
    <!-- Start Preloader -->
    <!-- <div class="cs_perloader">
        <div class="cs_perloader_in">
            <svg class="cs_cart_animation" role="img" aria-label="Sattiyas Preloader" viewBox="0 0 128 128" width="128px" height="128px" xmlns="http://www.w3.org/2000/svg">
                <g fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="8">
                    <g class="cs_cart_track" stroke="hsla(0,10%,10%,0.1)">
                        <polyline points="4,4 21,4 26,22 124,22 112,64 35,64 39,80 106,80" />
                        <circle cx="43" cy="111" r="13" />
                        <circle cx="102" cy="111" r="13" />
                    </g>
                    <g class="cs_cart_lines" stroke="currentColor">
                        <polyline class="cs_cart_top" points="4,4 21,4 26,22 124,22 112,64 35,64 39,80 106,80" stroke-dasharray="338 338" stroke-dashoffset="-338" />
                        <g class="cs_cart_wheel_1" transform="rotate(-90,43,111)">
                            <circle class="cs_cart_wheel_stroke" cx="43" cy="111" r="13" stroke-dasharray="81.68 81.68" stroke-dashoffset="81.68" />
                        </g>
                        <g class="cs_cart_wheel_2" transform="rotate(90,102,111)">
                            <circle class="cs_cart_wheel_stroke" cx="102" cy="111" r="13" stroke-dasharray="81.68 81.68" stroke-dashoffset="81.68" />
                        </g>
                    </g>
                </g>
            </svg>
            <span class="cs_perloader_text">Welcome to Sattiyas. Loading...</span>
        </div>
    </div> -->
    <!-- End Preloader -->
    <!-- Start header -->
    <header class="cs_site_header cs_style_1 cs_primary_color cs_site_header_full_width cs_sticky_header">
        <div class="cs_main_header">
            <div class="container-fluid">
                <div class="cs_main_header_in">
                    <div class="cs_main_header_left mt-2">
                        <a class="cs_site_branding" href="index.php">
                            <h2>𝒇𝒂𝒔𝒉𝒊𝒐𝒏</h2>
                        </a>
                    </div>
                    <div class="cs_main_header_center">
                        <div class="cs_nav cs_medium">
                            <ul class="cs_nav_list">
                                <li class="menu-item-has">
                                    <a href="index.php">Trang Chủ</a>

                                </li>
                                <li class="menu-item-has">
                                    <a href="index.php?act=products">Sản phẩm</a>
                                </li>

                                <li class="menu-item-has">
                                    <a href="index.php?act=products">Bài Viết</a>
                                </li>
                                <li class="menu-item-has">
                                    <a href="index.php?act=products">Liên Hệ</a>
                                </li>
                                <li class="menu-item-has">
                                    <a href="index.php?act=products">FAQ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="cs_main_header_right">
                        <div class="cs_header_action">
                            <button type="button" class="cs_action_icon cs_header_search_btn">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                            <?php
                            if (isset($_SESSION['user']) && $_SESSION['user'] != "") {
                                extract($_SESSION['user']);
                            ?>
                                <a href="?act=list_cart_user&id=31" class="cs_action_icon">
                                    <i class="fa-solid fa-cart-plus"></i>
                                </a>
                                <a href="?act=account" class="cs_action_icon fw-bold d-flex justify-content-center align-items-center text-primary gap-1">
                                    <i class="fa-solid fa-user-gear"></i> <?= $tendangnhap ?>
                                    <a href="?act=logout"><i class="fa-solid fa-right-from-bracket text-danger"></i></a>
                                </a>
                            <?php } else { ?>
                                <a href="?act=login" class="cs_action_icon cs_modal_btn">
                                    <i class="fa-solid fa-user-gear"></i>
                                </a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cs_header_search_wrap">
            <div class="container">
                <div class="cs_header_search_in">
                    <div class="cs_hero_search_heading">
                        <h3>Bạn muốn tìm kiếm sản phẩm gì?</h3>
                        <button class="cs_header_search_close" type="button"><i class="fa-solid fa-xmark"></i></button>
                    </div>
                    <form action="?act=products" method="post" class="cs_header_search_form">
                        <input type="text" placeholder="Search..." name="timkiem" value="<?php isset($kyw) ? ($kyw) : '' ?>">
                        <button type="submit" name="submittimkiem">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <div class="cs_height_80 cs_height_lg_80"></div>
    <!-- End header -->