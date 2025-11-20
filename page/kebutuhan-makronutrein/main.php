<?php 

function protein($AKG) {
    $hasil = (15/100)*$AKG/4;
    return round($hasil, 0) ;
}

function karbohidrat($AKG) {
    $hasil = (60/100)*$AKG/4;
    return round($hasil, 0) ;
}

function lemak($AKG) {
    $hasil = (15/100)*$AKG/9;
    return round($hasil, 0) ;
}


?>