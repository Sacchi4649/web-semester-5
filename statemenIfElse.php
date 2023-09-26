<?php
$panjang = 14; //diameter lingkaran
$lebar = 5;
$tinggi = 0; //tinggi bangun ruang

if (isset($tinggi) && $tinggi > 0) {
    echo "Luas selimut balok: " . $panjang * $lebar * $tinggi . "\n";
    echo "Luas selimut tabung: " . 2 * 22 / 7 * $panjang / 2 * ($panjang / 2 + $tinggi);
} else {
    echo "Luas persegi: " . $panjang * $lebar . "\n";
    echo "Luas lingkaran: " . 1 / 4 * 22 / 7 * $panjang ** 2;
}

?>