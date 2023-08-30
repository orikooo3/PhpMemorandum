<?php
/**switch
switch(変数){
    case 1:
    case 2:
    case 3:
}
// switch : ==
// 型も等しい : ===
//if文のがわかりやすい
*/

$data = 'あいうえお';

switch($data){
    case $data === 1:
        echo '1です';
        break;
    case 2:
        echo '2です';
        break;
    case 'あいうえお':
        echo $data . 'です';
        break;
    default:
        echo '1~3ではありません';
}