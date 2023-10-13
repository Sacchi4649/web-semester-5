<?php
$array3Dimensi = array(
    array(
        array(1, 2, 3),
        array(4, 5, 6),
        array(7, 8, 9)
    ),
    array(
        array(10, 11, 12),
        array(13, 14, 15),
        array(16, 17, 18)
    ),
);

foreach ($array3Dimensi as $array2D) {
    foreach ($array2D as $array1D) {
        foreach ($array1D as $element) {
            echo $element . " ";
        }
        echo "\n";
    }
    echo "\n";
}
?>