<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <p>
    <?php if (isset($_POST)) : ?>
      <?php echo htmlspecialchars($_POST['message'], ENT_QUOTES | ENT_HTML5); ?>
      <!-- <?php echo htmlspecialchars($_REQUEST['message'], ENT_QUOTES | ENT_HTML5); ?> -->
    <?php endif; ?>
  </p>

</body>

</html>