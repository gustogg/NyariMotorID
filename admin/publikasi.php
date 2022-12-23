<?php
require 'koneksi.php';
session_start();
// cek apakah sudah login
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
$publikasi = mysqli_query($conn,"SELECT * FROM publikasi");
?>

<?php include '../admin/layout/header.php'; ?>
<title>Daftar Pabrikan</title>
</head>

<body class="bg-gray-100 font-sans flex">
    <!-- Navbar & Sidebar -->
    <?php include '../admin/layout/navsidebar.php'; ?>


    <div class="w-full overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            <h1 class="text-3xl text-black pb-3 font-bold">Daftar Pabrikan</h1>

            <div class="w-full mt-4">
                <div class="">
                    <a href="publikasi-add.php" class="flex flex-row bg-blue-200 text-blue-800 hover:bg-blue-400 hover:text-blue-900 rounded-lg px-6 py-3 w-max">
                        <button>
                            <i class="far fa-edit"></i>
                            Tambah Pabrikan
                        </button>
                    </a>
                </div>
                <div class="bg-white mt-3 overflow-auto">
                    <!-- <form  method="" action=""> -->
                        <table class="min-w-full bg-white">
                            <thead class="bg-red-800 text-white">
                                <tr>
                                    <th class="py-3 px-4 uppercase font-semibold text-sm">No</th>
                                    <th class="w-6/12 text-left py-3 px-4 uppercase font-semibold text-sm">Nama Pabrikan</th>
                                    <th class="w-3/12 text-left py-3 px-4 uppercase font-semibold text-sm">Logo</th>
                                   
                                    <th class="w-2/12py-3 px-4 uppercase font-semibold text-sm">Opsi</td>
                                </tr>
                            </thead>
                            <tbody class="text-gray-700">
                                <?php $i = 0; ?>
                                <?php foreach ($publikasi as $row) : ?>
                                    <?php if ($row["jenis_file"] == "foto") { ?>
                                        <?php $i++; ?>
                                        <?php if ($i % 2 == 1) { ?>
                                            <tr class="bg-white">
                                            <?php } else { ?>
                                            <tr class="bg-gray-200">
                                            <?php } ?>
                                            <td class="text-left py-3 px-4"><a class="hover:text-blue-500"><?= $i; ?></a></td>
                                            <td class="w-6/12  text-left py-3 px-4"><?= $row["judul"]; ?></td>
                                            <td class="w-3/12text-left py-3 px-4">
                                                <img src="/public/publikasi/<?= $row["nama_file"]; ?>">
                                            </td>
                                           
                                            <td class="w-2/12 text-left">
                                                <a href="publikasi-edit.php?=<?php echo $row["id"]; ?>" class="hidden flex flex-row bg-green-200 text-green-800 hover:bg-green-400 hover:text-green-900 rounded-lg px-6 py-3 w-max">
                                                    <button>
                                                        <i class="far fa-edit"></i>
                                                        Edit
                                                    </button>
                                                </a>
                                                <a href="publikasi-delete.php?hapus_data=<?php echo $row["id"]; ?>" class="mt-3 flex flex-row bg-red-200 text-red-800 rounded-lg hover:bg-red-400 hover:text-red-900 px-6 py-3 w-max">
                                                    <button>
                                                        <i class="fas fa-trash-alt"></i>
                                                        Hapus
                                                    </button>
                                                </a>
                                            </td>
                                            </tr>
                                        <?php } elseif ($row["jenis_file"] == "video") { ?>
                                            <?php $i++; ?>
                                            <?php if ($i % 2 == 1) { ?>
                                                <tr class="bg-white">
                                                <?php } else { ?>
                                                <tr class="bg-gray-200">
                                                <?php } ?>
                                                <td class="py-3 px-4"><a class="hover:text-blue-500"><?php echo $i; ?></a></td>
                                                <td class="w-6/12 text-left py-3 px-4"><?= $row["judul"]; ?></td>
                                                <td class="w-3/12 text-left py-3 px-4">
                                                    <video class="w-full h-auto" controls>
                                                        <source src="/public/publikasi/<?= $row["nama_file"]; ?>#t=0.1" type="video/mp4">
                                                        Your browser does not support the video tag.
                                                    </video>
                                                </td>
                                                <td class="w-2/12 text-left">
                                                    <a href="publikasi-edit.php?edit_data=<?php echo $row["id"]; ?>" class="hidden flex flex-row bg-green-200 text-green-800 hover:bg-green-400 hover:text-green-900 rounded-lg px-6 py-3 w-max">
                                                        <button>
                                                            <i class="far fa-edit"></i>
                                                            Edit
                                                        </button>
                                                    </a>
                                                    <a href="publikasi-delete.php?hapus_data=<?php echo $row["id"]; ?>" class="mt-3 flex flex-row bg-red-200 text-red-800 rounded-lg hover:bg-red-400 hover:text-red-900 px-6 py-3 w-max">
                                                        <button>
                                                            <i class="fas fa-trash-alt"></i>
                                                            Hapus
                                                        </button>
                                                    </a>
                                                </td>
                                                </tr>
                                            <?php } ?>
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