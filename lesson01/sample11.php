<?php
$conversation = [
    'hello' => 'こんにちは',
    'thank you' => 'ありがとう',
    'you are welcome' => 'どういたしまして',
];
?>
<dl>
    <?php foreach ($conversation as $english => $japanese) : ?>
        <dt><?php echo $english; ?></dt>
        <dt><?php echo $japanese; ?></dt>
    <?php endforeach ?>
</dl>

<?php
$fruits = array("apple", "banana", "orange");
foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}

?>

<?php
$student = array(
    "name" => "鈴木",
    "age" => 15,
    "grade" => "中3"
);

echo "Name: " . $student["name"]; // John
echo "Age: " . $student["age"];   // 20
echo "Grade: " . $student["grade"]; // A
?>

<?php
$money = [
    1000, 1200, 0
];

//keyを指定していない場合はvalueのみ記載する。keyは出力できない。
foreach ($money as $value) {
    echo $value . '<br>';
}
?>

<?php

//変数格納
$money = [
    "miriwo" => 1000,
    "mirimiri" => 1200,
    "mirimaru" => 0
];

//foreachを記載(keyを指定してvalueを格納したものは$key => $valueと必ず書く)
foreach ($money as $key => $value) {
    echo $key . '<br>';
    echo $value . '<br>';
}
?>