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
<title>Kelola Data - Admin</title>
</head>

<body class="bg-gray-100 font-sans flex">
    <!-- Navbar & Sidebar -->
    <?php include '../admin/layout/navsidebar-comp.php'; ?>


    <div class="w-full overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            <h1 class="text-3xl text-black pb-3 font-bold">Tambah Data</h1>

            <div class="flex flex-wrap mt-3 bg-white">
                <div class="w-full p-6">
                    <p class="text-xl py-2 hover:text-red-600 font-semibold"><a href="product-comp.php">Kelola Data pada List Motor </a></p>
                </div>
            </div>
        </main>
        <div class="flex justify-end  w-full">
            <div class="w-screen absolute bottom-0  bg-white text-right py-2 px-4">
                <p class="text-xs sm:text-sm text-gray-400">Copyright &copy;    NyariMotorID 2021. All Right Reserved.</p>
            </div>
        </div>

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