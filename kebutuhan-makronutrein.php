<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kebutuhan Gizi</title>
</head>
<body>

    <?php include "layout/header.php" ?>

    <main>
        <h2>Kebutuhan Makronutrein</h2>

        <h3>apa itu makronutrein?</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione facere doloribus cupiditate eius, porro laudantium veniam consequuntur quisquam aliquid deserunt nesciunt! Quibusdam est corrupti natus sequi repellat aliquid voluptatem ratione?</p>

    </main>

    <from>
        <h3>Hitung Kebutuhan Protein, Karbohidrat, dan Lemak</h3>

        <label for="AKG">Masukan AKG anda : </label>
        <br>
        <input type="number" id="AKG" name="AKG"/>
        <br><br>

    </from>

    <div>
        <h3>Hasil perhitungan kebutuhan Protein, Karbohidrat, dan Lemak</h3>
        <p>Protein : (hasil) gram/hari</p>
        <p>Karbohidrat : (hasil) gram/hari</p>
        <p>Lemak : (hasil) gram/hari</p>
    </div>
    
    <?php include "layout/footer.php" ?>

</body>
</html>