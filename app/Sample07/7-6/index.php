<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS) ?>
  <p><?php echo $message; ?></p>
  <p><?php echo $_POST['message']; ?></p>
  <!-- ↑この記述だと、初めて値が渡ってきた際にnoticeエラーが発生する。
  そこで、filter_inputを使用すると、値が存在しない際にはそのまま処理してくれる。 -->
  <form action="" method="post">
    <label for="message">メッセージ</label>
    <input type="text" name="message" id="message">
    <button type="submit">送信</button>
  </form>
</body>

</html>