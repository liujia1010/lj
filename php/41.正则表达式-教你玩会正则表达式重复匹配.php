<?php
// * 代表0个或多个字符
// + 代表1个或多个字符
// ? 代表重复零次或一次
// {n} 代表重复n次
// {n,m} 代表至少重复n次，最多重复m次
$str = 'sjaldjkasdkljaskj';
$status = preg_match('/^.*$/',$str);

echo $status;
echo '<hr/>';
$str = '';
$status = preg_match('/^.+$/',$str); //代表字符串中必须存在至少一个字符

echo $status;
echo '<hr/>';

$str = '123';
$status = preg_match('/^.?$/',$str); //代表字符串中只能有0个或1个字符

echo $status;
echo '<hr/>';

$str = '123';
$status = preg_match('/^.{2}$/',$str); //代表字符串中只能2个字符

echo $status;
echo '<hr/>';

// 小案例，匹配域名操作
$preg = '/^[a-z-0-9]+\.(com|cn|net|\.cn|top)$/';
$str ='baidu.com';
echo preg_match($preg,$str);

echo '<hr/>';

$str = <<<html
	<h1>hello zhengze</h1>
html;

echo $str;

$preg = '/<h1>(.+)<\/h1>/';

echo preg_replace($preg, '<a href="https://www.baidu.com">\1</a>\0', $str);