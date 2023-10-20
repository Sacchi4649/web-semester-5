<?php
function perkalian($a, $b)
{
    return $a * $b;
}
function pembagian($a, $b)
{
    return $a / $b;
}
function penambahan($a, $b)
{
    return $a + $b;
}
function pengurangan($a, $b)
{
    return $a - $b;
}
function modulus($a, $b)
{
    return $a % $b;
}
echo "Hasil perkalian= " . perkalian(11, 2) . "<br>";
echo "Hasil  pembagian= " . pembagian(11, 2) . "<br>";
echo "Hasil  penambahan= " . penambahan(11, 2) . "<br>";
echo "Hasil  pengurangan= " . pengurangan(11, 2) . "<br>";
echo "Hasil  modulus= " . modulus(11, 2) . "<br>";
?>