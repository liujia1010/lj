<?php
// 选择修饰符 |

$str = 'http://www.aaa.com , htp://www.xxx.com';

$preg = "/(http|htp)\:/"; // 正则匹配http或者htp

$replace = 'https:';

echo preg_replace($preg,$replace,$str); // 根据正则表达式，替换成指定字符

echo '<hr/>';

$str = '刘嘉 zhixing.com 知行 zxcode.com';
$preg = '/(zhixing|zxcode)(\.com)/';
$replace = '<a href="http://www.\1\2">\0</a>';
echo preg_replace($preg,$replace,$str);