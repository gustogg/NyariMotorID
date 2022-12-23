<?php include 'layout/header.php'; ?>
</head>

<body class="bg-gray-200 overflow-x-hidden">
    <?php include 'layout/navbar.php' ?>
    <div class="pt-16 w-full md:w-11/12 lg:w-4/5 mx-auto">
        <div class="">
            <img class="object-cover h-96 w-full filter brightness-75 relative z-10" src="public/tk/tk-1-b.jpg" alt="image" />
        </div>
        <div class="pt-10 pb-8 px-8 bg-gray-100">
            <p class="text-lg md:text-2xl text-center font-bold mb-8">TK Sekolah Jauh Desa Pedawa, Singaraja, Kabupaten Buleleng</p>
            <p class="text-sm md:text-lg font-semibold mb-3">Perbaikan Tangga tanpa pegangan yang Beresiko bagi anak anak TK</p>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                <!-- Before -->
                <div class="col-span-1">
                    <p class="text-sm md:text-lg pb-2">Before</p>
                    <div class="flex w-full h-80">
                        <div class="pr-0 md:pr-4 h-full w-full">
                            <div class="border-2 h-full border-gray-300 hover:border-red-500">
                                <img class="h-full w-full filter brightness-75 blur-sm relative z-10" src="public/tk/tk-1-b.jpg">
                                <div class="h-full w-full mt-1">
                                    <img class="h-full w-full -mt-80 object-contain object-center relative z-20" src="public/tk/tk-1-b.jpg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-1">
                    <p class="text-sm md:text-lg pl-0 md:pl-4 pb-2">After</p>
                    <div class="flex w-full h-80">
                        <div class="pl-0 md:pl-4 w-full">
                            <div class="border-2 h-full border-gray-300 hover:border-red-500">
                                <img class="h-full w-full filter brightness-75 blur-sm relative z-10" src="public/tk/tk-1-a.jpg">
                                <div class="h-full w-full mt-1">
                                    <img class="h-full w-full -mt-80 object-contain object-center relative z-20" src="public/tk/tk-1-a.jpg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!--Footer -->
    <?php include 'layout/footer.php'; ?>