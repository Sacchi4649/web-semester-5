<?php
echo "Associative Array Dimensi Dua:<br>";

$nilai = array(
    array("Nama" => "John", "Nomor Induk" => "123", "IPA" => 90, "IPS" => 65, "BAHASA" => 83),
    array("Nama" => "Jane", "Nomor Induk" => "456", "IPA" => 90, "IPS" => 78, "BAHASA" => 87),
    array("Nama" => "Doe", "Nomor Induk" => "789", "IPA" => 78, "IPS" => 90, "BAHASA" => 78),
    array("Nama" => "Alice", "Nomor Induk" => "101", "IPA" => 88, "IPS" => 76, "BAHASA" => 92),
    array("Nama" => "Bob", "Nomor Induk" => "202", "IPA" => 85, "IPS" => 82, "BAHASA" => 79),
    array("Nama" => "Eve", "Nomor Induk" => "303", "IPA" => 91, "IPS" => 88, "BAHASA" => 85)
);

// Display array as a table
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