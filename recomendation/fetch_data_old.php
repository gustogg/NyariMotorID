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
			<div class="col-sm-12 col-lg-6 col-md-6">
				<div style="border:1px solid #ccc; border-radius:5px; padding:16px; margin-bottom:16px; height:450px;">
					<img src="../public/publikasi/'. $row['nama_foto'] .'" alt="" class="img-responsive" >
					<p align="center"><strong><a href="#">'. $row['tipe'] .'</a></strong></p>
					<h4 style="text-align:center;" class="text-danger" >Rp.'. $row['product_price'] .'</h4>
					<p>Transmisi : '. $row['product_camera'].' <br />
					Brand : '. $row['brand'] .' <br />
					Kapasitas CC : '. $row['product_ram'] .' CC<br />
					Storage : '. $row['product_storage'] .' GB </p> 
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