<?php
$umur = 50;

if ($umur < 30) {
    echo "Umur lebih kecil dari 30!";

} elseif ($umur > 30 && $umur < 40) {
    echo "Umur berada diantara 30 sampai 40!";
} elseif ($umur > 40 && $umur < 50) {
    echo "Umur berada diantara 40 sampai 50!";
} else {
    echo "Umur lebih besar dari 50!";
}
?>