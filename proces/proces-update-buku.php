<?php

include "dbcon.php";

$id = $_POST['id'];
$idBuku = $_POST['kd_buku'];
$nama = $_POST['nama'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$gambar = $_FILES['gambar'];

// proses pengolahan gambar
$fileName = $gambar['name'];
$fileTmp = $gambar['tmp_name'];

$folder = '../data_file/';
  
$destination = $folder . $fileName;
if(move_uploaded_file($fileTmp, $destination)){
    $escapedIdBuku = $conn->real_escape_string($idBuku);
    $escapedNamaBuku = $conn->real_escape_string($nama);
    $escapedPenulis = $conn->real_escape_string($penulis);
    $escapedPenerbit = $conn->real_escape_string($penerbit);
    $escapedFileName = $conn->real_escape_string($fileName);

    $sql = "UPDATE `buku` SET kd_buku = '$escapedIdBuku', nama_buku = '$escapedNamaBuku', penulis = '$escapedPenulis', penerbit = '$escapedPenerbit', images = '$escapedFileName' WHERE id = $id";

    $result = mysqli_query($conn,$sql);

    if($result){
        header("Location: ../index-buku.php");
        exit;
    }else{
        echo("gagal");
    }
}else{
    $sql = "UPDATE `buku` SET kd_buku = '$idBuku', nama_buku = '$nama', penulis = '$penulis', penerbit = '$penerbit' WHERE id = $id";

    $result = mysqli_query($conn,$sql);

    if($result){
        header("Location: ../index-buku.php");
        exit;
    }else{
        echo("gagal");
    }
}
// akhir dari proses


?>