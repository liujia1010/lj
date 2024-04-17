<?php

// 使用？实现禁止贪婪的案例
$str = '<h1>知行</h1><h1>php</h1>';
$preg = '/<h1>.*<\/h1>/';
$preg2 = '/<h1>.*?<\/h1>/'; 

// 使用U 修饰符 也可以实现禁止贪婪的效果 
$preg3 = '/<h1>.*<\/h1>/U'; 
preg_match_all($preg, $str, $matches);
preg_match_all($preg2, $str, $matches2);
preg_match_all($preg3, $str, $matches3);

print_r($matches);
print_r($matches2);
print_r($matches3);

// 使用 ^ 符号限定字符串以什么开始
// 验证邮箱
$email = "1212@#@#@212312312@qq.com";

$preg_email = '/^\w+@[\w\.]+/';
// 使用 A 修饰符能起到限定以什么开始的效果
$preg_email2 = '/\w+@[\w\.]+/A';
preg_match_all($preg_email,$email,$matches4);
preg_match_all($preg_email2,$email,$matches5);

print_r($matches4);
print_r($matches5);

$str = "1a\n";
// 使用 $ 符号作为结尾符，但是不能识别换行符
$preg = '/\d+a$/';

// 使用 D 修饰符能起到 明确结尾不能是回车
$preg2 = '/\d+a$/D';

preg_match_all($preg, $str, $matches);


print_r($matches);

preg_match_all($preg2, $str, $matches);
print_r($matches);