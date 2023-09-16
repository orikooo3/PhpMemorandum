<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample02</title>
</head>

<body>
    <?php
    $db = new mysqli('localhost:3306', 'root', 'root', 'mydb');
    //ASで別名を付けることでわかりやすくなる
    $records = $db->query('SELECT COUNT(*) AS cnt FROM my_items');
    if($records){
        while($record = $records -> fetch_assoc()){
            echo $record['cnt'].'<br>';
        }
    }else{
        echo $db -> error;
    }
    ?>
</body>

</html>