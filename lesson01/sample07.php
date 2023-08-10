<?php
$i = 1;

echo $i . '<br>';

$i = $i + 1;
echo $i . '<br>';

$i = $i + 1;
echo $i . '<br>';

$i = $i + 1;
echo $i . '<br>';

$i = $i + 1;
echo $i . '<br>';

$i = $i + 1;
echo $i . '<br>';

$i = $i + 1;
echo $i . '<br>';
echo '<br>';
?>

<?php
/**
 * echoが二回あるから効率が悪い
 */
$i = 0;

echo $i . '<br>';

while ($i < 10):
    $i = $i + 1;
    echo $i . '&lt;br&gt;' . '<br>' ;
endwhile;
?>

<?php

$i = 1;
while ($i <= 10):
    echo $i . '日<br>' ;
    $i = $i + 1;
endwhile;
?>