<?php
function hitungLuas($panjang, $lebar, $tinggi)
{
    if (isset($tinggi) && $tinggi > 0) {
        echo "Luas selimut balok: " . $panjang * $lebar * $tinggi . "\n";
        echo "Luas selimut tabung: " . 2 * 22 / 7 * $panjang / 2 * ($panjang / 2 + $tinggi);
    } else {
        echo "Luas persegi: " . $panjang * $lebar . "\n";
        echo "Luas lingkaran: " . 1 / 4 * 22 / 7 * $panjang ** 2;
    }
}

hitungLuas(4, 5, 0)
    ?>