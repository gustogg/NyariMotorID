<?php
require './admin/koneksi.php';
include 'layout/header.php';
?>
<title>Home</title>
<meta name="keywords" content="nyari motor id, nyari motor, cari sepeda motor, rekomendasi sepeda motor">
<meta name="description" content="Nyari MotorID">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<style>
    .swiper-pagination-bullet-active {
        background-color: red;
    }
</style>
</head>

<body class="overflow-x-hidden">
    <?php include 'layout/navbar.php' ?>
     <!-- Alphine -->
     <div x-data="{ imgModal : false, imgModalSrc : '', imgModalDesc : '' }">
                <template @img-modal.window="imgModal = true; imgModalSrc = $event.detail.imgModalSrc; imgModalDesc = $event.detail.imgModalDesc;" x-if="imgModal">
                    <div x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-90" x-on:click.away="imgModalSrc = ''" class="p-2 fixed w-full h-100 inset-0 z-50 overflow-hidden flex justify-center items-center bg-black bg-opacity-90">
                        <div @click.away="imgModal = ''" class="flex flex-col max-w-3xl max-h-full overflow-auto">
                            <div class="z-50">
                                <button @click="imgModal = ''" class="float-right pt-2 pr-2 outline-none focus:outline-none">
                                    <svg class="fill-current text-white " xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                                        <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                            <div class="p-2">
                                <img :alt="imgModalSrc" class="object-contain mx-auto h-1/2-screen" :src="imgModalSrc">
                                <p x-text="imgModalDesc" class="mt-3 text-justify text-white"></p>
                            </div>
                        </div>
                    </div>
                </template>
            </div>    
    <div class="swiper mySwiper bg-gray-800">
        <div class="swiper-wrapper mt-10 bg-gray-800">
            <!-- Slider 1 -->
            <!-- <div class="swiper-slide">
                <div class="relative flex items-center justify-center h-screen mb-12 overflow-hidden">
                    <div class="relative z-30 p-5 text-2xl text-white bg-purple-300 bg-opacity-50 rounded-xl">
                        Welcome to my site!
                    </div>
                    <div class="object-cover object-center h-85-screen">
                        <video autoplay loop muted="w-full">
                            <source src="/images/video.mp4" type="video/mp4" />
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div> -->
            <!-- Slider 1 -->
            <div class="swiper-slide bg-gray-800">
                <div class="bg-gray-800">
                    <video autoplay="autoplay" class="myVideo object-cover object-top h-99 w-full relative z-10" data-aos="fade-right" data-aos-delay="300" data-aos-duration="1000">
                        <source src="/images/video.mp4" type="video/mp4" />
                    </video>
                    <!-- <div class="-mt-94 px-6 sm:pl-10 relative z-30">
                        <div class="px-8 w-full">
                            <div class="w-11/12 sm:w-7/12 md:w-7/12 lg:w-5/12 mx-auto py-8 bg-red-700 bg-opacity-80 rounded-md">
                                <p class=" text-sm text-center md:text-xl lg:text-2xl  text-white font-bold"> Selamat Datang di</p>
                                <p class=" text-sm text-center md:text-xl lg:text-2xl  text-white font-extrabold"> Yayasan Akhsara Linia Indonesia</p>
                            </div>
                        </div>
                    </div> -->
                    <div class="relative z-20 -mt-96 px-6 sm:pl-10  ">
                        <div class="px-8 w-max pb-2 mx-auto" data-aos="fade-right" data-aos-delay="300" data-aos-duration="1000">
                            <div class="py-3 px-3 text-center md:py-4 md:px-4 bg-transparent bg-opacity-80 rounded-lg w-52 md:w-max justify-center">
                                <p class="text-sm md:text-3xl text-white font-bold"> Lagi Bingung <strong>MILIH MOTOR? </strong></p>
                            </div>
                        </div>
                        <!-- <div class="px-8 mr-2 sm:-mr-48 lg:-mr-32 xl:mr-72">
                            <div class="py-2 px-3 text-left md:py-3 md:px-4 bg-black bg-opacity-80 rounded-lg sm:mr-98">
                                <p class="text-sm md:text-lg text-white font-normal"> Awal pembelajaran tatap muka pada minggu pertama bulan November, murid-murid SD Negeri 4 Sukawana merasa senang mendapatkan fasilitas meja belajar dan kursi yang baru dari Yayasan Akshara Linia Indonesia </p>
                            </div>
                        </div> -->
                        <!-- <div class="mt-2 px-8 mr-2 sm:-mr-48 lg:-mr-32 xl:mr-72 text-justify">
                            <div class="py-3 px-3 md:py-4 md:px-4 bg-black bg-opacity-30 rounded-lg sm:mr-80">
                                <p class="text-xs md:text-base text-white font-normal"> LOREM IPSUM DOL SIAMET LOREM IPSUM DOL SIAMET LOREM IPSUM DOL LOREM IPSUM DOL SIAMET LOREM IPSUM DOL SIAMET LOREM IPSUM DOL LOREM IPSUM DOL SIAMET LOREM IPSUM DOL SIAMET LOREM IPSUM DOL </p>
                            </div>
                        </div> -->
                        <div class="w-max mx-auto" data-aos="fade-right" data-aos-delay="300" data-aos-duration="1000">
                            <a href="/publikasi.php" class="">
                                <button class="mt-3 py-2 px-4 bg-red-500 hover:bg-red-700 text-white text-xs md:text-sm lg:text-xl font-bold rounded-md">
                                    CARI MOTOR PILIHANMU DISINI >
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slider 2 -->
            <div class="swiper-slide bg-gray-800">
                <div class="h-99">
                    <img class="object-cover h-99 w-full object-top filter brightness-75 relative z-10" src="images/yamahaxsr155.webp">
                    <div class="relative z-20 -mt-44 px-6 sm:pl-10  ">
                        <div class="px-8 mr-2 sm:-mr-48 lg:-mr-32 xl:mr-72">
                            <div class="py-3 px-3 text-left md:py-4 md:px-4 bg-black bg-opacity-80 rounded-lg sm:mr-96 ">
                                <p class="text-sm md:text-xl text-white font-bold"> Temukan Informasi Motor Pilihanmu Disini </p>
                            </div>
                        </div>  
                        <!-- <div class="mt-2 px-8 mr-2 sm:-mr-48 lg:-mr-32 xl:mr-72 text-justify">
                            <div class="py-3 px-3 md:py-4 md:px-4 bg-black bg-opacity-30 rounded-lg sm:mr-80">
                                <p class="text-xs md:text-base text-white font-normal"> LOREM IPSUM DOL SIAMET LOREM IPSUM DOL SIAMET LOREM IPSUM DOL LOREM IPSUM DOL SIAMET LOREM IPSUM DOL SIAMET LOREM IPSUM DOL LOREM IPSUM DOL SIAMET LOREM IPSUM DOL SIAMET LOREM IPSUM DOL </p>
                            </div>
                        </div> -->
                        <a href="/kerjakami-detail.php?id=1">
                            <button class="mx-8 mt-3 py-2 px-4 bg-red-500 hover:bg-red-700 text-white text-xs md:text-sm lg:text-base font-bold rounded-md">
                                Info Selengkapnya >
                            </button>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Slider 3 -->
            <div class="swiper-slide">
                <div class="h-99">
                    <img class="object-cover h-99 w-full object-top filter brightness-75 relative z-10" src="public\publikasi\nmax155.jpg">
                    <div class="relative z-20 -mt-44 px-6 sm:pl-10  ">
                        <div class="ml-64 sm:-mr-48 lg:-mr-32">
                            <div class="text-center md:py-4 md:px-4 bg-black bg-opacity-80 rounded-lg sm:mr-80">
                                <p class="text-sm md:text-xl text-white font-bold">Cari Motor? <br></p>
                                <p class="text-sm md:text-xl text-red-600 font-bold">NyariMotorID Aja </p>
                            </div>
                        </div>
                        <!-- <div class="mt-2 px-8 mr-2 sm:-mr-48 lg:-mr-32 xl:mr-72 text-justify">
                            <div class="py-3 px-3 md:py-4 md:px-4 bg-black bg-opacity-30 rounded-lg sm:mr-80">
                                <p class="text-xs md:text-base text-white font-normal"> LOREM IPSUM DOL SIAMET LOREM IPSUM DOL SIAMET LOREM IPSUM DOL LOREM IPSUM DOL SIAMET LOREM IPSUM DOL SIAMET LOREM IPSUM DOL LOREM IPSUM DOL SIAMET LOREM IPSUM DOL SIAMET LOREM IPSUM DOL </p>
                            </div>
                        </div> -->
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-button-next" data-aos="fade-right" data-aos-delay="300" data-aos-duration="1000" style="color:red"></div>
        <div class="swiper-button-prev" data-aos="fade-right" data-aos-delay="300" data-aos-duration="1000" style="color:red"></div>
        <div class="swiper-pagination" data-aos="fade-right" data-aos-delay="300" data-aos-duration="1000"></div>
    </div>

    <!-- Tempat kotak -->
    <div class="bg-gray-800 mt-0 p-3 md:px-28 pt-10">
        <!-- Tentang Kami -->
        <!-- mobile -->
        <div class="block md:hidden p-4 pt-6 bg-gray-100 bg-opacity-50 filter shadow-lg" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
            <div class="mb-4">
                <p class="text-center text-base font-bold text-red-600">Tentang</p>
            </div>
            <div>
                <img class="object-cover w-screen h-52 border-2 border-red-500 rounded-md" src="/images/tentangkami.jpg" alt="image" />
            </div>
            <div class="mt-3">
                <p class="text-sm text-justify"><strong>NyariMotorID</strong> Merupakan website yang membantu kamu menemukan motor yang sesuai dengan kebutuhan dan keinginan kamu.</p>
            </div>
            <div class="m-auto">
                <button class="mx-auto block mt-3 py-2 px-4 bg-red-500 hover:bg-red-700 text-white text-xs md:text-sm lg:text-base font-bold rounded-md">
                    Info Selengkapnya >
                </button>
            </div>
        </div>
        <!-- desktop -->
        <div class="-mt-11 md:mt-0 mb-10 p-8 bg-gray-100 bg-opacity-50 invisible md:visible grid grid-cols-3 filter shadow-lg" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
            <div class="col-span-2 px-8 my-auto hidden md:block ">
                <p class="text-lg mb-2 font-bold text-red-600">Tentang</p>
                <p class="text-base text-justify"><strong>NyariMotorID</strong> Merupakan website yang membantu kamu menemukan motor yang sesuai dengan kebutuhan dan keinginan kamu.<strong> NyariMotorID</strong> menyediakan sistem filter yang dapat kamu tentukan sendiri agar kamu menemukan motor idaman kamu. Kamu juga dapat melihat katalog berbagai motor terbaru dari semua brand Sepeda Motor yang ada di Indonesia</p>
                <a href="tentangkami.php">
                    <button class="block mt-3 py-2 px-4 bg-red-500 hover:bg-red-700 text-white text-xs md:text-sm lg:text-base font-bold rounded-md">
                        Info Selengkapnya >
                    </button>
                </a>
            </div>
            <div class="col-span-1 hidden md:block ">
                <img class="object-contain bg-black bg-opacity-60 ml-20 w-60 p-2 h-60 border-2 border-red-500 rounded-md" src="/images/tentangkami.jpg" alt="image" />
            </div>
        </div>
        <!-- Coming Soon -->
        <div class="my-6 p-4 bg-gray-100 bg-opacity-50 shadow-md" data-aos="fade-right" data-aos-delay="" data-aos-duration="700">
            <div class="">
                <p class="text-center text-base font-bold text-red-600 py-2">Informasi</p>
                <p class="text-center text-sm font-semibold text-black py-12">To be announced</p>
            </div>
        </div>
    </div>
    <!-- Publikasi -->
    <?php
    $publikasi = query("$conn, SELECT * FROM publikasi ORDER BY id DESC LIMIT 2");
    ?>
    <div class="bg-gray-800 px-4 lg:px-24 pb-8" data-aos="fade-left" data-aos-delay="100" data-aos-duration="1000">
        <p class="text-red-600 text-center font-bold pt-8">List Motor</p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 my-4 lg:my-12">
           
            <!-- Publikasi Div -->
            <?php foreach ($publikasi as $row) : ?>
    
                    <?php if ($row["jenis_file"] == "foto") { ?>
                        <div class="grid col-span-1 p-6 hover:border-red-500 border-2 border-red-500 bg-gray-500 shadow-md rounded-md cursor-pointer" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                            <div x-data="{}" class="px-2">
                                <div class="bg-gray-500">
                                    <a @click="$dispatch('img-modal', {  imgModalSrc: 'public/publikasi/<?php echo $row["nama_file"]; ?>', imgModalDesc: '<?php echo $row["judul"]; ?>' })" class="cursor-pointer">
                                        <img alt="Placeholder" class="object-cover w-screen h-52  md:h-80 object-top" src="public/publikasi/<?php echo $row["nama_file"]; ?>">
                                        <p class=" pl-2 mt-1 py-2 text-base font-semibold text-justify"><?php echo $row["judul"]; ?></p>
                                    </a>
                                </div>

                                <!-- <a class="">
                                    <button class="">
                                        <img class="object-cover w-screen h-52  md:h-64 object-top" src="public/publikasi/<?php echo $row["nama_file"]; ?>">
                                        <p class=" pl-2 mt-1 py-2 text-base font-semibold text-justify"><?php echo $row["judul"]; ?></p>
                                    </button>
                                </a> -->
                            </div>
                        </div>
                    <?php } else { ?>
                        <div class="grid col-span-1 p-6 hover:border-red-500 border-2 border-red-500 bg-gray-500 shadow-md rounded-md cursor-pointer" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                        <a>
                            <button class="">
                                <div class="col-span-1">
                                    <video class="w-full h-auto" controls>
                                        <source src="public/publikasi/<?php echo $row["nama_file"] ?>#t=0.1" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                    <p class=" pl-2 mt-1 py-2 text-sm md:text-base font-semibold text-justify"><?php echo $row["judul"]; ?></p>
                                </div>
                            </button>
                        </a>
                        </div>
                    <?php } ?>

            <?php endforeach; ?>
        </div>
        <div class=" ">
            <a href="/publikasi.php">
                <button class="block mx-auto mt-3 py-2 px-4 bg-red-500 hover:bg-red-700 text-white text-xs md:text-sm lg:text-base font-bold rounded-md">
                    Info Selengkapnya >
                </button>
            </a>
        </div>
    </div>

    <!-- Swiper JS (Slider) -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            cssMode: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
            },
            mousewheel: true,
            keyboard: true,
        });
    </script>
    <!-- AOS -->
    <script>
        AOS.init();
    </script>
    <!--Footer -->
    <?php include 'layout/footer.php'; ?>