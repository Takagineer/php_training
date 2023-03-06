<?php
$items = [
  ['PHP入門', 1500],
  ['JavaScript入門', 2000],
  ['Go入門', 3000]
];
$file = new SplFileObject('data/items.csv', 'w');
// $file->fputcsv($items);

foreach ($items as $item) {
  $file->fputcsv($item);
}
