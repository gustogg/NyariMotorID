<?php 
 
$server = "localhost";
$user = "root";
$pass = "";
$database = "nyarimotorid";

$koneksi = mysqli_connect("localhost","root","","nyarimotorid");
$conn = mysqli_connect($server, $user, $pass, $database);
 
if (!$conn) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}   

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[]= $row;
    }
    return $row;

}
?>