<?php
session_start();
include "../model/pdo.php";
include "../model/Vnpay.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airline Power</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .thank-you-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            max-width: 500px;
            width: 100%;
        }

        .thank-you-heading {
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .thank-you-message {
            color: #666;
            font-size: 16px;
            margin-bottom: 30px;
        }

        .back-to-home {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
        }

        .back-to-home:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <?php
    if (isset($_SESSION['user'])) {
        extract($_SESSION['user']);
    }
    ?>

    <div class="thank-you-container">
        <h2 class="thank-you-heading">Cảm ơn bạn đã tin tương Airline Power</h2>
        <p class="thank-you-message">Bạn Vui lòng ấn vào Lịch Sử Đặt Vé để xem vé của Bạn.</p>
        <button class="back-to-home" onclick="window.location.href='../index.php?action=booking_history'">Lịch Sử Đặt Vé</button>
    </div>
    <?php
    if (isset($_GET['partnerCode'])) {
        $User_ID = $id;
        $partnerCode = $_GET['partnerCode'];
        $orderId = $_GET['orderId'];
        $orderInfo = $_GET['orderInfo'];
        $Time_set = date('Y/m/d H:i');
        $price = $_GET['amount'];
        $Method = $_GET['paymentOption'];
        $Status = $_GET['message'];
        insert_momo($User_ID, $partnerCode, $orderId, $orderInfo, $price, $Time_set, $Method, $Status);
    }

    ?>

    <?php
    // if (isset($_GET['vnp_BankTranNo'])) {
    //     $User_ID = $User_ID;
    //     $partnerCode = $_GET['vnp_BankTranNo'];
    //     $orderId = $_GET['vnp_TransactionNo'];
    //     $orderInfo = $_GET['vnp_OrderInfo'];
    //     $price = $_GET['vnp_Amount'];
    //     $Time_set = $_GET['vnp_PayDate'];
    //     $Method = $_GET['vnp_CardType'];
    //     $Status = $_GET['vnp_TransactionStatus'];
    //     insert_vnpay($User_ID, $partnerCode, $orderId, $orderInfo, $price, $Time_set, $Method, $Status);
    // }
    ?>

</body>

</html>