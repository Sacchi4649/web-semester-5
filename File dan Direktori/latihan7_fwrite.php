<?php
$file = fopen("tes.txt", "w");
echo fwrite($file, "Hallo, Selamat datang di pemrograman web!");
fwrite($file, '123');
fclose($file);
?>