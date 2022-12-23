<?php
 include ('../layout/header.php');
 include ('../layout/navbar.php');
//fetch_data.php
include('database_connection.php');

if(isset($_POST["action"]))
{
	$query = "
		SELECT * FROM smallcc 
	";
    if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"]))
	{
		$query .= "
		 WHERE Harga BETWEEN '".$_POST["minimum_price"]."' AND '".$_POST["maximum_price"]."'
		";
	}
    if(isset($_POST["brand"]))
	{
		$brand_filter = implode("','", $_POST["brand"]);
		$query .= "
		 AND brand IN('".$brand_filter."')
		";
	}
    if(isset($_POST["cc"]))
	{
		$cc_filter = implode("','", $_POST["cc"]);
		$query .= "
		 AND cc IN('".$cc_filter."')
		";
	}
    if(isset($_POST["transmisi"]))
	{
		$transmisi_filter = implode("','", $_POST["transmisi"]);
		$query .= "
		 AND transmisi IN('".$transmisi_filter."')
		";
	}
	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$total_row = $statement->rowCount();
	$output = '';
	if($total_row > 0)
	{
		foreach($result as $row)
		{
			$output .= '
			<div class="col-sm-12 col-lg-6 col-md-6 pt-4 text-2xl">
				<div style="border:1px solid #ccc; border-radius:5px; padding:36x; margin-bottom:16x; height:400px; width: 430px;" class="bg-white">
					<img src="../public/publikasi/'. $row['nama_foto'] .'" alt="" class="rounded-lg;object-cover w-full h-96 object-cover object-center" >
					<div class="text-3xl pb-5">
					<p style="text-align:center;"><strong>'. $row['tipe'] .'</strong></p>
					</div>
					<div class="text-3xl pb-5">
					<h4 style="text-align:center;" class="text-danger" >Rp.'. $row['Harga'] .'</h4>
					</div>
					<div class="text-3xl pb-5">
					<p class="">Transmisi : '. $row['transmisi'].' <br />
					Brand : '. $row['brand'] .' <br />
					Kapasitas CC : '. $row['cc'] .' CC<br />
					Kapasitas Bahan Bakar : '. $row['bbm'] .' Liter </p> 
					</div>
				</div>

			</div>
			';
		}
	}
	else
	{
		$output = '<h3>No Data Found</h3>';
	}
	echo $output;
}

?>