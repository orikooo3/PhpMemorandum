<?php

$test = file_get_contents('data/test.txt');

echo $test;

// ファイルの追記
$test = $test . "<br>追加のテスト";

$success = file_put_contents('data/test.txt', $test);

// readfile('data/test.txt');
