<?php 

function protein($AKG) {

    if ($AKG == null) {
        return "Masukan input dengan benar";
    }
    $hasil = (15/100)*$AKG/4;
    return round($hasil, 0) ;

}

function karbohidrat($AKG) {
    if ($AKG == null) {
        return "Masukan input dengan benar";
    }
    $hasil = (60/100)*$AKG/4;
    return round($hasil, 0) ;
}

function lemak($AKG) {
    if ($AKG == null) {
        return "Masukan input  benar";
    }
    $hasil = (15/100)*$AKG/9;
    return round($hasil, 0) ;
}


?>