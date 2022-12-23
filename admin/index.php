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
<title>Dashboard - Admin</title>
</head>

<body class="bg-gray-100 font-sans flex">
    <!-- Navbar & Sidebar -->
    <?php include '../admin/layout/navsidebar.php'; ?>


    <div class="w-full overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            <h1 class="text-3xl text-black pb-3 font-bold text-center">DASHBOARD</h1>

            <div class="flex flex-wrap mt-3 pb-72 bg-white">
                <div class="w-full p-6">
                    <p class="text-lg font-medium">
                        <b>Selamat Datang di Dashboard Admin NyariMotoriD</b>
                        <br>
                        <br>
                    </p>
                    <p class="text-lg">
                        Halo
                    </p>
                    <p class="-my-7 ml-11 text-red-500 text-lg font-semibold"><?php echo $_SESSION['username']; ?>,</p>
                    <p class ="text-lg -mt-2"><br>Anda Telah Login Dengan Role</p>
                    <p class="-my-7 mx-60 px-2 text-lg text-red-500 font-semibold">"<?php echo $_SESSION['level']; ?>"</p>
                    
                    <p>
                        <!-- Chart  -->
                    <div class="shadow-lg rounded-lg overflow-hidden pl-85 pb-10">
                        <div class="pb-5 pt-10 bg-gray-50"></div>
                        <canvas class="-p-10 mx-24 " id="chartBar"></canvas>
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
                            label: "Total Tipe Sepeda Motor Yang Diproduksi",
                            backgroundColor: "hsl(0, 80.2%, 40.2%)",
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
                 <div class="-my-48 px-5 ml-3">
                        <p class="text-red-500 font-medium">Total Tipe Sepeda Motor Berdasarkan Brand</p>

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
            </div>
        </main>
        <div class="pb-98">
            <p>.</p>
        </div>
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