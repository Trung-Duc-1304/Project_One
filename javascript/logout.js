 document.addEventListener('DOMContentLoaded', function() {
     // Lắng nghe sự kiện click trên nút đăng xuất
     document.getElementById('btnLogout').addEventListener('click', function() {
         // Hiển thị thông báo SweetAlert2
         Swal.fire({
             title: 'Bạn chắc chắn muốn đăng xuất?',
             icon: 'warning',
             showCancelButton: true,
             confirmButtonColor: '#3085d6',
             cancelButtonColor: '#d33',
             confirmButtonText: 'Đồng ý',
             cancelButtonText: 'Hủy bỏ'
         }).then((result) => {
             // Nếu người dùng xác nhận đăng xuất
             if (result.isConfirmed) {
                 // Thực hiện đăng xuất hoặc thực hiện các bước cần thiết
                 // Chuyển hướng trở lại trang index
                 window.location.href = 'logout.php';
                 // Swal.fire('Đã đăng xuất!', '', 'success');
             }
         });
     });
 });