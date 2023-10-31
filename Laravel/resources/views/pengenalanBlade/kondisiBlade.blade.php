<?php
echo"Pengkondisian PHP biasa <br>";
$status = 0;
if($status==0){
    echo "Proses Gagal";
}elseif($status==1){
    echo "Proses Berhasil";
}else{
    echo "Tidak diketahui";
}
echo "<br>";
?>
{{"Pengkondisian Blade"}}<br>
@if($status==0)
{{"Proses gagal"}}
@elseif($status==1)
{{"Proses berhasil"}}
@else
{{"TIdak diketahui"}}
@endif