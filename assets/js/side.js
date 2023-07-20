function DeleteMahasiswa(nim) {
    Swal.fire({
      title: 'Yakin Ingin Menghapus?',
      text: "Anda Tidak Akan Bisa Mengembalikan Data Ini!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Hapus Wae Lah!'
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire(
            'Data Terhapus!',
            'mahasiswa ini sudah di KICK!',
            'success'
          ).then((result) => {
            if (result.isConfirmed) {
                window.location.href = `proces/hapus-mahasiswa.php?nim=${nim}`;
            }
          })
       
      }
    });
}