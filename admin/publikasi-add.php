<?php
require 'koneksi.php';
session_start();
// cek apakah sudah login
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

?>

<?php include '../admin/layout/header.php'; ?>
<title>Tambah Data Publikasi</title>
</head>

<body class="bg-gray-100 font-sans flex">
    <!-- Navbar & Sidebar -->
    <?php include '../admin/layout/navsidebar.php'; ?>

    <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            <h1 class="w-full text-3xl text-black pb-6">Publikasi</h1>

            <div class="flex flex-wrap">
                <div class="w-full my-6 pr-0 lg:pr-2">
                    <p class="text-xl pb-6 flex items-center">
                        <i class="fas fa-list mr-3"></i> Tambah Data
                    </p>
                    <div class="leading-loose">
                        <form class="p-10 bg-white rounded shadow-xl" method="POST" action="publikasi-add-process.php" enctype="multipart/form-data">
                            <div class="">
                                <label class="block text-sm text-gray-600" for="name">Judul</label>
                                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="name" name="judul" type="text" required="" placeholder="Judul Publikasi" aria-label="Name">
                            </div>
                            <div class="mt-2">
                                <label class=" block text-sm text-gray-600" for="jenis_file">Jenis File</label>
                                <select class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" id="jenis_file" name="jenis_file">
                                    <option class="w-full px-5  py-4 text-gray-700 bg-white rounded" name="foto" value="foto">Foto</option>
                                    <option class="w-full px-5  py-4 text-gray-700 bg-white rounded" name="video" value="video">Video</option>
                                </select>
                            </div>
                            <div class="mt-2">
                                <label class="block text-sm text-gray-600" for="fileupload">Pilih Foto / Video</label>
                                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" type="file" name="nama_file" id="fileupload">
                            </div>
                            <div class="mt-6 flex flex-row">
                                <div class="">
                                    <button class="px-4 py-1 text-white font-light tracking-wider bg-red-500 hover:bg-red-600 rounded" type="submit">Submit</button>
                                </div>
                                <div class="ml-4">
                                    <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-500 hover:bg-gray-600 rounded" onclick="location.href='publikasi.php'">Cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
        </main>
    </div>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    <script>

    </script>
</body>

</html>