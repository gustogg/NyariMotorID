<?php 
require 'koneksi.php';
session_start();
// cek apakah sudah login
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

$judul = $_POST['judul'];
$jenis_file = $_POST['jenis_file'];
$nama_file = $_FILES['nama_file']['name'];

if($nama_file != ""){
    $ekstensi_diperbolehkan = array ('png', 'jpg','jpeg','mp4');
    $x = explode('.',$nama_file);
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['nama_file']['tmp_name'];
    $angka_acak = rand(1, 999);
    $nama_file_baru = $angka_acak.'-'.$nama_file;

    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        move_uploaded_file($file_tmp, '../public/publikasi/'.$nama_file_baru);

        $query = "INSERT INTO publikasi (judul, jenis_file, nama_file) VALUES ('$judul', '$jenis_file', '$nama_file_baru')";
        $result = mysqli_query($conn, $query);
        if(!$result){
            die("Query error : ".mysqli_errno($conn)." - ".mysqli_error($conn));
        }
        else {
            echo "<script>alert('Data Berhasil ditambahkan!');window.location='publikasi.php'</script>";
        }
    } else {
        echo "<script>alert('ekstensi file hanya bisa png,jpg,jpeg dan mp4');window.location='publikasi-add.php'</script>";
    }
}else {
    echo "<script>alert('silahkan tambahkan dokumentasi publikasi terlebih dahulu');window.location='publikasi-add.php'</script>";
}

?>