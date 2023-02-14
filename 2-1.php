<?php

echo '数字を入力してください';
$number = trim(fgets(STDIN));

// if ($number > 10) {
//   echo '10より大きいです';
// } else {
//   echo '10以下です';
// }

if ($number > 10) :
  echo '10より大きいです';
else :
  echo '10以下です';
endif;
