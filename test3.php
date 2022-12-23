<?php
include './admin/koneksi.php';
$kerjakami = query ("SELECT * FROM kerjakami");
?>
<?php echo json_encode($kerjakami)?>
<?php         
$data= json_encode($kerjakami);
$query = "INSERT INTO test(coba) VALUES ('$data')";
$result = mysqli_query($conn, $query);
echo "succes";
?>
