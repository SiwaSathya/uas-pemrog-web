function AlertLogin() {
    Swal.fire(
        'Login Sukses!',
        'Silahkan Masuk!',
        'success'
      ).then((result) => {
        if (result.isConfirmed) {
        
          submitForm();
        }
      });
}

function submitForm() {
    // Ambil elemen form menggunakan ID atau selektor lain
    var form = document.getElementById('formLogin');
  
    // Jalankan pengiriman formulir
    form.submit();
  }