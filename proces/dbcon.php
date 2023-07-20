<?php
$servername = "localhost";
$username = "id20647637_root";
$password = "Letmein212@";
$db = "id20647637_perpustakaanv2";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>