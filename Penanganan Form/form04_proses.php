<?php
if (isset($_POST['login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    if ($user == "linds" && $pass == "12345") {
        echo "<h2>Login Berhasil</h2>";
    } else {
        echo "<h2>Login Gagal</h2>";
    }
}
?>