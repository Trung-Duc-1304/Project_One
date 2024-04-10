 <html>

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
     <link rel="shortcut icon" href="https://img.logoipsum.com/296.svg">
     <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
     <link rel="stylesheet" href="../assets/admin/css/style_admin.css">
     <title>𝑨𝒅𝒎𝒊𝒏_𝒇𝒂𝒔𝒉𝒊𝒐𝒏</title>
     <style>
         .thongbao h2 {
             font-size: 14px;
             color: red;
             margin-top: 10px;
             text-align: center;
             margin-bottom: 10px;
         }
     </style>
 </head>

 <body>
     <div class="limiter">
         <div class="container-login100">
             <div class="wrap-login100">
                 <div class="login100-pic js-tilt" data-tilt>
                     <img src="../assets/admin/img/team.jpg" alt="IMG">
                 </div>

                 <!--=====TIÊU ĐỀ======-->
                 <form id="loginForm" action="process_login.php" method="post" class="login100-form validate-form" onsubmit="onSubmitForm(this); return false;">
                     <span class="login100-form-title">
                         <b>ĐĂNG NHẬP HỆ THỐNG</b>
                     </span>

                     <!--=====FORM INPUT TÀI KHOẢN VÀ PASSWORD======-->

                     <form action="#">
                         <div class="wrap-input100 validate-input">
                             <input class="input100" type="text" name="username" id="username" placeholder="Tài khoản quản trị">
                             <span class="focus-input100"></span>
                             <span class="symbol-input100">
                                 <i class='bx bx-user'></i>
                             </span>
                         </div>
                         <p id="errorUsername"></p>
                         <div class="wrap-input100 validate-input">
                             <input autocomplete="off" class="input100 hidden-show" type="password" name="password" id="password" placeholder="Mật khẩu">
                             <span class="bx fa-fw bx-hide field-icon eye-hidden"></span>
                             <span class="bx bx-show field-icon eye-show hidden"></span>
                             <span class="focus-input100"></span>
                             <span class="symbol-input100">
                                 <i class='bx bx-key'></i>
                             </span>
                         </div>
                         <p id="errorPassword"></p>

                         <!--=====ĐĂNG NHẬP======-->

                         <div class="container-login100-form-btn">
                             <input type="submit" value="Đăng Nhập">
                         </div>

                         <!--=====LINK TÌM MẬT KHẨU======-->

                         <!-- <div class="text-right p-t-12">
                             <a class="txt2" href="#">
                                 Bạn quên mật khẩu?
                             </a>
                         </div> -->

                     </form>

                     <!--=====FOOTER======-->

                     <div class="text-center p-t-70 txt2">
                         Phần mềm quản lý bán hàng Code bởi Fashion</a>
                     </div>
                 </form>
             </div>
         </div>
     </div>
     <script src="../javascript/main.js"></script>
     <script src="../javascript/login.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
     <script>
         document.addEventListener('DOMContentLoaded', function() {
             // Hiển thị thông báo SweetAlert2 khi trang web được tải
             const Toast = Swal.mixin({
                 toast: true,
                 position: "top-end",
                 showConfirmButton: false,
                 timer: 3000,
                 timerProgressBar: true,
                 didOpen: (toast) => {
                     toast.onmouseenter = Swal.stopTimer;
                     toast.onmouseleave = Swal.resumeTimer;
                 }
             });
             Toast.fire({
                 icon: "success",
                 title: "𝑳𝒐𝒈 𝒊𝒏 𝒕𝒐 𝒕𝒉𝒆 𝒔𝒚𝒔𝒕𝒆𝒎 𝑨𝒅𝒎𝒊𝒏"
             });
         });
     </script>
     <!-- HIỂN THỊ PASSWORD -->

     <script>
         const input = document.querySelector(".hidden-show");
         const eyeOpen = document.querySelector(".eye-hidden");
         const eyeClose = document.querySelector(".eye-show");

         eyeOpen.addEventListener("click", function() {
             eyeOpen.classList.add("hidden");
             eyeClose.classList.remove("hidden");
             input.setAttribute("type", "text");
         });

         eyeClose.addEventListener("click", function() {
             eyeOpen.classList.remove("hidden");
             eyeClose.classList.add("hidden");
             input.setAttribute("type", "password");
         });
     </script>
 </body>

 </html>