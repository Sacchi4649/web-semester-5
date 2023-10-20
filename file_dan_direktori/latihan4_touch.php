<?php
touch("filecontoh.txt");
if (file_exists("filecontoh.txt")) {
    echo "File sudah ada!";
}
?>