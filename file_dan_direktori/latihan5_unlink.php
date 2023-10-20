<?php
if (file_exists("filecontoh.txt")) {
    echo "Filenya ada! <br/>";
}

// menghapus file
unlink("filecontoh.txt");

// mengecek kembali keberadaan filenya
if (file_exists("filecontoh.txt")) {
    echo "File sudah ada!";
} else {
    echo "File sudah tidak ada...";
}
?>