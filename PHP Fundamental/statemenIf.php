<?php

$nama = "Jobs";

$message = "Selamat datang $nama!";
if ($nama == "Jobs") {
    $message = "Hi, it's an honor to greet you, $nama!";
}
echo $message;
?>

<!-- jika $ nama diisi dengan nama kita, maka output message adalah "Selamat datang $nama"
sedangkan jika $nama diisi dengan Jobs maka outputnya adalah "Hi, it's an honor to greet you" -->