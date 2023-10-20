<?php
date_default_timezone_set('Asia/Jakarta');
echo date("d"), "<br>";
echo "Sekarang waktu menunjukkan pukul ", date("H:i A"),
    "<br>", date("l, d F Y"),
    "<br>Hari ke : ", date("z"), " dari tahun ", date("Y");
?>