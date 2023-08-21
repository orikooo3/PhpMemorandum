<?php
$success = file_put_contents('data/test.txt', 'これはテストです');

if ($success !== false) {
    echo 'ファイルの読み込みが完了しました';
} else {
    echo 'ファイルの読み込みに失敗しました';
}
