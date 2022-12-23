<?php include '../admin/layout/header.php'; ?>
<title>Dashboard - Company Admin</title>
</head>
<!DOCTYPE html>
<html>
<body>
	<?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}

	?>
<body class="bg-gray-100 font-sans flex">
    <!-- Navbar & Sidebar -->
    <?php include '../admin/layout/navsidebar-comp.php'; ?>


    <div class="w-full overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            <h1 class="text-3xl text-black pb-3 font-bold">Dashboard</h1>

            <div class="flex flex-wrap mt-3 bg-white">
                <div class="w-full p-6">
                    <p class="text-xl font-semibold">
					<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
                        Selamat Datang di Dashboard Admin NyariMotoriD.
                    </p>
                    <p>
                        Mohon pergunakan hak admin dengan bijak
                    </p>

                </div>
            </div>
        </main>
        <div class="flex justify-end  w-full">
            <div class="w-screen absolute bottom-0  bg-white text-right py-2 px-4">
                <p class="text-sm text-gray-400">Copyright &copy; NyariMotorID 2021. All Right Reserved.</p>
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
</html>