<?php
$array1 = [1, '2', 3];

echo '<pre>';
var_dump($array1);
echo '</pre>';

$array2 = [
    [1, 2, 3],
    [10, 20, 30]
];
echo '<pre>';
var_dump($array2);
echo '</pre>';

echo $array2[1][0];
?>
