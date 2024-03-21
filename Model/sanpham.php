<?php
function load_sp_home()
{
    $query = "SELECT * FROM sanpham ORDER BY id desc limit 0,12";
    return pdo_query($query);
}
function load_sp_nb()
{
    $query = "SELECT * FROM sanpham ORDER BY luotxem desc limit 0,8";
    return pdo_query($query);
}
function load_all_sp($kyw, $page)
{
    $query = "SELECT sanpham.*, danhmuc.tendm FROM sanpham 
    INNER JOIN danhmuc 
    ON sanpham.iddm=danhmuc.id 
    WHERE 1";
    if ($kyw != "") {
        $query .= " AND (tensp like '%" . $kyw . "%' OR giasp LIKE '%" . $kyw . "%')";
    }
    if ($page > 0) {
        $batdau = intval($page * 9 - 9);
        $query .= " ORDER BY id desc";
    } else {
        $query .= " ORDER BY id asc";
    }
    return pdo_query($query);
}
function load_sp_lq($iddm)
{
    $query = "SELECT sanpham.*, danhmuc.tendm FROM sanpham INNER JOIN danhmuc ON sanpham.iddm=danhmuc.id WHERE 1";
    if ($iddm != "") {
        $query .= " AND iddm=" . $iddm;
    }
    $query .= " ORDER BY id asc";
    return pdo_query($query);
}
// spct
function load_onespct($id)
{
    $query = "SELECT * FROM sanpham WHERE id = " . $id;
    $pro_ct = pdo_query_one($query);
    return $pro_ct;
}

function load_one_sp()
{
    $query = "SELECT * FROM sanpham WHERE id=" . $_GET['id'];
    return pdo_query_one($query);
}
function load_one_spdm($iddm)
{
    $query = "SELECT * FROM sanpham WHERE iddm=" . $iddm;
    return pdo_query($query);
}
function dem_sp_dm($iddm)
{
    $query = "SELECT COUNT(*) as countsp FROM sanpham WHERE iddm='$iddm'";
    return pdo_query_one($query);
}
function dem_sp()
{
    $query = "SELECT COUNT(*) FROM sanpham WHERE 1";
    return pdo_query_one($query);
}
function load_all_spdm($iddm, $kyw, $giadau, $giacuoi, $page)
{
    $query = "SELECT * FROM sanpham WHERE 1";
    if ($iddm > 0) {
        $query .= " AND iddm=$iddm";
    }
    if ($kyw != '') {
        $query .= " AND (tensp like '%" . $kyw . "%' OR giakm LIKE '%" . $kyw . "%')";
    }
    if ($giadau > 0 && $giacuoi > 0) {
        $query .= " AND giakm BETWEEN $giadau AND $giacuoi";
    }
    $batdau = intval($page * 9 - 9);
    $query .= " ORDER BY id desc limit $batdau,9";
    return pdo_query($query);
}
function insert_sp($danhmuc, $tensp, $giasp, $image, $giakm, $khuyenmai, $mota)
{
    $conn = pdo_get_connection();
    $query_check = "SELECT COUNT(*) as count FROM sanpham WHERE image = :image OR tensp=:tensp";
    $stmt = $conn->prepare($query_check);
    $stmt->execute([':image' => $image, ':tensp' => $tensp]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($result['count'] > 0) {
        echo '<script>
                alert("Sản phẩm đã tồn tại !");
                window.location.href="?act=create_sp";
            </script>';
    } else {
        $query = "INSERT INTO `sanpham`(`iddm`, `tensp`, `giasp`,`giakm`, `image`, `khuyenmai`, `mota`) 
        VALUES ('$danhmuc','$tensp','$giasp','$giakm','$image','$khuyenmai','$mota')";
        $result2 = pdo_execute($query);
        echo '<script>
                    alert("Bạn đã thêm sản phẩm thành công !");
                    window.location.href="?act=list_sp";
                </script>';
    }
}

function update_sp($id, $iddm, $tensp, $giasp, $khuyenmai,  $giakm, $mota, $Image)
{
    if ($Image != "")
        $sql = "UPDATE sanpham SET iddm='$iddm',tensp ='$tensp',
        giasp='$giasp', khuyenmai = '$khuyenmai', giakm ='$giakm', mota ='$mota', image = '$Image'
        WHERE id=" . $id;
    else
        $sql = "UPDATE sanpham SET iddm='$iddm',tensp ='$tensp',
        giasp='$giasp',  khuyenmai = '$khuyenmai',  giakm ='$giakm', mota ='$mota'
        WHERE id=" . $id;

    pdo_execute($sql);
    echo '<script>
                    alert("Bạn đã thêm sản phẩm thành công !");
                    window.location.href="?act=list_sp";
                </script>';
}

function update_sl_sp($id, $soluong)
{
    $query = "UPDATE sanpham SET `soluong`='$soluong' WHERE id='$id'";
    pdo_execute($query);
}
function update_luotxem_sp($id, $luotxem)
{
    $query = "UPDATE sanpham SET `luotxem`='$luotxem' WHERE id='$id'";
    pdo_execute($query);
}
function delete_sp($id)
{
    $query = "DELETE FROM sanpham WHERE id=" . $id;
    pdo_execute($query);
}
function delete_sp_dm($id)
{
    $query = "DELETE FROM sanpham WHERE iddm=" . $id;
    pdo_execute($query);
}
function giasp_min()
{
    $query = "SELECT MIN(giakm) AS giaspmin FROM sanpham";
    return pdo_query_one($query);
}
function giasp_max()
{
    $query = "SELECT MAX(giakm) AS giaspmax FROM sanpham";
    return pdo_query_one($query);
}
function sum_luotxem()
{
    $query = "SELECT SUM(luotxem) FROM sanpham";
    return pdo_query_one($query);
}
