<?php
$file = "tes.txt";
$fileopen = fopen($file, 'r') or die("File tidak bisa dibaca");
while (!feof($fileopen)) {
    $bariskalimat = fgets($fileopen, 1024);
    echo $bariskalimat . "<br>";
}
?>