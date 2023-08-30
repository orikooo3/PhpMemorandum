<?php

/**
 * function : 機能または関数
 * 組み込み関数 : 準備してある関数
 * ユーザ定義関数 ; 自由に作れる関数
 */
/*
function test(){
    処理
    rerurn 戻り値;
}
 */

//インプット引数なし
//アウトレット戻り値なし
function test()
{
    //処理
    echo 'テスト';
}
test();
?>

<?php
// インプット引数あり
// アウトプット戻り値なし

$comment = 'コメント';

function getComment($string)
{
    echo $string; //ローカル変数 : スコープはメソッドの中
}
getComment($comment);
?>

<?php
// インプット引数なし
// アウトプット戻り値あり

function getNumberOfComment()
{
    return 5;
}

$commentNumber = getNumberOfComment();

echo getNumberOfComment();

echo $commentNumber;
?>

<?php
// 引数2つ
// 戻り値あり

function sumPrice($int1, $int2)
{
    $int3 = $int1 + $int2;
    return $int3;
}

$total = sumPrice(5, 5);

echo $total . '<br>';

echo sumPrice(10, 10) . '<br>';
?>