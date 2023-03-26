<?php
setcookie('account', '', time() - 1);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // アカウント情報の受信
  $account = filter_input(INPUT_POST, 'account');
  setcookie('account', $account, time() + 3600);
  echo $account;
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="" method="post">
    <label for="account">アカウント名</label>
    <?php $save_cookie = $_COOKIE['account']; ?>
    <?php $save_cookie = filter_input(INPUT_COOKIE, 'account'); ?>
    <input type="text" name="account" id="account" value="<?php echo htmlspecialchars($save_cookie); ?>">
    <button type="submit">ログイン</button>
  </form>
</body>

</html>