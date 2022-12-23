<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="public/popup-js/magnific-popup.css">

</head>

<body>
    <?php



    ?>
    <!-- backup search -->
    <?php if ($row["nama_foto5"] != NULL) { ?>
        <img class="object-cover w-screen h-52 object-top" src="public/<?php echo $row["kategori"] ?>/<?php echo $row["nama_foto5"]; ?>" alt="image">
    <?php } else if ($row["nama_foto3"] != NULL) { ?>
        <img class="object-cover w-screen h-52 object-top" src="public/<?php echo $row["kategori"] ?>/<?php echo $row["nama_foto3"]; ?>" alt="image">
    <?php } else { ?>
        <img class="object-cover w-screen h-52 object-top" src="public/<?php echo $row["kategori"] ?>/<?php echo $row["before_foto1"]; ?>" alt="image">
    <?php } ?>
</body>

</html>