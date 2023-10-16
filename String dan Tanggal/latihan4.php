<?php
$str = "Pontianak, kalimantan barat";

echo "<b>String asli</b> : $str";
echo "<br>";
echo "<b>strtolower()</b> : " . strtolower($str);
echo "<br>";
echo "<b>strtoupper()</b>: " . strtoupper($str);
echo "<br>";
echo "<b>ucfirst () :</b> " . ucfirst($str);
echo "<br>";
echo "<b>ucwords() :</b> " . ucwords($str);
echo "<br>";
echo "<b>strrev () :</b> " . strrev($str);
echo "<br>";
echo "<b>Jumlah karakter</b> : " . strlen($str);
?>