<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>メモの編集</title>
  </head>
  <body>
    <form action="update_do.php" method="post">
      <textarea
        name="memo"
        cols="50"
        rows="10"
        placeholder="メモを入力"
      ></textarea
      ><br />
      <button type="submit">編集する</button>
    </form>
  </body>
</html>
