<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample21</title>
</head>

<body>
    <h2>ご予約日</h2>
    <?php $reserves = $_REQUEST['reserve']; ?>
    <ui>
        <?php foreach ($reserves as $reserve) { ?>
            <li><?php echo htmlspecialchars($reserve, ENT_QUOTES); ?></li>
        <?php } ?>
    </ui>
</body>

</html>