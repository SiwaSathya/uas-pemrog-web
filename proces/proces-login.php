<?php
session_start();
include "dbcon.php";
$user = $_POST['username'];
$pass =$_POST['password'];
$sql = "SELECT * FROM pengguna WHERE username='$user' and pass='$pass'";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) == 1){
    $_SESSION['status'] = 'berhasil';
    header("location: ../index.php");
}else{
    echo("gagal");
}

?>