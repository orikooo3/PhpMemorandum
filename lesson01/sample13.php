<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Site Title</title>
</head>
<body>
    3,000円の物から、100円値引きした場合、
    <?php
    echo floor(100 / 3000 * 100) . '割引きです。' . '<br>';

    echo ceil(3.33) . '<br>';
    echo round(3.4, 1) . '<br>';
    ?>
</body>

</html>