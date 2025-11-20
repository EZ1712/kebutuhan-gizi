<?php 

include "main.php";

$hasil = "";

if(isset($_POST['hasil'])) {
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $kondisi = $_POST['kondisi'];
    $bb = $_POST['berat_badan'];
    $tb = $_POST['tinggi_badan'];
    $usia = $_POST['usia'];
    $aktifitas = $_POST['aktifitas_olahraga'];
    $stress = $_POST['tingkat_stress'];

    // echo $jenis_kelamin." ".$kondisi." ".$bb." ".$tb." ".$aktifitas." ".$stress;
    $hasil = AKG($jenis_kelamin,$bb, $tb, $usia, $aktifitas, $stress);
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
        <h2>Kebutuhan Gizi Harian</h2>

        <h3>apa itu gizi harian?</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione facere doloribus cupiditate eius, porro laudantium veniam consequuntur quisquam aliquid deserunt nesciunt! Quibusdam est corrupti natus sequi repellat aliquid voluptatem ratione?</p>

    </main>

    <form action="index.php" method="POST">

        <label>Masukan Jenis kelamin anda : </label>
        <br>
        <input type="radio" id="laki_laki" name="jenis_kelamin" value="laki_laki" />
        <label for="laki_laki" >Laki-Laki</label>
        <input type="radio" id="perempuan" name="jenis_kelamin" value="perempuan" />
        <label for="perempuan" >Perempuan</label>
        <br><br>

        <label>Kondisi anda saat ini : </label>
        <br>
        <input type="radio" id="sehat" name="kondisi" value="sehat" />
        <label for="sehat" >Sehat</label>
        <input type="radio" id="sakit" name="kondisi" value="sakit" />
        <label for="sakit" >Sakit</label>
        <br><br>

        <label for="berat_badan">Masukan berat badan anda : </label>
        <br>
        <input type="number" id="berat_badan" name="berat_badan"/>
        <br><br>

        <label for="tinggi_badan">Masukan tinggi badan anda : </label>
        <br>
        <input type="number" id="tinggi_badan" name="tinggi_badan"/>
        <br><br>

        <label for="usia">Masukan usia anda : </label>
        <br>
        <input type="number" id="usia" name="usia"/>
        <br><br>


        <label>Aktifitas olahraga : </label>
        <br>
        <input type="radio" id="Sangat_jarang_olahraga" name="aktifitas_olahraga" value="1.2" />
        <label for="sangat_jarang_olahraga" >Sangat Jarang Olahraga</label>
        <br>
        <input type="radio" id="jarang_olahraga" name="aktifitas_olahraga" value="1.375" />
        <label for="jarang_olahraga" >Jarang Olahraga (1-3 kali perminggu)</label>
        <br>
        <input type="radio" id="cukup_olahraga" name="aktifitas_olahraga" value="1.55" />
        <label for="cukup_olahraga" >Cukup Olahraga (3-5 kali perminggu)</label>
        <br>
        <input type="radio" id="sering_olahraga" name="aktifitas_olahraga" value="1.725" />
        <label for="sering_olahraga" >Sering Olahraga (6-7 kali perminggu)</label>
        <br>
        <input type="radio" id="sangat_sering_olahraga" name="aktifitas_olahraga" value="1.9" />
        <label for="sangat_sering_olahraga" >Sangat Sering Olahraga (2 kali perhari)</label>
        <br><br>

        
        <label>Tingkat Stress : </label>
        <br>
        <input type="radio" id="tidak_stress" name="tingkat_stress" value="1.1" />
        <label for="tidak_stress" >Tidak Stress</label>
        <br>
        <input type="radio" id="stress_ringan" name="tingkat_stress" value="1.3" />
        <label for="stress_ringan" >Stress Ringan</label>
        <br>
        <input type="radio" id="stress_sedang" name="tingkat_stress" value="1.5" />
        <label for="stress_sedang" >Stress Sedang</label>
        <br>
        <input type="radio" id="stress_berat" name="tingkat_stress" value="1.6" />
        <label for="stress_berat" >Stress Berat</label>
        <br>
        <input type="radio" id="stress_sangat_berat" name="tingkat_stress" value="1.7" />
        <label for="stress_sangat_berat" >Stress Sangat Berat</label>
        <br>

        <p>*note</p>
        <p>stress ringan : peradangan saluran cerna, kanker, trauma, demam, oprasi <br>
        stress sedang : sepsis, bedah tulang, luka bakar, penyakit hati <br>
        stress berat : HIV aids + komlikasi, bedah multisistem, TB patu + komplikas <br>
        stress sangat berat : Luka kepala berat</p>
        <br><br>

        <button name="hasil">hitung kebutuhan gizi/AKG</button>
        
    </form>

    <div>
        <h3>Hasil Kebutuhan Gizi anda</h3>
        <p>hasil dari perhitungan untuk kebutuhan gizi anda perhari adalah (hasil muncul di bawah sini)</p>
        <p>AKG/Kebutuhan gizi : <?=$hasil?> kkal</p>

    </div>
    
    <?php include __DIR__. "/../../layout/footer.php" ?>

</body>
</html>