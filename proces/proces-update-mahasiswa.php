<?php

include "dbcon.php";

$id = $_POST['id'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$tipeKelas = $_POST['tipe-kelas'];
$jurusan = $_POST['jurusan'];
$jenisKelamin = $_POST['jenis-kelamin'];

$sql = "UPDATE `mahasiswa` SET nim = $nim, nama = '$nama'";

if (isset($tipeKelas) && !empty($tipeKelas)) {
    $sql .= ", tipe_kelas = '$tipeKelas'";
}

if (isset($jurusan) && !empty($jurusan)) {
    $sql .= ", jurusan = '$jurusan'";
}

if (isset($jenisKelamin) && !empty($jenisKelamin)) {
    $sql .= ", jenis_kelamin = '$jenisKelamin'";
}

if (isset($tipeKelas) && isset($jurusan) && isset($jenisKelamin) && !empty($tipeKelas) && !empty($jurusan) && !empty($jenisKelamin)) {
    $sql .= ", tipe_kelas = '$tipeKelas', jurusan = '$jurusan', jenis_kelamin = '$jenisKelamin'";
}

$sql .= " WHERE id = $id";

$result = mysqli_query($conn, $sql);

if ($result) {
    header("Location: ../index-mahasiswa.php");
    exit;
} else {
    echo("gagal");
}

?>
