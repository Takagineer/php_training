<?php

// エスケープシーケンス
// 不具合を起こすような文字列を逃す処理

echo 'I\'m JAPANESE';
echo "I am \"JAPANESE\"";

echo "\n改行を入れる";
echo '\n改行を入れる';

//ダブルクオテーションは改行を考慮するが、シングルクオテーションはそれを考慮しない。
// 余計なものまで考慮する可能性もあるため、シングルクオテーションを使用するのが無難