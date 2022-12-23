<?php
require 'koneksi.php';
session_start();
// cek apakah sudah login
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

$product = $_GET["product"];
?>

<?php include '../admin/layout/header.php'; ?>
<title>Tambah Data List Motor</title>
</head>

<body class="bg-gray-100 font-sans flex">
    <!-- Navbar & Sidebar -->
    <?php include '../admin/layout/navsidebar.php'; ?>


    <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            <h1 class="w-full text-3xl text-black pb-6">List Motor</h1>

            <div class="flex flex-wrap">
                <div class="w-full my-6 pr-0 lg:pr-2">
                    <p class="text-xl pb-6 flex items-center">
                        <i class="fas fa-list mr-3"></i> Tambah Data
                    </p>
                    <div class="leading-loose">
                        <form class="p-10 bg-white rounded shadow-xl" method="POST" action="product-add-process.php" enctype="multipart/form-data">
                            <div class="">
                                <label class=" block text-sm text-gray-600" for="brand">Brand</label>
                                <select class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" id="brand" name="brand">
                                    <option class="w-full px-5  py-4 text-gray-700 bg-white rounded" name="Yamaha" value="Yamaha">Yamaha</option>
                                    <option class="w-full px-5  py-4 text-gray-700 bg-white rounded" name="Suzuki" value="Suzuki">Suzuki</option>
                                    <option class="w-full px-5  py-4 text-gray-700 bg-white rounded" name="Honda" value="Honda">Honda</option>
                                    <option class="w-full px-5  py-4 text-gray-700 bg-white rounded" name="Kawasaki" value="Kawasaki">Kawasaki</option>
                                </select>
                            </div>
                            <div class="mt-2">
                                <label class="block text-sm text-gray-600" for="tipe">Tipe</label>
                                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="tipe" name="tipe" type="text" required="" placeholder="tipe" aria-label="Name">
                            </div>
                            <div class="mt-2">
                                <label class="block text-sm text-gray-600" for="cc">Kapasitas CC</label>
                                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="cc" name="cc" type="text" required="" placeholder="cc" aria-label="Name">
                            </div>
                            <div class="">
                                <label class=" block text-sm text-gray-600" for="jenis">Jenis Motor</label>
                                <select class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" id="jenis" name="jenis">
                                    <option class="w-full px-5  py-4 text-gray-700 bg-white rounded" name="Skuter" value="Skuter">Skuter</option>
                                    <option class="w-full px-5  py-4 text-gray-700 bg-white rounded" name="Moped" value="Moped">Moped</option>
                                    <option class="w-full px-5  py-4 text-gray-700 bg-white rounded" name="Sport" value="Sport">Sport</option>
                                    <option class="w-full px-5  py-4 text-gray-700 bg-white rounded" name="Sport Naked" value="Sport Naked">Sport Naked</option>
                                    <option class="w-full px-5  py-4 text-gray-700 bg-white rounded" name="Retro" value="Retro">Retro</option>
                                </select>
                            </div>
                            <div class="mt-2">
                                <label class="block text-sm text-gray-600" for="bbm">Kapasitas BBM (Liter)</label>
                                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="bbm" name="bbm" type="text" required="" placeholder="bbm" aria-label="Name">
                            </div>
                            <div class="">
                                <label class=" block text-sm text-gray-600" for="transmisi">Jenis Transmisi</label>
                                <select class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" id="transmisi" name="transmisi">
                                    <option class="w-full px-5  py-4 text-gray-700 bg-white rounded" name="Otomatis" value="Otomatis">Otomatis</option>
                                    <option class="w-full px-5  py-4 text-gray-700 bg-white rounded" name="Semi - Manual" value="Semi - Manual">Semi - Manual</option>
                                    <option class="w-full px-5  py-4 text-gray-700 bg-white rounded" name="Manual" value="Manual">Manual</option>
                                </select>
                            </div>
                            <div class="mt-2">
                                <label class="block text-sm text-gray-600" for="cc">power (Daya Kuda)</label>
                                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="power" name="power" type="text" required="" placeholder="power" aria-label="Name">
                            </div>
                            <div class="mt-2">
                                <label class="block text-sm text-gray-600" for="cc">Torsi (Nm)</label>
                                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="Torsi" name="Torsi" type="text" required="" placeholder="Torsi" aria-label="Name">
                            </div>
                            <div class="mt-2">
                                <label class="block text-sm text-gray-600" for="jarak_bbm">Konsumsi BBM</label>
                                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="jarak_bbm" name="jarak_bbm" type="text" required="" placeholder="Konsumsi Bahan Bakar Kendaraan (per liter dalam 1 kilometer)" aria-label="jarak_bbm">
                            </div>
                            <div class="mt-2">
                                <label class="block text-sm text-gray-600" for="sub_kegiatan1">Harga (Rupiah)</label>
                                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="Harga" name="Harga" type="text" required="" placeholder="Harga" aria-label="Name">
                            </div>
                            <div class="grid grid-cols-2 gap-5">
                                <div class="col-span-3">
                                    
                                        <div class="mt-2">
                                            <label class="block text-sm text-gray-600" for="nama_foto">Pilih Foto Kendaraan</label>
                                            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" type="file" name="nama_foto" id="nama_foto">
                                        </div>
                                        <div class="mt-2">
                                            <label class="block text-sm text-gray-600" for="nama_foto2">Pilih Foto Kendaraan</label>
                                            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" type="file" name="nama_foto2" id="nama_foto2">
                                        </div>
                                        <div class="mt-2">
                                            <label class="block text-sm text-gray-600" for="nama_foto3">Pilih Foto Kendaraan</label>
                                            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" type="file" name="nama_foto3" id="nama_foto3">
                                        </div>
                                  
                                </div>
                                
                                
                            <!-- Submit -->
                            <div class="mt-6 flex flex-row">
                                <div class="">
                                    <button class="px-4 py-1 text-white font-light tracking-wider bg-red-500 hover:bg-red-600 rounded" type="submit">Submit</button>
                                </div>
                                <div class="ml-4">
                                    <?php ?>
                                        <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-500 hover:bg-gray-600 rounded" onclick="location.href='product.php'">Cancel</button>
                                    <?php ?>
                                        
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