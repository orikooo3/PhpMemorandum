<?php

/**
 *  スーパーグローバル変数 : 連想配列
 * php 9種類
 */
if (!empty($_GET)) {
    echo '<pre>';
    var_dump($_GET);
    echo '</pre>';
}

$pageFlag = 0;
?>

<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php if ($pageFlag === 0) : ?>
        入力画面
    <?php endif; ?>

    <?php if ($pageFlag === 1) : ?>
        確認画面
    <?php endif; ?>

    <?php if ($pageFlag === 2) : ?>
        完了画面
    <?php endif; ?>

    <form method="GET" action="input.php">
        氏名
        <input type="text" name="your_name">
        <br>
        <input type="checkbox" name="sports[]" value="野球">野球
        <input type="checkbox" name="sports[]" value="サッカー">サッカー
        <input type="checkbox" name="sports[]" value="バスケ">バスケ
        <input type="submit" value="送信">
    </form>
</body>

</html>