<?php
date_default_timezone_set('Asia/Jakarta');
if (file_exists("nim.txt")) {
    echo "File sudah ada, berikut isi filenya: <br>";
    $file = fopen("nim.txt", "r");
    if ($file) {
        while (!feof($file)) {
            $line = fgets($file);
            echo $line;
        }
        fclose($file);
    }
} else {
    touch("nim.txt");
    $file = fopen("nim.txt", "w");
    $writeFile = fwrite($file, "NIM: 3202116097<br>
    Nama: Sany Adika Prayata<br>
    Kelas: 5B Teknik Informatika<br>
    Update:" . date("l, d F Y. H:i A"));

    $file = fopen("nim.txt", "r");
    if ($file) {
        while (!feof($file)) {
            $line = fgets($file);
            echo $line;
        }
        fclose($file);
    }
}
?>