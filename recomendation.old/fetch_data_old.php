<?php

//fetch_data.php
include('database_connection.php');

if(isset($_POST["action"]))
{
	$query = "
		SELECT * FROM smallcc
	";
	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$total_row = $statement->rowCount();
	echo $total_row;
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