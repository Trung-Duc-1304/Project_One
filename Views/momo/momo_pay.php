<?php
header('Content-type: text/html; charset=utf-8');


function execPostRequest($url, $data)
{
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt(
        $ch,
        CURLOPT_HTTPHEADER,
        array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($data)
        )
    );
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
    //execute post
    $result = curl_exec($ch);
    //close connection
    curl_close($ch);
    return $result;
}

$endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";
$Flight_Number = $_POST['Flight_Number'];
$formattedDate = $_POST['formattedDate'];
$Start_City = $_POST['Start_City'];
$Arrival_City = $_POST['Arrival_City'];
$Departure_Times = $_POST['Departure_Times'];
$Arrival_Times = $_POST['Arrival_Times'];
$Price = $_POST['price'];
$partnerCode = 'MOMOBKUN20180529';
$accessKey = 'klm05TvNBzhg7h7j';
$secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';
$orderInfo = "Thanh toán: $Flight_Number ㅤㅤㅤNgày bay: $formattedDate ㅤㅤ Khởi Hành: $Start_City-$Departure_Times Đến: $Arrival_City-$Arrival_Times";
$amount = $Price;
$orderId = time() . "";
$redirectUrl = "http://localhost/Project_One/view/Vnpay.php";
$ipnUrl = "http://localhost/Project_One/index.php";
$extraData = "";

$requestId = time() . "";
$requestType = "captureWallet";
//$extraData = ($_POST["extraData"] ? $_POST["extraData"] : "");
//before sign HMAC SHA256 signature
$rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
$signature = hash_hmac("sha256", $rawHash, $secretKey);
$data = array(
    'partnerCode' => $partnerCode,
    'partnerName' => "Test",
    "storeId" => "Airline Power",
    'requestId' => $requestId,
    'amount' => $amount,
    'orderId' => $orderId,
    'orderInfo' => $orderInfo,
    'redirectUrl' => $redirectUrl,
    'ipnUrl' => $ipnUrl,
    'lang' => 'vi',
    'extraData' => $extraData,
    'requestType' => $requestType,
    'signature' => $signature
);
$result = execPostRequest($endpoint, json_encode($data));
$jsonResult = json_decode($result, true);  // decode json

//Just a example, please check more in there

header('Location: ' . $jsonResult['payUrl']);
