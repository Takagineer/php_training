<?php

$color = ['白', '黒', '', '赤'];

foreach ($color as $color_name) {
  if ($color_name === '') {
    continue; //条件に一致した際にその後の処理を行う命令
    // break;//こちらは処理を終了させる。
  }
  echo $color_name, "\n";
}
