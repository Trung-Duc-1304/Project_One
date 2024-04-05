<?php
session_start();
ob_start();
require_once '../Model/pdo.php';
require_once '../Model/danhmuc.php';
require_once '../Model/sanpham.php';
require_once '../Model/Account.php';
require_once '../Model/Bienthe.php';
require_once '../Model/order.php';
require_once '../global.php';
require_once 'header.php';

function checkRole()
{
    // Kiểm tra xem người dùng có quyền admin không
    if ($_SESSION['role'] != "Admin" && $_SESSION['role'] != "Nhân Viên") {
        // Nếu không phải admin, chuyển hướng người dùng đến trang không có quyền
        header("Location: login.php");
        exit();
    }
}
// Kiểm tra đăng nhập
if (isset($_SESSION['tendangnhap'])) {
    // Gọi hàm kiểm tra quyền sau khi đăng nhập
    checkRole();
    // Người dùng có quyền admin đã đăng nhập, có thể hiển thị trang chính
} else {
    // Người dùng chưa đăng nhập, chuyển hướng đến trang đăng nhập
    header("Location: login.php");
    exit();
}

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'create_danh_muc':
            $tendmErr = "";
            if (isset($_POST['submit'])) {
                $tendm = $_POST['tendm'];
                if (empty(trim($tendm))) {
                    $tendmErr = "Vui lòng nhập tên danh mục !";
                } else {
                    insert_dm($tendm);
                }
            }
            require_once './Danh_Muc/add.php';
            break;

        case 'list_dm':
            if (isset($_POST['search'])) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = '';
            }
            $listdm = load_all_dm($kyw);
            require_once './Danh_Muc/list.php';
            break;

        case 'update_dm':
            $tendmErr = "";
            if (isset($_GET['id']) && ($_GET['id'] != "")) {
                $id = $_GET['id'];
                $dm = load_one_dm($id);
                if ($dm) {
                    $id = $dm['id'];
                    $tendm = $dm['tendm'];
                }
            }
            if (isset($_POST['submit'])) {
                $id = $_POST['id'];
                $tendm = $_POST['tendm'];
                if (empty(trim($tendm))) {
                    $tendmErr = "Vui lòng nhập tên danh mục !";
                } else {
                    update_dm($id, $tendm);
                    echo '<script>
                                    alert("Bạn đã sửa danh mục thành công !");
                                    window.location.href="?act=list_dm";
                          </script>';
                }
            }
            require_once './Danh_Muc/update.php';
            break;

        case 'delete_dm':
            if (isset($_GET['id']) && ($_GET['id'] != "")) {
                $id = $_GET['id'];
                delete_dm($id);
                echo '<script>
                        alert("Bạn đã xóa danh mục thành công !");
                        window.location.href="?act=list_dm";
                    </script>';
            }
            require_once './Danh_Muc/list.php';
            break;

            // SẢN PHẨM

        case 'list_sp':
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
            $listsp = load_all_sp($kyw, $page);
            include_once './San_Pham/list.php';
            break;

        case 'create_sp':
            $tenspErr = "";
            $imageErr = "";
            $motaErr = "";
            if (isset($_POST['submit'])) {
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $image = basename($_FILES['image']['name']);
                $mota = $_POST['mota'];
                $danhmuc = $_POST['danhmuc'];
                $check = true;

                if (empty(trim($tensp))) {
                    $tenspErr = "Vui lòng nhập tên sản phẩm!";
                    $check = false;
                }

                if (empty(trim($mota))) {
                    $motaErr = "Vui lòng nhập mô tả sản phẩm!";
                    $check = false;
                }

                if (empty($giasp)) {
                    $giasp = 1;
                }

                if (empty($image)) {
                    $check = false;
                    $imageErr = "Vui lòng tải lên file ảnh!";
                } else {
                    $file_tmp = $_FILES['image']['tmp_name'];
                    $target_file = "../uploads/" . $image;
                    $extension = pathinfo($target_file, PATHINFO_EXTENSION);

                    if (!in_array($extension, ["png", "jpeg", "jpg", "webp"])) {
                        $check = false;
                        $imageErr = "File không đúng định dạng!";
                    } else {
                        if ($check) {
                            move_uploaded_file($file_tmp, $target_file);
                        }
                    }
                }

                if ($check) {
                    insert_sp($danhmuc, $tensp, $giasp, $image, $giakm, $khuyenmai, $mota);
                }
            }

            $listdm = load_all_dm("");
            include_once './San_Pham/add.php';
            break;

        case 'sua_sp':
            $sp = load_one_sp();
            $listdm = load_all_dm("");
            include_once './San_Pham/update.php';
            break;

        case 'update_sp':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $iddm = $_POST['danhmuc'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $khuyenmai = $_POST['khuyenmai'];

                $mota = $_POST['mota'];
                $Image = $_FILES['image']['name'];
                $target_dir = "../uploads/";
                $giakm = intval($giasp) * ((100 - intval($khuyenmai)) / 100);
                $target_file = $target_dir . basename($_FILES["image"]["name"]);
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                    // echo "The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                update_sp($id, $iddm, $tensp, $giasp, $khuyenmai,  $giakm, $mota, $Image);
            }
            $listdm = load_all_dm("");
            $listsp = load_all_sp(0, "");
            include_once './San_Pham/list.php';
            break;

        case 'xoa_sp':
            if (isset($_GET['id']) && ($_GET['id'] != "")) {
                $id = $_GET['id'];
                $sp = load_one_sp($id);
                if ($sp) {
                    unlink("../uploads/" . $sp['image']);
                    delete_sp($sp['id']);
                    echo '<script>
                            alert("Bạn đã xóa sản phẩm thành công !");
                            window.location.href="?act=list_sp";
                        </script>';
                }
            }
            $listsp = load_all_sp("", 0);
            include_once './San_Pham/list.php';
            break;

            // GIỎ HÀNG
        case 'list_cart':
            $list_cart = list_cart();
            include_once './Cart/list.php';
            break;

        case 'list_order':
            $list_order = list_order();
            include_once './Order/list.php';
            break;

        case 'update_order':
            $list_order_one = list_order_one();
            include_once './Order/update.php';
            break;

        case 'update_orders':
            if (isset($_POST['submit']) && ($_POST['submit'])) {
                $id = $_POST['id'];
                $trangthai = $_POST['trangthai'];
                $thanhtoan = $_POST['thanhtoan'];
                update_order($id, $trangthai, $thanhtoan);
            }
            $list_order = list_order();
            include_once './Order/list.php';
            break;

            // ACCOUNT

        case 'list_account':
            $list_account = loadAll_account();
            require_once './Account/list.php';
            break;

        case 'sua_account':
            $load_oneAccount = loadOne_account();
            require_once './Account/update.php';
            break;
        case 'update_account':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $hovaten = $_POST['hovaten'];
                $tendangnhap = $_POST['tendangnhap'];
                $matkhau = $_POST['matkhau'];
                $email = $_POST['email'];
                $role = $_POST['role'];
                $trangthai = $_POST['trangthai'];


                update_account($id, $hovaten, $tendangnhap, $matkhau, $email, $role, $trangthai);
            }
            $list_account = loadAll_account();
            require_once './Account/list.php';
            break;

        case 'delete_account':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                delete_account($id);
            }
            $list_account = loadAll_account();
            include_once './Account/list.php';
            break;

            // biến thể
        case 'create_bt':
            $soluongErr = "";
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $pro_id = $_GET['id'];
                $size = $_POST['size'];
                $color = $_POST['color'];
                $soLuong = $_POST['soLuong'];
                if (empty(trim($soLuong))) {
                    $soluongErr = "Vui lòng nhập số lượng  !";
                } else {
                    insert_bt($pro_id, $size, $color, $soLuong);
                    echo '<script>
                            alert("Bạn đã thêm biến thể thành công !");
                            window.location.href="?act=list_bt&id=' . $pro_id . '";
                        </script>';
                }
            }
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                $list_bt = loadAll_bt($id);
            }
            $sp = load_one_sp();
            include_once './Bien_The/add.php';
            break;

        case 'list_bt':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                $list_bt = loadAll_bt($id);
            }
            $sp = load_one_sp();
            include_once './Bien_The/list.php';
            break;
        case 'delete_bt':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $pro_id = $_GET['pro_id'];
                $id = $_GET['id'];
                delete_bt($pro_id, $id);
                echo '<script>
                                alert("Bạn đã xóa biến thể sản phẩm thành công !");
                                window.location.href="?act=list_bt&id=' . $pro_id . '";
                            </script>';
            }
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                $list_bt = loadAll_bt($id);
            }
            $sp = load_one_sp();
            include_once './Bien_The/list.php';
            break;

        case 'sua_bt':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                $listOne_bt = loadOne_bt($id);
            }
            $sp = load_one_sp();
            include_once './Bien_The/update.php';
            break;
        case 'update_bt':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_GET['id'];
                $pro_id = $_GET['pro_id'];
                $soluong = $_POST['soLuong'];
                update_bt($id, $pro_id, $soluong);
                echo '<script>
                                alert("Cập nhật thành công !");
                                window.location.href="?act=list_bt&id=' . $pro_id . '";
                            </script>';
            }
            $list_bt = loadAll_bt($id);
            include_once './Bien_The/list.php';
            break;

        case 'logout':
            session_unset();
            break;
        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}
include "footer.php";
