<?php
include "./PHPMailer/src/PHPMailer.php";
include "./PHPMailer/src/Exception.php";
include "./PHPMailer/src/OAuth.php";
include "./PHPMailer/src/POP3.php";
include "./PHPMailer/src/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Mailer
{
    public function forgot($tieude, $password, $Email)
    {
        $mail = new PHPMailer(true);
        $mail->CharSet = 'UTF-8';
        try {
            //Server settings
            $mail->SMTPDebug = 0;                                 // Bật đầu ra gỡ lỗi chi tiết
            $mail->isSMTP();                                      // Đặt người gửi thư sử dụng SMTP
            $mail->Host = 'smtp.gmail.com';  // Chỉ định máy chủ SMTP chính và dự phòng
            $mail->SMTPAuth = true;                               // Kích hoạt xác thực SMTP
            $mail->Username = 'ducltph46032@fpt.edu.vn';                 // tên người dùng SMTP
            $mail->Password = 'dfcdwdsafwgyykqi';                           // Mật khẩu SMTP
            $mail->SMTPSecure = 'tls';                            // Kích hoạt mã hóa TLS, `ssl` cũng được chấp nhận
            $mail->Port = 587;                                    // Cổng TCP để kết nối với
            $mail->setFrom('ducltph46032@fpt.edu.vn', '𝒇𝒂𝒔𝒉𝒊𝒐𝒏');
            $mail->addAddress($Email, '𝒇𝒂𝒔𝒉𝒊𝒐𝒏');     // Thêm người nhận             // Tên là tùy chọn
            $mail->isHTML(true);                                  // Đặt định dạng email thành HTML
            $mail->Subject = $tieude;
            $mail->Body = $password;
            $mail->send();
        } catch (Exception $e) {
            // echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }
    }
}
