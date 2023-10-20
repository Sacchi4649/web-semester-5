<?php
function greet($nama)
{
    $message = "Selamat datang $nama!";
    if ($nama == "Jobs") {
        $message = "Hi, it's an honor to greet you, $nama!";
    }
    echo $message;
}
greet("Sany");
?>