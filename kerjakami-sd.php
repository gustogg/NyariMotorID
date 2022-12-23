<?php
require './admin/koneksi.php';
$kerjakami = query("SELECT * FROM smallcc WHERE brand = 'Yamaha' ORDER BY id DESC");
?>

<?php include 'layout/header.php'; ?>
<title>Kelola List Motor</title>
</head>

<body class="overflow-x-hidden">
    <?php include 'layout/navbar.php' ?>
    <div class="pt-16">
        <div class="" data-aos="fade-right" data-aos-delay="300" data-aos-duration="1000">
            <img class="object-cover w-full h-96 relative z-10 object-top" src="public/sd/sd-1-st2.jpg" alt="image" />
            <div class="bg-black -mt-24 relative z-20 w-60 md:w-96 mb-4 mx-auto rounded-md bg-opacity-60">
                <p class="p-3 font-semibold text-base md:text-lg text-white text-center">YAMAHA</p>
            </div>
        </div>
        <div class="md:mx-12 xl:mx-40 pt-10 pb-8 lg:px-4 bg-gray-100">
            <form action="kerjakami-search.php" method="get" data-aos="fade-right" data-aos-delay="300" data-aos-duration="1000">
                <div class="container flex justify-end items-end">
                    <div class="relative mr-6 lg:mr-2 lg:mr-6 ">
                        <div class="absolute top-4 left-3"> <i class="fas fa-search text-gray-400 z-20 hover:text-gray-500"></i> </div> <input type="text" class="h-14 w-80 lg:w-98 pl-10 pr-28 rounded-lg z-0 focus:shadow focus:outline-none" name="search" placeholder="Cari pada Kerja Kami">
                        <div class="absolute top-2 right-2"> <button class="h-10 w-20 text-white rounded-lg bg-red-500 hover:bg-red-600" type="submit">Search</button> </div>
                    </div>
                </div>
            </form>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-0" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                <?php foreach ($smallcc as $row) : ?>
                    <div class="grid col-span-1 p-6" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                        <a href="/kerjakami-detail.php?id=<?php echo $row["id"]; ?>" name="<?php $row["id"]; ?>">
                            <button class="hover:border-red-500 border-2 rounded-md border-gray-100">
                                <div class="col-span-1 p-3 bg-white shadow-md rounded-md">
                                <?php $i = 12; ?>
                                    <?php while ($i > 0) { ?>
                                        <?php if ($i > 4) { ?>
                                            <?php $j = $i-2;?>
                                            <?php if ($row["nama_foto$j"] !== NULL) { ?>                                                
                                                <img class="object-cover w-screen h-52 object-top" src="public/<?php echo $row["kategori"] ?>/<?php echo $row["nama_foto$j"]; ?>" alt="image">
                                                <?php $i = 0; ?>
                                            <?php } ?>
                                        <?php } else { ?>
                                            <?php if ($row["before_foto$i"] != NULL) { ?>
                                                <img class="object-cover w-screen h-52 object-top" src="public/<?php echo $row["kategori"] ?>/<?php echo $row["before_foto$i"]; ?>" alt="image">
                                                <?php $i = 0; ?>
                                            <?php } ?>
                                        <?php } ?>
                                        <?php $i--; ?>
                                    <?php } ?>


                                    <p class=" pl-2 mt-1 py-2 text-base text-left font-semibold"><?php echo $row["lokasi_kegiatan"]; ?></p>
                                    <div class="mr-auto w-48  py-2 px-4 bg-red-500 hover:bg-red-700 text-white text-xs md:text-sm lg:text-sm font-bold rounded-md">
                                        Baca Selengkapnya >
                                    </div>
                                </div>
                            </button>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>


        <!--Footer -->
        <?php include 'layout/footer.php'; ?>