
// ==== peringatan untuk login password ====

$('#password').keyup(function() {
    var len = this.value.length;
    if (len < 5) {
         // this.value = this.value.substring(0, 150);
         $('#jumlah').text('Minimal Password 5 Karakter');
    }else{
         $('#jumlah').text('');
    }
});

$('#cpassword').keyup(function() {
    var len = this.value.length;
    if (len < 5) {
         // this.value = this.value.substring(0, 150);
         $('#jumlah_c').text('Minimal Password 5 Karakter');
    }else{
         $('#jumlah_c').text('');
    }
});

// ==== Alert Gagal ====

const flashToken = $('.alert-gagal').data('flashdata');
     if (flashToken) {
          // alert(flashdata);
          Swal.fire({
               position: 'middle',
               icon: 'error',
               title: 'Gagal.!! ' + flashToken,
               showConfirmButton: false,
               timer: 4000
          });
          // Swal.fire('Any fool can use a computer')
}

// ==== Alert Cookie ====

const flashstorage = $('.alert-storage').data('flashdata');
     if(flashstorage){
          function setCookie(name,value,days) {
               var expires = "";
               if (days) {
                   var date = new Date();
                   date.setTime(date.getTime() + (days*24*60*60*1000));
                   expires = "; expires=" + date.toUTCString();
               }
               document.cookie = name + "=" + (value || "")  + expires + "; path=/";

               document.cookie = "date-cookie-kost-user" + "=" + (date.toUTCString() || "")  + expires + "; path=/";
         
          }
            var myItem = flashstorage;
            setCookie('cookie-kost-user', myItem, 1);
     }


// ==== login berhasil ====

$('.log-out').on('click', function(e) {
     e.preventDefault();
     const hrefUrl_= $(this).attr('href')
   
     $("#btn-log-out").on("click", function(e){
          e.preventDefault();
          document.location.href=hrefUrl_;
     });
     // $('#model_hapus').modal('show')

});

// ==== login berhasil ====

const loginPerhasil = $('.alert-login-berhasil').data('flashdata');
     if (loginPerhasil) {
          // alert(flashdata);
          Swal.fire({
               position: 'middle',
               icon: 'success',
               title: 'Berhasil ' + loginPerhasil,
               showConfirmButton: false,
               timer: 2900,
               
          });
          setTimeout(
               function(){ 
                    window.location = "/profil";
                    sessionStorage.clear()
               }, 2000);
          
          // window.location.href = "http://127.0.0.1:8000/dashboard-panel";
          
                // Swal.fire('Any fool can use a computer')
}