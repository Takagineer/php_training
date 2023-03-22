<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <p>現在の時刻：<?php echo date('H:i:s'); ?>です。</p>
  <?php echo '<h1>見出し</h1>' ?>
  <?php echo htmlspecialchars('htmlの見出しは<h1>と記述する', ENT_QUOTES | ENT_HTML5); ?>
</body>

</html>