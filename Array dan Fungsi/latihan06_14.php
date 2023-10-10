<?php

$mahasiswa = ["Lindung Siswanto", "Laki-laki", "11/06/1984", "A", 3.51, "Pemrograman Web"];
function printArray($array)
{
    $count = count($array);
    for ($x = 0; $x < $count; $x++) {
        echo $array[$x] . "<br>";
    }
}
printArray($mahasiswa);
?>