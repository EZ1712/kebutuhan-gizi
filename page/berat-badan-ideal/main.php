<?php 

function BMI($berat_badan, $tinggi_badan) {
    $tinggi_badan /= 100; 
    $hasil = $berat_badan / ($tinggi_badan * $tinggi_badan);
    if ($hasil < 18.5) {
        return $value = round($hasil, 1)." : "."berat badan kurang / underweight";
    } else if ($hasil < 22.9) {
        return $value = round($hasil, 1)." : "."berat badan ideal";
    } else if ($hasil < 24.9) {
        return $value = round($hasil, 1)." : "."kelebihan berat badan / overweight";
    } else if ($hasil < 29.9) {
        return $value = round($hasil, 1)." : "."obesitas 1";
    } else if ($hasil > 30) {
        return $value = round($hasil, 1)." : "."obesitas 2";
    }
}

?>

        <!--         
        Tolak Ukur 

        < 18,5 = berat badan kurang / underweight
        18,5 - 22,9 = berat badan ideal
        23 - 24,9 = kelebihan berat badan / overweight
        25 - 29,9 = obesitas 1
        > 30 = obesitas 2
        -->