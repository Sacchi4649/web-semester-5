<?php
if (file_exists("latihan.txt")) {
    echo "File-nya ada lho...";
} else {
    echo "File-nya tidak ada guys...";
}

if (is_file("latihan.txt")) {
    echo "Ini adalah file!";
}
?>