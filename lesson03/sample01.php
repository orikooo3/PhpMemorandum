<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sample01</title>
</head>

<body>
    <?php
    $db = new mysqli('localhost:3306', 'root', 'root', 'mydb');
    echo 'DBに接続';
    ?>
</body>

</html>