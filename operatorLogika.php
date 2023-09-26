<?php
$x = true;
$y = true;
?>

<table class="table table-bordered table-striped">
    <tr>
        <th>$x</th>
        <th>
            <?php var_dump($x); ?>
        </th>
    </tr>
    <tr>
        <th>$y</th>
        <th>
            <?php var_dump($y); ?>
        </th>
    </tr>
    <tr>
        <th>!$x</th>
        <td>
            <?php var_dump(!$x); ?>
        </td>
    </tr>
    <tr>
        <th>!$y</th>
        <td>
            <?php var_dump(!$y); ?>
        </td>
    </tr>
    <tr>
        <th>$x and $y</th>
        <td>
            <?php var_dump($x and $y); ?>
        </td>
    </tr>
    <tr>
        <th>$x or $y</th>
        <td>
            <?php var_dump($x or $y); ?>
        </td>
    </tr>
    <tr>
        <th>$x xor $y</th>
        <td>
            <?php var_dump($x xor $y); ?>
        </td>
    </tr>
</table>