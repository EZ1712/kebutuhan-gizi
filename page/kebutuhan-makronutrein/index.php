<?php 

include "main.php";

$protein = null;
$karbohidrat = null;
$lemak = null;
$AKG = null;


if(isset($_POST['hasil'])) {
    $AKG = $_POST['AKG'];

    $protein = protein($AKG);
    $karbohidrat = karbohidrat($AKG);
    $lemak = lemak($AKG);
}
// $protein = protein($AKG);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kebutuhan Gizi</title>
    <!-- <link rel="stylesheet" href="../../src/output.css"> -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>

    <?php include __DIR__."/../../layout/header.php" ?>

    <main>
        <h2>Kebutuhan Makronutrein</h2>

        <h3>apa itu makronutrein?</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione facere doloribus cupiditate eius, porro laudantium veniam consequuntur quisquam aliquid deserunt nesciunt! Quibusdam est corrupti natus sequi repellat aliquid voluptatem ratione?</p>

    </main>

    <form action="index.php" method="POST">
        <h3>Hitung Kebutuhan Protein, Karbohidrat, dan Lemak</h3>

        <label for="AKG">Masukan AKG anda : </label>
        <br>
        <input type="number" id="AKG" name="AKG"/>
        <br><br>
        <button name="hasil">hitung makronutrein</button>

    </form>

    <div>
        <h3>Hasil perhitungan kebutuhan Protein, Karbohidrat, dan Lemak</h3>
        <p>Protein : <?=$protein ?> gram/hari</p>
        <p>Karbohidrat : <?=$karbohidrat ?> gram/hari</p>
        <p>Lemak : <?=$lemak ?> gram/hari</p>
    </div>
    
    <?php include __DIR__."/../../layout/footer.php" ?>

</body>
</html>