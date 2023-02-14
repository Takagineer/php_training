<?php

echo '数字を入力してください';
$number = trim(fgets(STDIN));

if ($number > 10) {
  echo '10より大きいです';
} elseif ($number == 10) {
  echo '10です';
} else {
  echo '10より小さいです';
}
