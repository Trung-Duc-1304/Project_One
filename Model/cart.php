<?php
// Kết nối đến cơ sở dữ liệu
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ban_ao";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Thiết lập chế độ lỗi để PDO ném ngoại lệ khi có lỗi
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Lấy dữ liệu sản phẩm từ yêu cầu Ajax
    $idtaikhoan = $_POST['idtaikhoan'];
    $product_id = $_POST['product_id'];
    $id_bienthe  = $_POST['id_bienthe'];
    $size  = $_POST['size'];
    $color  = $_POST['color'];
    $soluong = $_POST['soluong'];
    $thanhtien = $_POST['thanhtien'];

    // Thực hiện truy vấn để thêm sản phẩm vào giỏ hàng (giả sử bạn có bảng cart với các cột product_id và quantity)
    $stmt = $conn->prepare("INSERT INTO giohang (idtaikhoan, product_id, id_bienthe, size, color, soluong, thanhtien) VALUES (:idtaikhoan, :product_id, :id_bienthe, :size, :color, :soluong, :thanhtien)");
    $stmt->bindParam(':idtaikhoan', $idtaikhoan);
    $stmt->bindParam(':product_id', $product_id);
    $stmt->bindParam(':id_bienthe', $id_bienthe);
    $stmt->bindParam(':size', $size);
    $stmt->bindParam(':color', $color);
    $stmt->bindParam(':soluong', $soluong);
    $stmt->bindParam(':thanhtien', $thanhtien);
    $stmt->execute();
} catch (PDOException $e) {
    // Xử lý lỗi
    echo "Error: " . $e->getMessage();
}

// Đóng kết nối
$conn = null;
