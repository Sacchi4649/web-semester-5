<?php

$mahasiswa = ["Lindung Siswanto", "Laki-laki", "11/06/1984", "A", 3.51, "Pemrograman Web"];
function printArray($array)
{
    for ($x = 0; $x <= 5; $x++) {
        echo $array[$x] . "<br>";
    }
}
printArray($mahasiswa);
?>