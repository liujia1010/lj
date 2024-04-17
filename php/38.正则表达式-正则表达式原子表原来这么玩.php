<?php

// 原子表  [abc] 如果字符串中有任意abc的三个字符之一，表达式都通过，三个字符是独立存在的
$status = preg_match('/abc/',"bc");  //必须含有abc组合
echo $status;
echo "<hr/>";

$status = preg_match('/[abc]/','bc'); // 只需要含有abc中的任意字符
echo $status;
echo "<hr/>";

// 系统提供的原子表
// [0-9]  表示：0，1，2，3，4，5，6，7，8，9
// [a-z]  表示26个小写英文字母
// [A-Z]  表示26个大写英文字母

// . 除了换行符以外的匹配任意字符 

$status = preg_match('/./', 'sadfjkasdfj99789*()&*(&*(');
echo $status;
echo "<hr/>";
// ^ 取反,除了这些字符以外的字符
$status = preg_match('/[^71]/','71');
echo $status;

// 案例
$imgName = '123.jpg#123.png@123.gif';
$imgArr = preg_split('/[#@]/', $imgName); // 根据正则表达式切分字符串
echo "<hr/>";
print_r($imgArr);
echo "<hr/>";
echo implode('|', $imgArr);

