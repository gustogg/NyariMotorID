<?php
require 'koneksi.php';

session_start();

if(isset($_SESSION["login"])){
    header("Location: index.php");
}

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username='$username'");

    if (mysqli_num_rows($result) === 1) {
        // cek password
        $row = mysqli_fetch_assoc($result);
        
        if($row['level']=="admin"){	

            // buat session login dan username
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "admin";
            // alihkan ke halaman dashboard admin
            header("location:index.php");
    
        // cek jika user login sebagai pegawai
        }else if($row['level']=="company"){
            // buat session login dan username
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "company";
            // alihkan ke halaman dashboard pegawai
            header("location:index-comp.php");
        }
        if ($password == $row["password"]) {
            // Set Session
            $_SESSION ["login"] = true;
            exit;
        }

    }
    $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Admin NyariMotorID</title>

    <link href="/public/styles.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <style>
        .body-bg {
            background-color: #f5515f;
            background-image: linear-gradient(312deg, #a1051d 0%, #f5515f 74%);
        }
    </style>
</head>

<body class="body-bg min-h-screen pt-12 md:pt-20 pb-6 px-2 md:px-0" style="font-family:'Lato',sans-serif;">
    <!-- Jika Password Salah -->
    <?php if (isset($error)) : ?>
        <div class="alert alert-warning" role="alert">
            <?php echo "<script>alert('Username atau password Anda salah. Silahkan coba lagi!')</script>"; ?>
        </div>
    <?php endif; ?>

    <header class="max-w-lg mx-auto">
        <a href="#">
            <h1 class="text-4xl font-bold text-white text-center">Login</h1>
        </a>
    </header>

    <main class="bg-white w-10/12 sm:w-9/12 md:w-7/12 lg:w-6/12 xl:w-5/12 mx-auto p-8 md:p-12 my-10 rounded-lg shadow-2xl">
        <section>
            <h3 class="font-bold text-lg md:text-xl  xl:text-2xl">Selamat datang di halaman login Admin NyariMotorID.</h3>
            <p class="text-gray-600 text-base pt-2">Login ke akun admin.</p>
        </section>

        <section class="mt-10">
            <form class="flex flex-col" method="post" action="">
                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="username">Username</label>
                    <input type="text" name="username" id="username" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-red-600 transition duration-500 px-3 pb-3">
                </div>
                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="password">Password</label>
                    <input type="password" name="password" id="password" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-red-600 transition duration-500 px-3 pb-3">
                </div>
                <button class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200" type="submit" name="login">Login</button>
            </form>
        </section>
    </main>

</body>

</html>