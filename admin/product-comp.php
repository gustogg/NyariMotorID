<?php
require 'koneksi.php';
session_start();
// cek apakah sudah login
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
$smallcc = mysqli_query($conn,"SELECT * FROM smallcc");
?>

<?php include '../admin/layout/header.php'; ?>
<title>Kelola Data Kerja Kami - SD</title>
</head>

<body class="bg-gray-100 font-sans flex">
    <!-- Navbar & Sidebar -->
    <?php include '../admin/layout/navsidebar-comp.php'; ?>


    <div class="w-full overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            <h1 class="text-3xl text-black pb-3 font-bold">List Motor</h1>

            <div class="w-full mt-4">
                <div class="">
                    <a href="product-add-comp.php?product" class="flex flex-row bg-blue-200 text-blue-800 hover:bg-blue-400 hover:text-blue-900 rounded-lg px-6 py-3 w-max">
                        <button>
                            <i class="far fa-edit"></i>
                            Tambah List Motor
                        </button>
                    </a>
                </div>
                <div class="bg-white mt-3 overflow-auto">
                    <!-- <form  method="" action=""> -->
                    <table class="min-w-full bg-white">
                        <thead class="bg-red-800 text-white">
                            <tr>
                                <th class="py-3 px-4 uppercase font-semibold text-sm">No</th>
                                <th class="w-3/12 text-left py-3 px-4 uppercase font-semibold text-sm">Brand</th>
                                <th class="w-3/12 text-left py-3 px-4 uppercase font-semibold text-sm">Tipe</th>
                                <th class="w-4/12 text-left py-3 px-4 uppercase font-semibold text-sm">Foto Produk</th>
                                <th class="w-2/12py-3 px-4 uppercase font-semibold text-sm">Opsi</td>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">
                            <?php $i = 0; ?>
                            <?php foreach ($smallcc as $row) : ?>
                                <?php $i++; ?>
                                <?php if ($i % 2 == 1) { ?>
                                    <tr class="bg-white">
                                    <?php } else { ?>
                                    <tr class="bg-gray-200">
                                    <?php } ?>
                                    <td class="text-left py-3 px-4"><a class="hover:text-blue-500"><?= $i; ?></a></td>
                                    <td class="w-3/12  text-left py-3 px-4"><?= $row["brand"]; ?></td>
                                    <td class="w-3/12  text-left py-3 px-4"><?= $row["tipe"]; ?></td>
                                    <td class="w-4/12text-left py-3 px-4">
                                        <img src="/public/publikasi/<?= $row["nama_foto"]; ?>">
                                    </td>
                                    
                                    </td>
                                    <td class="w-3/12 text-left">
                                        <a href="../kerjakami-detail.php?id=<?php echo $row["id"]; ?>" target="_blank" class="flex flex-row bg-green-200 text-green-800 hover:bg-green-400 hover:text-green-900 rounded-lg px-6 py-3 w-max">
                                            <button>
                                                <i class="far fa-edit"></i>
                                                Lihat
                                            </button>
                                        </a>
                                        <a href="kerjakami-delete.php?hapus_data=<?php echo $row["id"]; ?>" class="mt-3 flex flex-row bg-red-200 text-red-800 rounded-lg hover:bg-red-400 hover:text-red-900 px-6 py-3 w-max">
                                            <button>
                                                <i class="fas fa-trash-alt"></i>
                                                Hapus
                                            </button>
                                        </a>
                                    </td>
                                    </tr>
                                <?php endforeach; ?>
                        </tbody>
                    </table>
                    <!-- </form> -->
                </div>
            </div>
        </main>
    </div>

    </div>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    <script>

    </script>
</body>

</html>