<?php
$fruits = [
    'apple' => 'りんご',
    'orange' => 'オレンジ',
    'grape' => 'ぶどう',
    'tomato' => 'トマト'
];
?>
<dl>
    <?php foreach ($fruits as $english => $japanese):?>
        <dt><?php echo $english; ?></dt>
        <dt><?php echo $japanese; ?></dt>
    <?php endforeach ?>
</dl>