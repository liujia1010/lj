<?php
//  m 让字符串按照多行处理

$str = <<<php
#1
php1323
!#2
正则表达式

#3
模式修正符m


php;

$preg = '/^#\d+/'; //不加m修正符，只能匹配第一行
echo preg_replace($preg,'',$str);

echo '<hr/>';

$preg = '/^#\d+/m'; // 增加m修正符，可以匹配多行字符串
echo preg_replace($preg,'',$str);

echo '<hr/>';

$str = 'abc';
$preg = '/^a\w+#这是一个正则练习/';
echo preg_replace($preg,'',$str);

echo '<hr/>';

$str = 'abc';
$preg = '/^a\w+#这是一个正则练习/x'; //忽略空白及#符号，根据此特性可以添加正则注释
echo preg_replace($preg,'',$str);