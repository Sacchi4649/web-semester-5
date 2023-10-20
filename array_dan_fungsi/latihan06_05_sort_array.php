<?php
$data = array(10, 30, 20, 40, 70, 80, 60, 50, 90, 100);
sort($data);

echo "Berikut nilai array dari terkecil hingga terbesar <br>";
for ($x = 0; $x <= 10; $x++) {
    echo current($data) . "<br>";
    next($data);
}

rsort($data);
echo "Berikut nilai array dari terbesar hingga terkecil <br>";
for ($x = 0; $x <= 10; $x++) {
    echo current($data) . "<br>";
    next($data);
}
?>