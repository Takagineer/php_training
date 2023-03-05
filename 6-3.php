<?php
$file = new SplFileObject('data/items,csv', 'r');

while ($file->eof() === false) {
while (!$file->eof()) {
  $item = $file->fgetcsv();
  echo $item[0], "\n";
}


//フラグ処理
// $file->setFlags(SplFileObject::READ_CSV);
// foreach ($file as $item) {
//   echo $item[1], "\n";
// }
