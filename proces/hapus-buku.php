<?php
include "dbcon.php";
$sql = "DELETE FROM `buku` WHERE id =" . $_GET['id'] . ";";
$result = mysqli_query($conn, $sql);
if ($result){
    header("location: ../index-buku.php");
} else {
    echo "gagal";
}
?>