<?php
// 定界符 /  
$status = preg_match('/a/', 'sdfsd'); //匹配字符串是否有指定字符
var_dump($status);

// 元字符
// \d 0-9 \D 除了0-9
// \w a-zA-Z0-9_   \W 除了a-zA-Z0-9以外的字符
// \s 匹配任意空白  \S 除了任意空白的所有字符
// \n 换行符 \t 制表符
$status = preg_match('/\d/','adsaas2');
var_dump($status);