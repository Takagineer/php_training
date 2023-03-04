<?php
//以下は古い例。functionベースのコードは関連性がわかりにくい。地続き的に記述している感じ。

//タイムゾーンに注意。GMT+9時間。以下はアジアの例。
// date_default_timezone_set('Asia/Tokyo');
// $today = time(); //timeスタンプ
// $format_date = date('Y/m/d', $today); //日付を書式化

// echo $today . "\n";
// echo $format_date;

//以下はオブジェクト指向ベースの記述。$todayを使用していく、ということがわかりやすい。
$today = new DateTime();
$today->setTimezone(new DateTimeZone('Asia/Tokyo'));
$format_date = $today->format('Y/m/d');
echo $format_date;
