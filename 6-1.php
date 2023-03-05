<?php
//standard php library
// $file = new SplFileObject('data/log.txt', 'w');
$file = new SplFileObject('data/log.txt', 'a');
//
$today = new DateTIme(); //今の時刻
$today->setTimezone(new DateTimeZone('Asia/Tokyo'));
$file->fwrite($today->format('Y-m-d H:i:s') . "\n");
