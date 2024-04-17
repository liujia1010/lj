<?php
$str = '12345A6';
echo preg_match('/\d+?/', $str , $matches); // 函数第三个参数是匹配返回的数组
print_r($matches);
echo '<hr/>';
echo preg_match('/\d+/', $str , $matches); // 函数第三个参数是匹配返回的数组
print_r($matches);

echo '<hr/>';

$str = '<h1>你好</h1><h1>php</h1>';
$preg = '/<h1>(.+)<\/h1>/';
$preg2 = '/<h1>(.+?)<\/h1>/';

echo preg_replace($preg,'<h1><em>\1</em></h1>',$str);
echo '<hr/>';
echo preg_replace($preg2,'<h1><em>\1</em></h1>',$str);

echo '<hr/>';
preg_match_all($preg2,$str,$arr);
print_r($arr);