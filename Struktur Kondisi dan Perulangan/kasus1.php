<?php

$nilaiAngka = 39;

if ($nilaiAngka >= 80) {
    echo "Nilai huruf A";
} elseif ($nilaiAngka >= 60 && $nilaiAngka < 80) {
    echo "Nilai huruf B";
} elseif ($nilaiAngka >= 40 && $nilaiAngka < 60) {
    echo "Nilai huruf C";
} elseif ($nilaiAngka >= 20 && $nilaiAngka < 40) {
    echo "Nilai huruf D";
} else
    echo "Nilai huruf E";
?>