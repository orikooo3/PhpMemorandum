<?php
/* for文
for(初期値;繰り返し条件;繰り返し時処理){
    処理
}
*/
// continue,break
for($i = 0; $i < 10; $i++){
    if($i === 5){
        //break;
        break;
    }
    echo $i ;
}

echo '<br>';

for($i = 0; $i < 10; $i++){
    if($i === 5){
        //continue;
        continue;
        break;
    }
    echo $i ;
}
?>

<?php
/*while
while(){
    処理
}
*/
$j = 0;
while($j < 5){
    echo $j;
}

/*do while
do{echo $k;}
while($k < 5);
*/
$k = 0;
do{echo $k;}
while($k < 5);


/**
 * for : 繰り返す数が決まっていらら
 * while : 繰り返す数が決まっていなかったら
 */