<?php

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
		 AND harga BETWEEN '".$_POST["minimum_price"]."' AND '".$_POST["maximum_price"]."'
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
		$ram_filter = implode("','", $_POST["cc"]);
		$query .= "
		 AND cc IN('".$ram_filter."')
		";
	}
	if(isset($_POST["transmisi"]))
	{
		$storage_filter = implode("','", $_POST["transmisi"]);
		$query .= "
		 AND transmisi IN('".$storage_filter."')
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
			<div class="col-sm-4 col-lg-3 col-md-3">
				<div style="border:1px solid #ccc; border-radius:5px; padding:16px; margin-bottom:16px; height:450px;">
					<img src="public/publikasi'. $row['nama_foto'] .'" alt="" class="img-responsive" >
					<p align="center"><strong><a href="#">'. $row['tipe'] .'</a></strong></p>
					<h4 style="text-align:center;" class="text-danger" >'. $row['harga'] .'</h4>
					<p>Camera : '. $row['jenis'].' MP<br />
					Brand : '. $row['brand'] .' <br />
					RAM : '. $row['cc'] .' GB<br />
					Storage : '. $row['transmisi'] .' GB </p>
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