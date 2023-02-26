<?php
function make_list($list, $head = '・', $middle = '：')
{
  foreach ($list as $key => $value) {
    echo $head, $key, $middle, $value, "\n";
  }
}

$pref = [
  'ehime' => '愛媛県',
  'kagawa' => '香川県',
  'kouchi' => '高知県',
  'tokushima' => '徳島県',
];

make_list($pref, '→');
make_list($pref, '→', '/');
