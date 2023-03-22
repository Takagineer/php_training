<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="submit.php" method="post">
    <label for="message">メッセージ</label>
    <!-- ここのlabelのfoはinputフィールドのidと一致させる必要がある -->
    <input type="text" name="message" id="message">
    <!-- name属性は同じ名前を重複させることができないので注意 -->
    <button type="submit">送信</button>
    <!-- enterキーでも送信できるが書いておく方がよい -->
  </form>
</body>

</html>