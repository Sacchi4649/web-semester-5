<?php
echo "Associative Array Dimensi Dua:<br>";

$nilai = array(
    array("Nama" => "Sani", "Nomor Induk" => "123", "IPA" => 90, "IPS" => 65, "BAHASA" => 83),
    array("Nama" => "Jani", "Nomor Induk" => "456", "IPA" => 90, "IPS" => 78, "BAHASA" => 87),
    array("Nama" => "Dani", "Nomor Induk" => "789", "IPA" => 78, "IPS" => 90, "BAHASA" => 78),
    array("Nama" => "Fani", "Nomor Induk" => "101", "IPA" => 82, "IPS" => 79, "BAHASA" => 97),
    array("Nama" => "Bani", "Nomor Induk" => "202", "IPA" => 89, "IPS" => 87, "BAHASA" => 74),
    array("Nama" => "Doni", "Nomor Induk" => "303", "IPA" => 94, "IPS" => 92, "BAHASA" => 86)
);

// Menampilkan array dalam bentuk tabel
echo "<table border='1'>";
// Table header
echo "<tr>";
foreach ($nilai[0] as $key => $value) {
    echo "<th>$key</th>";
}
echo "</tr>";

// Table rows
foreach ($nilai as $student) {
    echo "<tr>";
    foreach ($student as $value) {
        echo "<td>$value</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>