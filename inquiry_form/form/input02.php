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

if(!empty($_GET['btn_confirm'])){
    $pageFlag = 1;
}

if(!empty($_GET['btn_submit'])){
    $pageFlag = 2;
}
?>

<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php if ($pageFlag === 1) : ?>
        <form method="GET" action="input02.php">
            氏名
            <?php echo $_GET['your_name']; ?>
            <input type="text" name="your_name">
            <br>
            メールアドレス
            <?php echo $_GET['email']; ?>
            <input type="text" name="email">
            <br>
            <input type="submit" name="back" value="戻る">
            <input type="submit" name="btn_submit" value="送信する">

            <input type="hidden" name="your_name" value="<?php echo $_GET['your_name']; ?>">

            <input type="hidden" name="email" value="<?php echo $_GET['email']; ?>">

        </form>
    <?php endif; ?>

    <?php if ($pageFlag === 2) : ?>
        <form>
        <input type="submit" name="back" value="戻る">
        </form>
        送信が完了しました
    <?php endif; ?>

    <?php if ($pageFlag === 0) : ?>
        <form method="GET" action="input02.php">
            氏名
            <input type="text" name="your_name" value="<?php if(!empty($_GET['your_name'])){echo $_GET['your_name']; }?>">
            <br>
            メールアドレス
            <input type="email" name="email" value="<?php if(!empty($_GET['email'])){echo $_GET['email']; }?>">
            <br>
            <input type="submit" name="btn_confirm" value="確認する">
        </form>
    <?php endif; ?>
</body>

</html>