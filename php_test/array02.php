<?php
$array_member1 = [
    'name' => '鈴木',
    'height' => 170,
    'hobby' => 'サッカー'
];

echo '<pre>';
var_dump($array_member1);
echo '</pre>';
echo $array_member1 ['name'] . 'です。' . '<br>';

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
    echo '<pre>';
    var_dump($array_member2);
    echo '</pre>';
    echo $array_member2['鈴木']['height'];
?>