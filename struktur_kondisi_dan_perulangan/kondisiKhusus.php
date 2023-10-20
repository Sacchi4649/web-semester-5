<?php
date_default_timezone_set('Asia/Jakarta');
$cekKabisat = date('Y');
$timestamp = date('d-M-Y h:i:s');
echo $timestamp . "<br>";
$kabisat = ($cekKabisat % 4 == 0) ? "Kabisat" : "Bukan Kabisat";
echo "Tahun " . $cekKabisat . " " . $kabisat;
?>