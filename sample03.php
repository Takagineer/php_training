<?php

echo <<< EOT
こんにちは。\n
私は田中です。
日本生まれです。
よろしくお願いします。
EOT;

//↑ヒアドキュメント。ダブルクオテーションで囲った時と同じ動き。
// →\nを検知する
//これを検知しない→しングルクオテーションと同じ動きをするためには...?
// ↓nowdocを使用する

echo <<< 'EOT'
こんにちは。\n
私は田中です。
日本生まれです。
よろしくお願いします。
EOT;
