<?php
echo '色を選択してください(1:黒,2:白,3:緑)';

// $color = trim(fgets(STDIN));
$color = (int)trim(fgets(STDIN));

//キーボードから入力する数字は文字列になる
// if ($color === 1) {
//   echo '黒を選択しましたね';
// } elseif ($color === 2) {
//   echo '白を選択しましたね';
// } elseif ($color === 3) {
//   echo '緑を選択しましたね';
// } else {
//   echo '1~3で選択してください';
// }

switch ($color) {
  case 1:
    echo '黒を選択しましたね';
    break;
  case 2:
    echo '白を選択しましたね';
    break;
  case 3:
    echo '緑を選択しましたね';
    break;
}
//breakは省略しても動作する。ただし、書かないと、その次の行の処理まで進んでしまう。