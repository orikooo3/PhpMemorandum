<?php
$array_member1 = [
    'name' => '鈴木',
    'height' => 170,
    'hobby' => 'サッカー'
];

//バリューのみ表示
foreach($array_member1 as $member){
    echo $member . '<br>';
}

//キーとバリューそれぞれ表示
foreach($array_member1 as $key => $value ){
    echo $key . 'は' . $value . 'です' . '<br>';
}

$array_member2 = [
    '鈴木' => [
        'height' => 170,
        'hobby' => 'サッカー'
    ],
    '本田' => [
        'height' => 185,
        'hobby' => '野球'
    ]
    ];

foreach($array_member2 as $member_1){
    foreach($member_1 as $member => $value){
        echo $member . 'は' . $value . 'です' . '<br>';
    }
}
?>