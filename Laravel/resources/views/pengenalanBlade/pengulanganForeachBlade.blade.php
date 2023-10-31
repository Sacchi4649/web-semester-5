<?php
foreach($arr as $value){
    $value = $value + 1;
    echo $value;
}
?>

@foreach($arr as $value)
{{$value}}
@endforeach