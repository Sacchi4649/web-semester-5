<?php
// Contoh 1
$buah = "mangga pisang rambutan apel jeruk kedondong";
$buahan = explode(" ", $buah);
echo $buahan[1] . "<br>";
echo $buahan[4] . "<br>";

// Contoh 2
$data = "root:*:1023:1000::/home/foo:/bin/sh";
list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $data);
echo $user . "<br>"; // root
echo $pass; // *
?>