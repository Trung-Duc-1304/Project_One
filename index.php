<?php
session_start();
ob_start();
require_once 'Model/pdo.php';
require_once 'Model/danhmuc.php';
require_once 'Model/sanpham.php';
require_once 'Model/Account.php';
require_once 'Model/Bienthe.php';
require_once 'Model/bill.php';
require_once 'Model/order.php';
require_once 'Model/binhluan.php';
require_once 'Model/Mail.php';
require_once 'global.php';
require_once 'helper.php';

date_default_timezone_set('Asia/Ho_Chi_Minh');

$listsp = load_sp_home();
$listdm = load_all_dm("");
$list_sp_aothun = load_sp_aothun();
$load_sp_khoac = load_sp_khoac();
$list_sp_aoho = load_sp_aoho();
$list_sp_aosw = load_sp_aosw();
require_once 'views/header.php';
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'list_cart_user':

            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                $list_cart_user = list_cart_user($id);
                $sum_cart_user = sum_cart_user($id);
            }
            include_once 'views/cart/cart.php';
            break;
        case 'thanhtaanonline':
            if (isset($_POST['monny']) && $_POST['monny']) {
                if (!empty($_POST)) {
                    $id = $_POST['user_id'];
                    $tongtien = $_POST['price'];
                    $_SESSION['tongtien'] = $tongtien;
                    $timeset = date('Y/m/d');
                    $_SESSION['idbill'] = $idbill = insert_bill($id, $tongtien, $timeset);
                    foreach ($_SESSION['cartsp'] as $key => $value) {
                        insert_bill_ct($idbill, $value['product_id'], $value['tensp'], $value['giasp'], $value['soluong'], $value['color'], $value['size']);
                    }
                }
                header('Location: ?act=dathangthanhcong');
            }

            if (isset($_POST['payUrl']) && $_POST['payUrl']) {
                if (!empty($_POST)) {
                    $id = $_POST['user_id'];
                    $tongtien = $_POST['price'];
                    $_SESSION['tongtien'] = $tongtien;
                    $timeset = date('y/m/d');
                    $_SESSION['idbill'] = $idbill = insert_bill($id, $tongtien, $timeset);
                    foreach ($_SESSION['cartsp'] as $key => $value) {
                        insert_bill_ct($idbill, $value['product_id'], $value['tensp'], $value['giasp'], $value['soluong'], $value['color'], $value['size']);
                    }
                }
                header('Location:vnpay_php/vnpay_php/vnpay_create_payment.php');
            }


            break;
        case 'dathangthanhcong':
            if (isset($_GET['vnp_ResponseCode']) && $_GET['vnp_ResponseCode'] == '00') {
                update_billct($_SESSION['idbill']);
            }
            delete_cart1($_SESSION['user']['id']);
            unset($_SESSION['idbill']);
            unset($_SESSION['tongtien']);
            unset($_SESSION['cartsp']);
            include "Views/cart/camon.php";
            break;
        case 'lichsumuahang':
            if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {
                if (isset($_GET['idorder']) && !empty($_GET['idorder'])) {
                    $historyOder = historyOder($_SESSION['user']['id'], $_GET['idorder'], '', '');
                } else {
                    $historyOder = listallhistoryOder($_SESSION['user']['id'], '', '');
                }
                if (!empty($historyOder)) {
                    $tongsp = sizeof($historyOder);
                    $end = 8;
                    $sotrang = ceil($tongsp / $end);
                    $page = isset($_GET['page']) ? $_GET['page'] : 1;
                    $star = ($page - 1) * 8;
                    if (isset($_GET['idorder']) && !empty($_GET['idorder'])) {
                        $historyOder = "";
                        $historyOder1 = historyOder($_SESSION['user']['id'], $_GET['idorder'], $star, $end);
                    } else {
                        $historyOder = listallhistoryOder($_SESSION['user']['id'], $star, $end);
                    }
                }
            }
            include "Views/cart/lichsumuahang.php";
            break;
        case 'orderCancel':
            if (isset($_GET['huy'])) {
                $id = $_GET['ID'];
                xoa_trangthai($id);
                header('Location:?act=lichsumuahang');
            }

            include "Views/cart/lichsumuahang.php";
            break;

        case 'tangsl':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                if (isset($_GET['product_id']) && $_GET['product_id'] != "") {
                    $product_id = $_GET['product_id'];
                    $showone = load_onespct($product_id);
                    $soluong = $_GET['soluong'];
                    if ($soluong == 1) {
                        $soluong = 1;
                        if (isset($_GET['tang'])) {
                            $soluong = $soluong + 1;
                        }
                    } else {
                        if (isset($_GET['tang'])) {
                            $soluong = $soluong + 1;
                        }
                        if (isset($_GET['giam'])) {
                            $soluong = $soluong - 1;
                        }
                    }
                    $tongtien = $soluong * $showone['giasp'];
                    update_giohang($id, $soluong, $tongtien);
                }
            }
            $iduser = $_SESSION['user']['id'];
            header("Location: ?act=list_cart_user&id=$iduser");
            break;
        case 'sanpham_ct':
            if (isset($_GET['id']) && ($_GET['id'] != "")) {
                $id = $_GET['id'];
                $pro_ct = load_onespct($id);
                $list_bt = loadAll_bt($id);
                $sanpham = load_one_sp($id);
                if ($sanpham) {
                    $luotxem = $sanpham['luotxem'] + 1;
                    update_luotxem_sp($sanpham['id'], $luotxem);
                    $noidungErr = "";
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $noidung = $_POST['noidung'];
                        $ngaybinhluan = date('Y-m-d');
                        if (empty(trim($noidung))) {
                            $noidungErr = "Vui lòng nhập nội dung bình luận trước khi gửi !";
                        } else {
                            insert_bl($_SESSION['user']['id'], $sanpham['id'], $noidung, $ngaybinhluan);
                        }
                    }
                    $splq = load_sp_lq($sanpham['iddm']);
                    $soluong = 1;
                    $list_bl = load_bl_sp($sanpham['id']);
                    $danhmuc = load_one_dm($sanpham['iddm']);
                    $dembl = dem_bl_sp($sanpham['id']);
                }
            }
            include "Views/products/sanpham_ct.php";
            break;

        case 'products':
            if (isset($_POST['submittimkiem']))
                $kyw = $_POST['timkiem'];
            else
                $kyw = "";
            if (isset($_POST['submitlocgia'])) {
                $giadau = $_POST['giaspdau'];
                $giacuoi = $_POST['giaspcuoi'];
            } else {
                $giadau = 0;
                $giacuoi = 0;
            }
            if (isset($_GET['page']) && ($_GET['page'] != ""))
                $page = $_GET['page'];
            else
                $page = 1;
            $tongsp = dem_sp();
            $load_all_sp = load_all_sphome(0, $kyw, $giadau, $giacuoi, $page);
            $listdm = load_all_dm("");
            // $load_all_sp = load_all_sp($kyw, $page);
            include_once 'views/products/products.php';
            break;

        case 'spdanhmuc':
            if (isset($_GET['id']) && ($_GET['id'] != "")) {
                if (isset($_POST['submittimkiem']))
                    $kyw = $_POST['timkiem'];
                else
                    $kyw = "";
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

        case 'checkout_cart_user':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                $list_cart_user = list_cart_user($id);
                $sum_cart_user = sum_cart_user($id);
            }
            include_once 'views/cart/checkout_cart.php';
            break;

            // TÀI KHOẢN
        case 'login':
            $tkErr = "";
            $tendangnhapErr = "";
            if (isset($_POST['dangnhap'])) {
                $user = $_POST['username'];
                $pass = $_POST['password'];
                $check = true;
                if (empty(trim($user))) {
                    $check = false;
                    $tendangnhapErr = "Vui lòng không để trống !";
                }
                if (empty(trim($pass))) {
                    $check = false;
                    $tkErr = "Vui lòng không để trống !";
                }
                if ($check) {
                    $checkuser = check_user($user, $pass);
                    if (is_array($checkuser)) {
                        if ($checkuser['matkhau'] != $pass || $checkuser['tendangnhap'] != $user) {
                            $tkErr = "Sai mật khẩu hoặc tên đăng nhập. Vui lòng kiểm tra lại !";
                        } else {
                            $_SESSION['user'] = $checkuser;
                            header("location: ?act=index.php");
                        }
                    } else {
                        $tkErr = "Tài khoản không tồn tại. Vui lòng kiểm tra lại hoặc đăng ký !";
                    }
                }
            }
            include_once 'views/auth/login.php';
            break;
            // dăng ký
        case 'register':
            $hovatenErr = "";
            $tendangnhapErr = "";
            $matkhauErr = "";
            $emailErr = "";
            $sdtErr = "";
            $diachiErr = "";
            if (isset($_POST['dangky'])) {
                $hovaten = $_POST['hovaten'];
                $dkyemail = $_POST['dkyemail'];
                $dkyuser = $_POST['dkyuser'];
                $dkypass = $_POST['dkypass'];
                $dkysdt = $_POST['dkysdt'];
                $dkydc = $_POST['dkydc'];
                $listtk = load_all_tk(0, "");
                $loadAll_account_insert = loadAll_account_insert();
                $check = true;
                if (empty(trim($hovaten))) {
                    $hovatenErr = "Vui lòng không bỏ trống tên!";
                }

                if (empty(trim($dkyuser))) {
                    $check = false;
                    $tendangnhapErr = "Vui lòng không bỏ trống te!";
                }
                if (empty(trim($dkypass))) {
                    $check = false;
                    $matkhauErr = "Vui lòng không bỏ trống pass !";
                } else {
                    if (!preg_match("/^(?=.*?[0-9]).{8,}$/", $dkysdt)) {
                        $check = false;
                        $matkhauErr = "chứa ít nhất một chữ số, và độ dài tối thiểu là 8 ký tự !";
                    }
                }
                if (empty(trim($dkysdt))) {
                    $check = false;
                    $sdtErr = "Vui lòng không bỏ trống sdt!";
                } else {
                    if (!preg_match("/^0[1-9]\d{8}$/", $dkysdt)) {
                        $check = false;
                        $sdtErr = "Số điện thoại không đúng định dạng (10 số) !";
                    }
                }
                if (empty(trim($dkyemail))) {
                    $check = false;
                    $emailErr = "Vui lòng không bỏ trống email!";
                } else {
                    if (!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $dkyemail)) {
                        $check = false;
                        $emailErr = "Email không đúng định dạng !";
                    }
                }

                foreach ($loadAll_account_insert as $account) {
                    extract($account);
                    if ($dkyemail == $email) {
                        $check = false;
                        $emailErr = "Địa chỉ email đã tồn tại!";
                    }
                }

                if (empty(trim($dkydc))) {
                    $check = false;
                    $diachiErr = "Vui lòng không bỏ trống địa chỉ!";
                }

                if ($check) {
                    insert_tk($hovaten, $dkyuser, $dkypass, $dkyemail, $dkysdt, $dkydc, "", 'Kích Hoạt');
                    echo '<script>
                            alert("Bạn đã đăng ký tài khoản thành công !");
                            window.location.href="?act=login";
                        </script>';
                }
            }
            include_once 'views/auth/register.php';
            break;

        case 'account':
            include_once 'views/unity/account.php';
            break;
        case 'your':
            include_once 'views/unity/your.php';
            break;
            // cập nhật user
        case 'update_user':
            if (isset($_SESSION['user'])) {
                $tendangnhapErr = "";
                $emailErr = "";
                $sodienthoaiErr = "";
                $hovatenErr = "";
                if (isset($_POST['capnhat'])) {
                    $id = $_POST['id'];
                    $tendangnhap = $_POST['tendangnhap'];
                    $matkhau = $_POST['matkhau'];
                    $hovaten = $_POST['hovaten'];
                    $sodienthoai = $_POST['sodienthoai'];
                    $email = $_POST['email'];
                    $diachi = $_POST['diachi'];
                    $check = true;
                    if (empty(trim($hovaten))) {
                        $hovatenErr = "Vui lòng không để trống";
                    }
                    if (empty(trim($tendangnhap))) {
                        $check = false;
                        $tendangnhapErr = "Vui lòng không bỏ trống !";
                    }
                    if (empty($sodienthoai))
                        $sodienthoai = "";
                    else {
                        if (!preg_match("/^0[1-9]\d{8}$/", $sodienthoai)) {
                            $check = false;
                            $sodienthoaiErr = "Số điện thoại không đúng định dạng !";
                        }
                    }
                    if (empty(trim($email))) {
                        $check = false;
                        $emailErr = "Vui lòng không bỏ trống !";
                    }
                    if ($check) {
                        update_tk($id, $hovaten, $tendangnhap, $matkhau, $email, $sodienthoai, $diachi);
                        $_SESSION['user'] = check_user($tendangnhap, $matkhau);
                        echo '<script>
                            alert("Bạn đã sửa tài khoản thành công !");
                            window.location.href="?act=your";
                        </script>';
                    }
                }
            } else {
                header("location: ?act=trangchu");
            }
            include_once 'views/unity/update.php';
            break;
            // quên mk
        case 'forgot':
            if (isset($_POST['forgot']) && ($_POST['forgot'])) {
                $Email = $_POST['email'];
                $tieude = "FORGOT PASSWORD";
                $check_pass = check_Pass($Email);
                $password = "";
                if ($check_pass && is_array($check_pass) && isset($check_pass['matkhau'])) {
                    $password = "<p>Cảm ơn bạn đã sử dụng 𝒇𝒂𝒔𝒉𝒊𝒐𝒏</p>
                                 Tên đăng nhập: <strong>" . $check_pass['tendangnhap'] . "</strong> <br>
                                 Mật khẩu của bạn là: <strong>" . $check_pass['matkhau'] . "</strong>
                                 <p style='color:red'>𝒇𝒂𝒔𝒉𝒊𝒐𝒏</p>
                                 <p>Developer</p>
                                 <p style='color:red'>----------------------------------------------------------------------------------------------</p>
                                 <p>Số điện thoại: 034-3456-981 | 0876-55-2004</p>
                                 <p>Email: fashion08@gmail.com</p>
                                 <p style='color:red'>----------------------------------------------------------------------------------------------</p>
                                 ";
                    echo "<script>alert('Bạn hãy kiểm tra lại Email!');
                           window.location.href='?act=login';
                          </script>";
                } else {
                    echo "<script>alert('Email không chính xác!');</script>";
                }
                $mail = new Mailer();
                $mail->forgot($tieude, $password, $Email);
            }
            include_once 'views/auth/forgot.php';
            break;
        case 'logout':
            session_unset();
            header("location: ?act=index.php");
            break;

            // cart
        case 'delete_cart':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $user_id = $_GET['user_id'];
                $id = $_GET['id'];
                delete_cart($user_id, $id);
                echo '<script>
                                alert("Bạn đã xóa sản phẩm thành công!");
                                window.location.href="?act=list_cart_user&id=' . $user_id . '";
                            </script>';
            }
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                $list_cart_user = list_cart_user($id);
                $sum_cart_user = sum_cart_user($id);
            }
            include_once 'views/cart/cart.php';
            break;
            // thanh toán online
        case 'pay_code':
            if (isset($_POST['redirect']) && ($_POST['redirect'])) {
                $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
                $vnp_Returnurl = "http://localhost/Project_One/view/Vnpay.php"; // thông báo đặt hàng thành công
                $vnp_TmnCode = "LHI3CJNJ"; //Mã website tại VNPAY 
                $vnp_HashSecret = "VKWPOOTWGEVOUBFMBNYFJLAQVONVFGTY"; //Chuỗi bí mật
                $Price = $_POST['price'];
                $vnp_TxnRef = rand(00, 9999); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
                $vnp_OrderInfo = 'Thanh Toán Đơn Hàng';
                $vnp_OrderType = 'billpayment';
                $vnp_Amount = $Price * 100;
                $vnp_Locale = 'vn';
                $vnp_BankCode = 'NCB';
                $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
                $inputData = array(
                    "vnp_Version" => "2.1.0",
                    "vnp_TmnCode" => $vnp_TmnCode,
                    "vnp_Amount" => $vnp_Amount,
                    "vnp_Command" => "pay",
                    "vnp_CreateDate" => date('YmdHis'),
                    "vnp_CurrCode" => "VND",
                    "vnp_IpAddr" => $vnp_IpAddr,
                    "vnp_Locale" => $vnp_Locale,
                    "vnp_OrderInfo" => $vnp_OrderInfo,
                    "vnp_OrderType" => $vnp_OrderType,
                    "vnp_ReturnUrl" => $vnp_Returnurl,
                    "vnp_TxnRef" => $vnp_TxnRef
                );

                if (isset($vnp_BankCode) && $vnp_BankCode != "") {
                    $inputData['vnp_BankCode'] = $vnp_BankCode;
                }
                ksort($inputData);
                $query = "";
                $i = 0;
                $hashdata = "";
                foreach ($inputData as $key => $value) {
                    if ($i == 1) {
                        $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
                    } else {
                        $hashdata .= urlencode($key) . "=" . urlencode($value);
                        $i = 1;
                    }
                    $query .= urlencode($key) . "=" . urlencode($value) . '&';
                }

                $vnp_Url = $vnp_Url . "?" . $query;
                if (isset($vnp_HashSecret)) {
                    $vnpSecureHash = hash_hmac('sha512', $hashdata, $vnp_HashSecret); //  
                    $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
                }
                $returnData = array(
                    'code' => '00',
                    'message' => 'success',
                    'data' => $vnp_Url
                );
                if (isset($_POST['redirect'])) {
                    header('Location: ' . $vnp_Url);
                    die();
                } else {
                    echo json_encode($returnData);
                }
            }
            break;
        default:
            include "views/home.php";
            break;
    }
} else {
    include "views/home.php";
}
include "views/footer.php";
