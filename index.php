<?php 

define( "BASE_PATH", __DIR__)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kebutuhan Gizi</title>
    <!-- <link rel="stylesheet" href="./src/output.css"> -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>

    <?php include "layout/header.php" ?>

    <main>
        <!-- Welcome -->
        <div class="flex flex-col md:p-10 md:flex-row-reverse justify-center md:items-center bg-emerald-50 ">
            <div class="w-full">
                <img class="md:rounded-2xl md:shadow-2xl" src="asset/home-image.jpg">
            </div>
            <div class="text-center md:text-start w-full py-5 px-2">
                <h2 class="text-lime-600 font-bold text-2xl md:text-5xl">Health <span class="text-black">and</span> Digital Nutrition</h2>
                <p class="md:text-2xl">Ayo hitung dan ketahui tentang gizi harian anda!</p>
            </div>
        </div>

        <!-- Main 1 -->

        <div class="flex flex-col md:text-xl md:flex-row md:flex-wrap p-3 py-10 md:p-10 gap-5 md:gap-10 text-center w-full justify-center">
            <div class="xl:p-10 p-5 shadow-lg/30 xl:shadow-2xl/30 bg-white xl:w-2/5">
                <h3 class="font-bold p-2">Apa itu <span class="text-lime-600">GaMuGuGi</span> ?</h3>
                <p>GamuGigi adalah platform digital yang berfokus pada kesehatan dan nutrisi, memberikan informasi dan layanan terkait gizi untuk masyarakat Indonesia.</p>
            </div>

            <div class="xl:p-10 p-5 shadow-lg/30 xl:shadow-2xl/30 bg-white xl:w-2/5">
                <h3 class="font-bold p-2">Bagaimana cara menggunakan kalkulator gizi?</h3>
                <p>Anda dapat mengakses kalkulator gizi melalui menu "Perhitungan Gizi" dan mengisi data yang diperlukan untuk mendapatkan perhitungan kebutuhan gizi harian Anda.</p>
            </div>

            <div class="xl:p-10 p-5 shadow-lg/30 xl:shadow-2xl/30 bg-white xl:w-2/5">
                <h3 class="font-bold p-2">Apakah informasi di <span class="text-lime-600">GaMuGuGi</span> terpercaya?</h3>
                <p>Ya, semua informasi yang disajikan di GamuGigi berasal dari sumber terpercaya dan telah diverifikasi oleh ahli gizi dan kesehatan.</p>
            </div>

            <div class="xl:p-10 p-5 shadow-lg/30 xl:shadow-2xl/30 bg-white xl:w-2/5">
                <h3 class="font-bold p-2">Apakah layanan <span class="text-lime-600">GaMuGuGi</span> gratis?</h3>
                <p>Ya, saat ini semua layanan dan informasi yang disediakan oleh GaMuGuGi dapat diakses secara gratis oleh masyarakat.</p>
            </div>
        </div>
        
        

        <!-- Main 2 -->
        <div class=" bg-emerald-50 flex flex-col xl:flex-row xl:justify-center px-5 py-10 text-center font-bold text-xl gap-5">
            <a href="page/kebutuhan-gizi-harian/">
                <div class="bg-white p-10 hover:bg-lime-600 rounded-2xl xl:w-full ease-in-out transition-all duration-300 hover:text-white">
                    <h3>kebutuhan Gizi harian</h3>
                </div>
            </a>

            <a href="page/berat-badan-ideal">
                <div class="bg-white p-10 hover:bg-lime-600 rounded-2xl xl:w-full ease-in-out transition-all duration-300 hover:text-white">
                    <h3>Berat badan ideal</h3>
                </div>
            </a>


            <a href="page/kebutuhan-makronutrein/">
            <div class="bg-white p-10 hover:bg-lime-600 rounded-2xl xl:w-full ease-in-out transition-all duration-300 hover:text-white">
                <h3>Kebutuhan Makronutrein</h3>
            </div>
            </a>
        </div>
        

        <!-- Main 3 -->

        <div class="flex flex-col sm:text-xl sm:flex-row sm:flex-wrap p-3 py-10 sm:py-10 gap-5 sm:gap-5 text-center w-full justify-center">

            <div class="md:p-10 p-5 shadow-lg/30 md:shadow-2xl/30 bg-white xl:w-1/4">
                <h3 class="font-bold p-2">Pengertian Gizi</h3>
                <p>Gizi adalah zat dari makanan yang dibutuhkan tubuh untuk tumbuh, memperbaiki, dan menjaga kesehatan. Gizi yang baik sangat penting bagi kesejahteraan tubuh.</p>
            </div>

            <div class="xl:p-10 p-5 shadow-lg/30 xl:shadow-2xl/30 bg-white xl:w-1/4">
                <h3 class="font-bold p-2">Makronutrien</h3>
                <p>Makronutrien adalah nutrisi yang dibutuhkan tubuh dalam jumlah besar, termasuk karbohidrat, protein, dan lemak. Masing-masing memiliki fungsi penting dalam tubuh.</p>
            </div>

            <div class="xl:p-10 p-5 shadow-lg/30 xl:shadow-2xl/30 bg-white xl:w-1/4">
                <h3 class="font-bold p-2">Mikronutrien</h3>
                <p>Mikronutrien adalah vitamin dan mineral yang dibutuhkan tubuh dalam jumlah kecil tetapi sangat penting untuk berbagai fungsi tubuh dan pencegahan penyakit.</p>
            </div>

            <div class="xl:p-10 p-5 shadow-lg/30 xl:shadow-2xl/30 bg-white xl:w-1/4">
                <h3 class="font-bold p-2">Pentingnya Gizi Seimbang</h3>
                <p>Gizi seimbang adalah pola makan harian yang memenuhi kebutuhan tubuh dengan jenis dan jumlah zat gizi yang tepat, disertai pola hidup bersih, aktif, dan pemantauan berat badan.</p>
            </div>

            <div class="xl:p-10 p-5 shadow-lg/30 xl:shadow-2xl/30 bg-white xl:w-1/4">
                <h3 class="font-bold p-2">Pedoman Gizi Seimbang</h3>
                <p>Pedoman Gizi Seimbang Indonesia terdiri dari 10 pesan dasar yang mencakup berbagai aspek pola makan dan gaya hidup sehat untuk mencapai status gizi yang optimal.</p>
            </div>

            <div class="xl:p-10 p-5 shadow-lg/30 xl:shadow-2xl/30 bg-white xl:w-1/4">
                <h3 class="font-bold p-2">Akibat Kekurangan Gizi</h3>
                <p>Kekurangan gizi dapat menyebabkan berbagai masalah kesehatan, termasuk stunting pada anak, daya tahan tubuh menurun, dan meningkatkan risiko penyakit tidak menular.</p>
            </div>

        </div>
        

    </main>

    <?php include "layout/footer.php" ?>
    
</body>
</html>