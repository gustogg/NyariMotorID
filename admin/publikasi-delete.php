<?php 
require 'koneksi.php';

session_start();
// cek apakah sudah login
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

$id = $_GET["hapus_data"];

$hapus_data = "DELETE FROM publikasi WHERE id = '$id'";
$hapus_berhasil = mysqli_query($conn, $hapus_data);

// Cek berhasil dihapus
if($hapus_berhasil){
    echo"<script> 
    alert('Data berhasil dihapus');
    document.location='publikasi.php';
    </script>";
    exit;
} else {
    echo"<script> 
    alert('Data gagal dihapus');
    document.location='publikasi.php';
    </script>";
    exit;
}
?>