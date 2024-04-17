<?php

// md5() 将每个字符串生成唯一的32位16进制字符串

echo md5('admin888'.'666');

// explode() 根据某个字符，拆分字符串为数组
echo "<hr/>";

print_r(explode('.', 'liujia.com'));

echo "<hr/>";

// implode() 用某个字符，将数组链接起来

echo implode(':', ['email','1595040768@qq.com']);

// substr(string, start) 截断字符串
echo "<hr/>";

$file = 'user.jpg';
echo substr($file, 0, -4);
echo "<hr/>";
$ad = '大家可以跟我学编程';

echo mb_substr($ad,0,5,'utf-8');