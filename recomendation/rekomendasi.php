<?php 

//index.php

include('database_connection.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include ('../layout/header.php');?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Product filter in php</title>

    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href = "css/jquery-ui.css" rel = "stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
<?php include ('../layout/header.php');?>
<?php include ('../layout/navbar.php');?>
    <!-- Page Content -->
    <div class=" bg-red-600">
        <div class="row">
        	<br />
            <div class="ml-20 text-white">
        	<p class="text-center text-6xl">Filter Rekomendasi Sepeda Motor</p>
            </div>
        	<br />
            <div class="col-md-3">                				
				<div class="list-group text-xl text-white ml-5">
					<p class="text-4xl text-white pb-5">Price</p>
					<input type="hidden" id="hidden_minimum_price" value="10000000" />
                    <input type="hidden" id="hidden_maximum_price" value="120000000" />
                    <div class="pb-5 text-3xl">
                    <p id="price_show">Rp.10.000.000 - Rp.120.000.000</p>
                    </div>
                    <div id="price_range"></div>
                </div>				
                <div class="list-group text-3xl text-red-500 ml-5">
                <div class="list-group text-4xl text-white">
					<p>Brand</p>
                </div>
                    <div style="height: 180px; overflow-y: hidden; overflow-x: hidden;">
					<?php
                    $query = "
                    SELECT DISTINCT(brand) FROM smallcc 
                    ";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector brand" value="<?php echo $row['brand']; ?>" > <?php echo $row['brand']; ?></label>
                    </div>
                    <?php
                    }

                    ?>
                    </div>
                </div>
                

				<div class="list-group text-3xl text-red-500 ml-5">
                <div class="list-group text-4xl text-white">
					<p>Kapasitas CC</p>
                </div>
                    <?php
                    $query = "
                    SELECT DISTINCT(cc) FROM smallcc
                    ";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector cc" value="<?php echo $row['cc']; ?>" > <?php echo $row['cc']; ?> CC</label>
                    </div>
                    <?php    
                    }

                    ?>
                </div>
				
				<div class="list-group text-3xl text-red-500 ml-5">
                <div class="list-group text-4xl text-white">
					<p>Transmisi</p>
                </div>
					<?php
                    $query = "
                    SELECT DISTINCT(transmisi) FROM smallcc
                    ";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector transmisi" value="<?php echo $row['transmisi']; ?>" > <?php echo $row['transmisi']; ?></label>
                    </div>
                    <?php
                    }
                    ?>	
                </div>
            </div>

            <div class="col-md-9">
            	<br />
                <div class="row filter_data">

                </div>
            </div>
        </div>

    </div>
<style>
#loading
{
	text-align:center; 
	background: url('loader.gif') no-repeat center; 
	height: 150px;
}
</style>

<script>
$(document).ready(function(){

    filter_data();

    function filter_data()
    {
        $('.filter_data').html('<div id="loading" style="" ></div>');
        var action = 'fetch_data';
        var minimum_price = $('#hidden_minimum_price').val();
        var maximum_price = $('#hidden_maximum_price').val();
        var brand = get_filter('brand');
        var cc = get_filter('cc');
        var transmisi = get_filter('transmisi');
        $.ajax({
            url:"fetch_data.php",
            method:"POST",
            data:{action:action, minimum_price:minimum_price, maximum_price:maximum_price, brand:brand, cc:cc, transmisi:transmisi},
            success:function(data){
                $('.filter_data').html(data);
            }
        });
    }

    function get_filter(class_name)
    {
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        });
        return filter;
    }

    $('.common_selector').click(function(){
        filter_data();
    });

    $('#price_range').slider({
        range:true,
        min:10000000,
        max:120000000,
        values:[10000000, 120000000],
        step:5,
        stop:function(event, ui)
        {
            $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
            $('#hidden_minimum_price').val(ui.values[0]);
            $('#hidden_maximum_price').val(ui.values[1]);
            filter_data();
        }
    });

});
</script>

</body>

</html>
