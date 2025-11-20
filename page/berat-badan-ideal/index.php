<?php

include "main.php";
    $hasil = "";
    if(isset($_POST['hitung'])) {
        $berat_badan = $_POST['berat_badan'];
        $tinggi_badan = $_POST['tinggi_badan'];

        $hasil = BMI($berat_badan, $tinggi_badan);
    }
    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kebutuhan Gizi</title>
</head>
<body>

    <?php include __DIR__.  "/../../layout/header.php" ?>

    <main>
        <h2>Berat Badan Ideal</h2>

        <h3>apa itu berat badan ideal?</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione facere doloribus cupiditate eius, porro laudantium veniam consequuntur quisquam aliquid deserunt nesciunt! Quibusdam est corrupti natus sequi repellat aliquid voluptatem ratione?</p>
    </main>

    <form action="index.php" method="POST">
        <h3>Hitung Berat Badan ideal anda</h3>

        <label for="berat_badan">Masukan berat badan anda : </label>
        <br>
        <input type="number" id="berat_badan" name="berat_badan"/>
        <br><br>

        <label for="tinggi_badan">Masukan tinggi badan anda : </label>
        <br>
        <input type="number" id="tinggi_badan" name="tinggi_badan"/>
        <br><br>

        <button type="submit" name="hitung">Hitung hasilnya</button>
    </form>

    <div>
        <h3>Hasil perhitungan Berat Badan Ideal anda</h3>

        <p>dari hasil perhitungan berikut dapat disimpulkan bahwa anda (hasil muncul di bawah sini)</p>
        <p><?=$hasil ?></p>
        

    </div>
    
    <?php include __DIR__. "/../../layout/footer.php" ?>
</body>
</html>