<?php

$mahasiswa = ["Lindung Siswanto", "Laki-laki", "11/06/1984", "A", 3.51, "Pemrograman Web"];

function printArrayWithList($array)
{
    list($nama, $jeniskelamin, $tanggallahir, $poin, $IP, $spesialisasi) = $array;
    echo $nama . "<br>";
    echo $jeniskelamin . "<br>";
    echo $tanggallahir . "<br>";
    echo $poin . "<br>";
    echo $IP . "<br>";
    echo $spesialisasi . "<br>";
}
printArrayWithList($mahasiswa);
?>