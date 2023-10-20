<form action="" method="POST">
    <label for="">Teks</label>
    <textarea name="teks" id="" cols="30" rows="10"></textarea><br>
    <input type="submit" name="submit" value="kirim">
</form>
<?php

if (isset($_POST['submit'])) {
    $teks = $_POST['teks'];

    echo "Teks Asli: " . $teks . "<br><br>";
    echo wordwrap($teks, 15, "<br>");
}

?>