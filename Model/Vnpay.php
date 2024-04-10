<?php
function insert_vnpay($User_ID, $partnerCode, $orderId, $orderInfo, $price, $Time_set, $Method, $Status)
{
    $sql = "INSERT INTO bill (User_ID, partnerCode, orderId, orderInfo, price, Time_set, Method, Status) 
    VALUES ('$User_ID','$partnerCode','$orderId','$orderInfo','$price','$Time_set','$Method', '$Status')";
    pdo_execute($sql);
}

function insert_momo($User_ID, $partnerCode, $orderId, $orderInfo, $price, $Time_set, $Method, $Status)
{
    $sql = "INSERT INTO bill (User_ID, partnerCode, orderId, orderInfo,  price, Time_set, Method, Status) 
    VALUES ('$User_ID','$partnerCode','$orderId','$orderInfo','$price','$Time_set','$Method','$Status')";
    pdo_execute($sql);
}
