<?php

$contactFile = '.contact01.dat';

// ファイル丸ごと読み込み
$fileContents = file_get_contents($contactFile);

// echo $fileContents;

// ファイルに書き込み（上書き）
// file_put_contents($contactFile, 'テストじゃないです');

$addText = 'テストです' . "\n";

// ファイルに書き込み(追記)
// file_put_contents($contactFile, $addText, FILE_APPEND);

// 配列 file 
// 「,」に区切る explode foreach

$allData = file($contactFile);

foreach($allData as $lineData){
    $line = explode(',', $lineData);
    echo $line[0] . '<br>';
    echo $line[1] . '<br>';
    echo $line[2] . '<br>';
}