<?php
include "../../model/pdo.php";
include "../../model/donhang.php";
if(isset($_POST['thoigian'])){
    $thoigian=$_POST['thoigian'];
    $listthongke=load_all_thongke($thoigian);
}else{
    $listthongke=load_all_thongke(7);
}
foreach ($listthongke as $thongke) {
    $chart_data[]=array(
        'date' => $thongke['ngaydat'],
        'order' => $thongke['donhang'],
        'sales' => $thongke['doanhthu'],
        'quantity' => $thongke['soluongban']
    );
}
echo json_encode($chart_data);
?>