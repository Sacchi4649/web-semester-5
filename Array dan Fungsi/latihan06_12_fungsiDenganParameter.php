<?php
// pertama kita terlebih dahulu mendefinisikan fungsinya,
// kemudian mengisi fungsi tersebut dengan sederetan perintah
function hitung($a, $b)
{
    return $a * $b;
}

// untuk dapat menggunakan fungsi yang telah dibuat,
// perlu pemanggilan nama fungsinya.
echo "Hasil = " . hitung(2, 4);