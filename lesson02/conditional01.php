<?php
$height = 90;

if($height > 90){
    echo $height . '<br>';
}

if($height < 90){
    echo $height. '<br>';
}

if($height >= 91){
    echo $height. '<br>';
}

if($height <= 90){
    echo $height. '<br>';
}

if($height === 90){
    echo $height. '<br>';
}

if($height !== 90){
    echo $height. '<br>';
}

$str = '';
if(!empty($str)){
    echo '空文字ではありません';
}
?>

<?php

//ANDとOR

$signal1 = 'red';
$signal2 = 'blue';
// AND
if($signal1 === 'red' && $signal2 === 'blue'){
    echo '赤と青です' . '<br>';
}
//OR
if($signal1 === 'red' || $signal2 === 'blue'){
    echo '赤と青です' . '<br>';
}

//三項演算子
/**
 * if else
 * 「条件 ? 真 : 偽」
 */
$math = 80;

$comment = $math > 80 ? 'good': 'not good';

echo $comment;
?>