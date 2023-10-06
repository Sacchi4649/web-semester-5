<?php
if (isset($_POST['input'])) {
    $jurusan1 = $_POST['jurusan1'];
    $jurusan2 = $_POST['jurusan2'];
    $jurusan3 = $_POST['jurusan3'];
    $jurusan4 = $_POST['jurusan4'];
    echo "<b>Daftar Jurusan :</b> <br>";
    echo $jurusan1 . "<br>";
    echo $jurusan2 . "<br>";
    echo $jurusan3 . "<br>";
    echo $jurusan4 . "<br>";
}
?>