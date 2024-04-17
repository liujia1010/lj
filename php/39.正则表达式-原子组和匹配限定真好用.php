<?php

// 原子组() 原子表[] (12) [12]
$status = preg_match('/[12]/',1);
echo $status;
echo '<hr/>';

$status = preg_match('/12/',12);
var_dump($status);

echo '<hr/>';

$str = '官网 xxx.com,技术支持 ccc.com,百度 baidu.com';
$preg = "/(\.)(com)/";

echo preg_replace($preg, '\1<span style="color:red">\2</span>', $str);
echo '<hr/>';
echo preg_replace($preg, '\1<span style="color:red">\1\2</span>', $str);

echo '<hr/>';
// ^ 代表起始 $代表结尾 ^12$ 代表字符串与12完全匹配
$status = preg_match('/^12$/','12');
echo $status;

echo '<hr/>';

// 首字母必须大写匹配
$status = preg_match('/^[A-Z]/','Aaa');
echo $status;



