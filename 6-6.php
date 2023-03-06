<?php
try {
  $file = new SplFileObject('notfound/log.txt', 'w');
} catch (Exception $exception) {
  // } catch (RuntimeException $exception) {//これでも動く
  // echo 'ファイルを作成できませんでした';
  // exit();

  die('ファイルを作成できませんでした');
  //メッセージをechoしてプログラムを強制終了するという意味
}
$file->fwrite('ログ');
