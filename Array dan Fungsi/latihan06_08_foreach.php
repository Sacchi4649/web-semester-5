<?php
$mahasiswa = array(
    array("Lindung", "Teknik Informatika", "Laki-laki", 23),
    array("Fitri", "Sistem Informasi", "Perempuan", 22),
    array("Ridwan", "Manajemen Informatika", "Laki-laki", 24),
    array("Heru", "Teknik Komputer", "Perempuan", 20),
    array("Marsel", "Teknik Informatika", "Laki-laki", 24)
);

foreach ($mahasiswa as list($nama, $jurusan, $jenisKelamin, $usia)) {
    echo "<tr>";
    echo "$nama, $jurusan, $jenisKelamin, $usia  <br>";

}
?>