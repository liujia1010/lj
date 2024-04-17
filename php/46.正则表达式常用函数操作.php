<?php

$str = '1@2@3';
// 匹配一个符合条件的字符串,常用于验证
echo preg_match('/\d+/', $str);

// 匹配所有符合条件的字符串
preg_match_all('/\d+/', $str, $matches);
echo '<hr/>';
print_r($matches);

// 使用正则分割字符串,返回分割后的数组
$arr = preg_split('/@|#/', $str);
echo '<hr/>';
print_r($arr);

echo '<hr/>';

// 替换函数
echo preg_replace('/@|#/', '-', $str);

// 替换回调函数
echo '<hr/>';
echo preg_replace_callback('/\d+/', function($matchs){
	// 闭包函数的参数是 每个符合条件的数组
	if($matchs[0] > 2){
		return $matchs[0] + 200;
	}
	return $matchs[0];
}, $str);
