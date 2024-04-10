 // SweetAlert2 for delete confirmation
 document.addEventListener('DOMContentLoaded', function() {
     const deleteButtons = document.querySelectorAll('.delete-btn');

     deleteButtons.forEach(button => {
         button.addEventListener('click', function(event) {
             event.preventDefault();
             const id = this.getAttribute('data-id');
             Swal.fire({
                 title: 'Bạn có chắc không',
                 icon: 'warning',
                 html: `Bạn sẽ không thể <b  style=" color: red;" >hoàn tác</b>, điều này! `,
                 showCancelButton: true,
                 confirmButtonText: 'Ok',
                 cancelButtonText: 'Cancel'
             }).then((result) => {
                 if (result.isConfirmed) {
                     window.location.href = 'index.php?act=delete_flight&id=' + id;
                 }
             });
         });
     });

 });