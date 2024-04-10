<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'assets/vendor/PHPMailer-master/src/PHPMailer.php';
require 'assets/vendor/PHPMailer-master/src/Exception.php';
require 'assets/vendor/PHPMailer-master/src/SMTP.php';
function sendemail($headers, $to_email, $taikhoan){
    
   

    //Load Composer's autoloader

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 1;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com ';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'kynkph46127@fpt.edu.vn';                     //SMTP username
    $mail->Password   = 'jxpd zsfx kftl rqvh';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('kynkph46127@fpt.edu.vn', 'FASHION');
    $mail->addAddress(''.$to_email.'',''.$taikhoan['hovaten'].'');

    // //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'DUNG QUEN MAT KHAU NUA';
    $mail->Body    = ''.$headers.'<br>Mật khẩu: '.$taikhoan['matkhau'].'';
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}
function loadAccountToEmail($email){
$sql = "SELECT tendangnhap,hovaten,matkhau FROM taikhoan WHERE email = '$email' LIMIT 1";
$row = pdo_query_one($sql);
return $row;
}
?>