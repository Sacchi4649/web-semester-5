<?php
$tahun = date('Y');
echo $tahun;
$kabisat = ($tahun % 4 == 0) ? "Kabisat" : "Bukan Kabisat";
echo "Tahun " . $tahun . " " . $kabisat;
?>