<?php include 'layout/header.php'; ?>
<?php
require './admin/koneksi.php';

$id = $_GET["id"];
// echo $id;
$smallcc = ("SELECT * FROM smallcc WHERE id = '$id'");
$hasil = mysqli_query($conn, $smallcc);
$data = mysqli_fetch_assoc($hasil);
?>
</head>

<body class="bg-gray-200 overflow-x-hidden">
    <?php include 'layout/navbar.php' ?>
    <div class="pt-16 md:w-11/12 lg:w-4/5 mx-auto">
        <div class="pt-10 bg-gray-100 pb-14">
            <p class="text-lg md:text-2xl text-center font-bold mb-8" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000"><?php echo $data["brand"]; ?></p>
            <p class="text-sm md:text-lg text-center font-semibold mb-3 pb-5" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000"><?php echo $data["tipe"]; ?></p>
            <div>
                <!-- Before -->
                <div class="mx-60" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <p class="text-sm md:text-lg"></p>
                            <div class="" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                                        <div class="border-4 border-gray-300 hover:border-red-500">
                                            <img class="object-fit h-80 w-full filter brightness-75 relative z-10" src="public/publikasi/<?php echo $data["nama_foto"]; ?>">
                                        </div>
                                   
                            </div>
                        
                </div>
                
            <!-- Next Bawahnya -->
            <div class ="pl-28 border-2 mx-8 my-8 pb-10 border-red-600">
            <?php if ($data["jenis"] != NULL) { ?>

<table class="table-auto text-left mt-20 hover:border-spacing-4 border-separate border-slate-400">
  
    <tr>
      <th class="border-4 py-2">Jenis Kendaraan</th>
      <td></td>
      <td class="px-10 bg-red-400 bg-opacity-60"><?php echo $data["jenis"]; ?></td>
    </tr>
    <tr>
      <th class="border-4 py-2">Volume Mesin</th>
      <td></td>
      <td class="px-10 bg-red-400"><?php echo $data["cc"]; ?>cc</td>
    </tr>

    <tr>
      <th class="border-4 py-2">Kapasitas Tangki Bahan Bakar</th>
      <td></td>
      <td class="px-10 bg-red-400 bg-opacity-60k"><?php echo $data["bbm"]; ?>liter</td>
    </tr>

    <tr>
      <th class="border-4 py-2">Jenis Transmisi</th>
      <td></td>
      <td class="px-10 bg-red-400"><?php echo $data["transmisi"]; ?></td>
    </tr>

    <tr>
      <th class="border-4 py-2">Daya Mesin / Power Output</th>
      <td></td>
      <td class="px-10 bg-red-400"><?php echo $data["Power"]; ?></td>
    </tr>

    <tr>
      <th class="border-4 py-2">Torsi Mesin </th>
      <td></td>
      <td class="px-10 bg-red-400"><?php echo $data["Torsi"]; ?></td>
    </tr>

    <tr>
      <th class="border-4 py-2"> Konsumsi Bahan Bakar (rata - rata)</th>
      <td></td>
      <td class="px-10 bg-red-400"><?php echo $data["jarak_bbm"]; ?> km/l</td>
    </tr>
    
</table>
            </div>
            <div>
     <p class="pt-8 pr-32 -my-56 text-sm md:text-lg font-semibold mb-1 text-right" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">Harga (On The Road) : Rp.<?php echo $data["Harga"]; ?>,00</p>
     <p class="pr-32 text-xs md:text-sm font-light mb-3 text-right pb-40" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">*Harga Taksiran Merupakan Harga Daerah Jabodetabek</p>
            <?php } ?>
      


    </div>


    <!--Footer -->
    <?php include 'layout/footer.php'; ?>