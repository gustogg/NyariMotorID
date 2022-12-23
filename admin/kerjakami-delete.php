<?php
require 'koneksi.php';

session_start();
// cek apakah sudah login
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

$id = $_GET["hapus_data"];
$cek = "SELECT * FROM smallcc WHERE id = '$id'";
$cek2 = mysqli_query($conn, $cek);
$cek3 = mysqli_fetch_assoc($cek2);
$hapus_data = "DELETE FROM smallcc WHERE id = '$id'";
$hapus_berhasil = mysqli_query($conn, $hapus_data);

// Cek berhasil dihapus
if ($hapus_berhasil) {
    if ($cek3["brand"] == "yamaha") {
        echo "<script> 
    alert('Data berhasil dihapus');
    document.location='product.php';
    </script>";
    }
    else {
        echo "<script> 
    alert('Data berhasil dihapus');
    document.location='product.php';
    </script>";
    }
    exit;
} else {
    if ($cek3["brand"] == "yamaha") {
        echo "<script> 
    alert('Data gagal dihapus');
    document.location='product.php';
    </script>";
    }
    else {
        echo "<script> 
    alert('Data gagal dihapus');
    document.location='product.php';
    </script>";
    }
    exit;
}
