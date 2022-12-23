<?php
require './admin/koneksi.php';
$publikasi = mysqli_query($conn,"SELECT * FROM smallcc WHERE brand='Yamaha'");
?>

<?php include 'layout/header.php'; ?>
<title>List Motor</title>
</head>

<body class="overflow-x-hidden bg-gray-800">
    <?php include 'layout/navbar.php' ?>
    <div class="pt-16">
        <div class="" data-aos="fade-right" data-aos-delay="300" data-aos-duration="1000">
            <img class="object-cover w-full h-96 relative z-10 blur-md " src="public/publikasi/nmax155.jpg" alt="image" />
            <div class="bg-black -mt-24 relative z-20 w-60 md:w-96 mb-4 mx-auto rounded-md bg-opacity-60">
                <p class="p-3 font-semibold text-base md:text-2xl text-white text-center"><strong>LIST MOTOR</strong></p>
            </div>
        </div>
        <div class="md:mx-12 xl:mx-40 pt-14 pb-8 px-8 bg-gray-800">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-7">
                <!-- Publikasi Div -->
                <?php foreach ($publikasi as $row) : ?>
                    <div class="bg-white borde  r-8 shadow-xl rounded-lg">
                    <img class="rounded-lg " src="/public/publikasi/<?php echo $row["nama_foto"]?>">
                    <p class="pt-4 text-xl"><?php echo $row["jenis"]?></p>
                        <p class="text-xl text-red-600 font-bold"><?php echo $row["tipe"]?></p>
                        <p class="pt-2 text-lg"><strong>Kapasitas Mesin : </strong> <?php echo $row["cc"]?> CC</p>
                        <p class="pt-2 text-lg"><strong>Kapasitas BBM : </strong> <?php echo $row["bbm"]?>Liter</p>
                        <p class="pt-2 text-lg"><strong>Konsumsi BBM (/L) : </strong> <?php echo $row["jarak_bbm"]?> km/l</p>
                        <p class="pt-2 text-lg"><strong>Jenis Transmisi : </strong> <?php echo $row["transmisi"]?></p>
                        <p class="pt-2 text-lg"><strong>Tenaga : </strong> <?php echo $row["Power"]?> / <?php echo $row["Torsi"]?></p>
                        <p class="pt-4 text-lg font-bold"><?php echo $row["Harga"]?></p>
                        <p clas="text-xs pb-2">*Harga Rekomendasi OTR Jakarta</p>
                        
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
    <!--Footer -->
    <?php include 'layout/footer.php'; ?>