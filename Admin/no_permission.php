<!DOCTYPE html>
<html>

<head>
    <title>Không có quyền truy cập</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

    <script>
        // Hiển thị thông báo SweetAlert2
        Swal.fire({
            icon: 'error',
            title: 'Không có quyền truy cập',
            text: 'Bạn không có quyền truy cập vào trang này.',
        }).then(() => {
            // Chuyển hướng người dùng đến trang đăng nhập
            window.location.href = 'login.php';
        });
    </script>
</body>

</html>