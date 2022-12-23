<?php 
 
$server = "localhost";
$user = "u1084943_root";
$pass = "webdev666";
$database = "u1084943_yayasan";
 
$conn = mysqli_connect($server, $user, $pass, $database);
 
if (!$conn) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}
 
?>