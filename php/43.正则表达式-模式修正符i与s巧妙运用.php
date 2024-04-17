<?php
// i 表示不区分大小写
$str = '<h1>你好</h1><H2>php</h2>';
$preg = '/<h([1-6])>.*?<\/h\1>/i';
$replace = '';
preg_match_all($preg,$str,$arr);

print_r($arr);

// s 将字符串视为单行，换行符看作普通字符，使"."可以匹配所有字符
$str = '<h1>你好
php
</h1>

';
$preg = '/<h1>(.*?)<\/h1>/is';
$replace = '\1';
echo preg_replace($preg,$replace,$str);