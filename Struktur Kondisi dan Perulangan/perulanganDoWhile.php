<?php
$data = [3, 4, 5, "gajah", "pisang"];
$length = count($data);
$i = 0;
do {
    echo $data[$i] . "\n";
    $i++;
} while ($i < $length);
?>