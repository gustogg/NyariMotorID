<?php
require 'koneksi.php';
session_start();
// cek apakah sudah login
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

$brand = $_POST['brand'];
$tipe = $_POST['tipe'];
$cc = $_POST['cc'];
$jenis = $_POST['jenis'];
$transmisi = $_POST['transmisi'];
$Power = $_POST['power'];
$Torsi = $_POST['Torsi'];
$Harga = $_POST['Harga'];
$bbm = $_POST['bbm'];
// Sub Kegiatan 1
$cc = $_POST['cc'];
$jenis = $_POST['jenis'];
$nama_foto = $_FILES['nama_foto']['name'];


if ($nama_foto != "") {
    $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg');
    // Foto Before (sub kegiatan 1)
    $x1 = explode('.', $nama_foto);
    $ekstensi1 = strtolower(end($x1));
    $file_tmp1 = $_FILES['nama_foto']['tmp_name'];
    $angka_acak = rand(1, 999);
    
   
    // Pemindahan ke database dan folder
    if (in_array($ekstensi1, $ekstensi_diperbolehkan) === true) {
        // upload to database
        if ($nama_foto != NULL) {
            move_uploaded_file($file_tmp1, '../public/publikasi' .  '/' . $nama_foto);
        }
        $query = "INSERT INTO smallcc (brand, tipe, cc, jenis, bbm, transmisi, power, Torsi, Harga, nama_foto) 
        VALUES ('$brand', '$tipe', '$cc', '$jenis', '$bbm', '$transmisi', '$Power', '$Torsi', '$Harga', '$nama_foto')";
        $result = mysqli_query($conn, $query);
        if (!$result) {
            die("Query error : " . mysqli_errno($conn) . " - " . mysqli_error($conn));
        } else {
           echo "<script>alert('Data Berhasil ditambahkan!');window.location='product.php'</script>";
            
        }
    } 
} 
