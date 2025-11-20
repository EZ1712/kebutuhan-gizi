<?php 

function AKG($jenis_kelamin,$bb, $tb, $usia, $aktifitas, $stress) {
    
 

    if ($jenis_kelamin = "laki_laki") {
        $BMR = 66 + (13.7*$bb) + (5*$tb) - (6.8*$usia);
        $hasil = $BMR * $aktifitas * $stress;
        return round($hasil, 0);
    } else if ($jenis_kelamin = "perempuan") {
        $BMR = 655 + (9.6*$bb) + (1.8*$tb) - (4.7*$usia);
        $hasil = $BMR * $aktifitas * $stress;
        return round($hasil, 0);
    }

}

?>