<?php
$mahasiswa = array(
    array("Lindung", "Teknik Informatika", "Laki-laki", 23),
    array("Fitri", "Sistem Informasi", "Perempuan", 22),
    array("Ridwan", "Manajemen Informatika", "Laki-laki", 24),
    array("Heru", "Teknik Komputer", "Perempuan", 20),
    array("Marsel", "Teknik Informatika", "Laki-laki", 24)
);

echo "<table border='1'>";
echo "<tr>";
foreach ($mahasiswa[0] as $key => $value) {
    echo "<th>$key</th>";
}
echo "</tr>";

foreach ($mahasiswa as $dataMahasiswa) {
    echo "<tr>";
    foreach ($dataMahasiswa as $value) {
        echo "<td> $value</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>