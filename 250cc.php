<?php
require './admin/koneksi.php';
$publikasi = query("SELECT * FROM publikasi ORDER BY id DESC");
?>

<?php include 'layout/header.php'; ?>
<title>Motor 250 CC - 600 CC</title>
</head>

<body class="overflow-x-hidden bg-gray-800">
    <?php include 'layout/navbar.php' ?>
    <div class="pt-16">
        <div class="blur-sm" data-aos="fade-right" data-aos-delay="300" data-aos-duration="1000">
            <img class="object-cover w-full h-96 relative z-10 blur-md " src="public/publikasi/zx25r.jpg" alt="image" />
            <div class="bg-black -mt-24 relative z-20 w-60 md:w-96 mb-4 mx-auto rounded-md bg-opacity-60">
                <p class="p-3 font-semibold text-base md:text-2xl text-white text-center"><strong>MOTOR 250 CC - 600 CC</strong></p>
            </div>
        </div>
        <div class="md:mx-12 xl:mx-40 pt-14 pb-8 px-8 bg-gray-800">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-7">
                <!-- Publikasi Div -->
                <?php foreach ($publikasi as $row) : ?>
                    <?php if ($row["jenis_file"] == "foto") { ?>
                        <!-- Foto -->
                        <div class="grid col-span-1 p-6 hover:border-red-500 border-2 border-red-800 bg-gray-700 shadow-md rounded-md cursor-pointer" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                            <a class="">
                                <button class="">
                                    <img class="object-cover w-screen h-52  md:h-64 object-top" src="public/publikasi/<?php echo $row["nama_file"]; ?>">
                                    <p class=" text-gray-200 pl-2 mt-1 py-2 text-base font-semibold text-justify"><?php echo $row["judul"]; ?></p>
                                </button>
                            </a>
                        </div>
                    <?php } elseif ($row["jenis_file"] == "video") { ?>
                        <!-- video -->
                        <div class="grid col-span-1 p-6 hover:border-red-500 border-2 border-red-800 bg-gray-700 shadow-md rounded-md cursor-pointer" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                            <a>
                                <button class="">
                                    <video class="w-full h-auto" controls>
                                        <source src="public/publikasi/<?php echo $row["nama_file"] ?>#t=0.1" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                    <p class=" text-gray-200 pl-2 mt-1 py-2 text-base font-semibold text-justify"><?php echo $row["judul"]; ?></p>
                                </button>
                            </a>
                        </div>
                    <?php } ?>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
    <!--Footer -->
    <?php include 'layout/footer.php'; ?>