<?php
// 1. chop()
$string = "INI ADALAH STRING";
$string2 = "ini adalah string";
echo "1. Fungsi chop() <br>";
echo "String sebelum chop " . "\"$string\"" . "<br>";

echo "String setelah chop " . "\"" . chop($string, "STRING") . "\"" . "<br><br>";

//2. chunk_split()
echo "2. Fungsi chunk_split() <br>";
echo chunk_split($string, 2, "..") . "<br><br>";

//3. count_chars()
echo "3. Fungsi count_chars() <br>";
echo count_chars($string, 3) . "<br><br>";

//4. lcfirst()
echo "4. Fungsi lcfirst() <br>";
echo "String sebelum lcfirst = " . "$string<br>";
echo "String sesudah lcfirst = " . lcfirst($string) . "<br><br>";

//5. ord()
echo "5. Fungsi ord() <br>";
echo "Nilai ASCII dari huruf pertama string adalah \"$string2\"  " . ord($string2) . "<br>";
echo "Nilai ASCII dari huruf i adalah " . ord("i");
?>