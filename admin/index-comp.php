<?php
require 'koneksi.php';
session_start();
// cek apakah sudah login
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
$jumlah = mysqli_query($conn, "SELECT COUNT(product_name) FROM product WHERE brand_id = 1;");
?>


<?php include '../admin/layout/header.php'; ?>
<title>Dashboard - Admin</title>
</head>

<body class="bg-gray-100 font-sans flex">
    <!-- Navbar & Sidebar -->
    <?php include '../admin/layout/navsidebar-comp.php'; ?>


    <div class="w-full overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            <h1 class="text-3xl text-black pb-3 font-bold text-center">DASHBOARD</h1>

            <div class="flex flex-wrap mt-3 bg-white">
                <div class="w-full p-6">
                    <p class="text-xl font-medium">
                        <b>Selamat Datang di Dashboard Admin NyariMotoriD</b>
                        <br>
                        <br>
                    </p>
                    <p class="text-lg">
                        Halo
                    </p>
                    <p class="-my-7 ml-11 text-red-500 text-lg font-semibold"><?php echo $_SESSION['username']; ?></p>
                    <p class ="mx-28 px-2 text-lg -mt-2">, Anda Telah Login Dengan Role</p>
                    <p class="-my-7 mx-94 px-6 text-lg text-red-500 font-semibold">"<?php echo $_SESSION['level']; ?>"</p>
                    <p class="text-sm">
                       <i><br> <br><br>*Mohon pergunakan hak admin dengan bijak<i>
                    </p>
                    <p>
                        <!-- Chart  -->
                    <div class="shadow-lg rounded-lg overflow-hidden">
                        <div class="pb-5 bg-gray-50"></div>
                        <canvas class="p-10" id="chartBar"></canvas>
                    </div>

                    <!-- Required chart.js -->
                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                    <!-- Chart bar -->
                    <script>
                    const labelsBarChart = [
                        "Yamaha",
                        "Honda",
                        "Suzuki",
                        "Kawasaki",
                    ];
                    const dataBarChart = {
                        labels: labelsBarChart,
                        datasets: [
                        {
                            label: "Total Tipe Sepeda Motor Yang Dikeluarkan",
                            backgroundColor: "hsl(215, 27.9%, 16.9%)",
                            borderColor: "hsl(0, 100%, 27%)",
                            data: [20, 16, 4, 6],
                        },
                        ],
                    };

                    const configBarChart = {
                        type: "bar",
                        data: dataBarChart,
                        options: {},
                    };

                    var chartBar = new Chart(
                        document.getElementById("chartBar"),
                        configBarChart
                    );
                    </script>
                    <p class="pt-10 ">Total Produk Sepeda Motor Berdasarkan Brand</p>

                    <p>Yamaha : <?php
                                $result = mysqli_query($conn, "SELECT COUNT(product_name) as yamaha FROM product WHERE brand_id = 1;");
                                $data = mysqli_fetch_assoc($result);
                                echo $data['yamaha'];
                                ?> </p>
                    <p>Honda : <?php
                                $result = mysqli_query($conn, "SELECT COUNT(product_name) as honda FROM product WHERE brand_id = 2;");
                                $data = mysqli_fetch_assoc($result);
                                echo $data['honda'];
                                ?> </p>
                    <p>Kawasaki : <?php
                                $result = mysqli_query($conn, "SELECT COUNT(product_name) as kawasaki FROM product WHERE brand_id = 3;");
                                $data = mysqli_fetch_assoc($result);
                                echo $data['kawasaki'];
                                ?> </p>
                    <p>Suzuki : <?php
                                $result = mysqli_query($conn, "SELECT COUNT(product_name) as suzuki FROM product WHERE brand_id = 4;");
                                $data = mysqli_fetch_assoc($result);
                                echo $data['suzuki'];
                                ?> </p>
                </div>
            </div>
        </main>
        <div class="flex justify-end  w-full">
            <div class="w-screen absolute bottom-0  bg-white text-right py-2 px-4">
                <p class="text-sm text-gray-400">Copyright &copy; NyariMotoriD 2021. All Right Reserved.</p>
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