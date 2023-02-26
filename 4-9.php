<?php
require('4-9_include.php');
// require '4-9_include.php';
//requireはファイルが存在しなかった場合にそれ以降のコードを処理しない。
//includeはファイルがなかったときでもそこから先を読み込む。

// require_onceは一度良い出されている場合にはもう呼び出さない。
include '4-9_include.php';

echo sum(10, 20);
