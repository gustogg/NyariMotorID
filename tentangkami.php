<?php include 'layout/header.php'; ?>
<title>Tentang Kami</title>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<style>
  .swiper-pagination-bullet-active {
    background-color: red;
  }
</style>
</head>

<body class="overflow-x-hidden">

  <?php include 'layout/navbar.php' ?>
  <!-- Desktop Class -->
  <div class="hidden sm:block">
    <!--  -->
    <div data-aos="fade-right">
    <div class="bg-black">
      <img class="pt-20 h-98 object-cover w-full relative z-10 opacity-60" src="/images/tentangkami.jpg" alt="Tentang Kami">
    </div>
    </div>
    <div class="-mt-24 mb-16 bg-white relative z-20 w-3/12 mx-6 py-2">
      <p class="text-red-500 text-center text-3xl font-bold">TENTANG KAMI</p>

    </div>
    <div data-aos="fade-up">
      <div class="pt-24">
        <p class="text-center text-3xl font-bold mb-6 text-red-600">NyariMotorID</p>
        <p class="text-center font-normal mb-10 px-56 pb-24 font-bold">Nyari Motor ID merupakan sebuah website yang hadir untuk membantu para calon pembeli yang ingin membeli motor sesuai dengan kebutuhan dari calon pengguna.
        </p>
      </div>
    </div>
    <!--Scroll Alpine.js -->
    <div data-aos="fade-up">
      <div class="bg-transparent text-red-500 font-bold py-2 px-4 rounded mt-5 ml-4 text-2xl mb-10 text-center">
        Lorem Ipsum <br>
      </div>
      <div class="mb-10 pt-3 px-8 text-left pb-10 list-style-type: none bg-transparent text-black">
        <!-- Hidden Start -->
        <img class="mr-10 pt-5 bg-white shadow-md rounded-md w-48 pt-8" src="/images/logo.png" alt="logo">
        <div class="-mt-60 text-left pl-52">
          <div>
            <div class="bg-red-500 text-white font-bold pl-2 py-2 pr-110 mt-4 ml-10 text-2xl mb-10">
            Lorem Ipsum
            </div>
            <div class="pt-3 text-left pb-5 bg-red-500 text-white pl-2 -mt-10 ml-10">
              <p class="font-bold">Lorem Ipsum</p> Lorem Ipsum</p><br>
              <p class="font-bold">Lorem Ipsum</p> Lorem Ipsum<br><br>
              <p class="font-bold">Lorem Ipsum</p> Lorem Ipsum<br>
            </div>
          </div>
      </div>
    </div>
  </div>
  </div>
  <script>
    AOS.init();
  </script>
  <?php include 'layout/footer.php'; ?>