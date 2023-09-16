<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample03</title>
</head>

<body>
    <?php $db = new mysqli('localhost:3306', 'root', 'root', 'mydb');
    //データの挿入
    $ret = $db->query('INSERT INTO memos (memo) VALUES ("PHPからのメモです")');
    if ($ret) {
        echo 'データを挿入';
    } else {
        echo $db->error;
    }

    ?>
</body>

</html>