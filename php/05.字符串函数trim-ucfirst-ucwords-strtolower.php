<?php


$string = ' liujia.com ';
echo strlen($string);

echo "<hr/>";

// trim() 函数去除两端字符串

echo strlen(trim($string));

echo "<hr/>";

echo strlen(trim($string,' moc'));
echo "<hr/>";
// strtolower() 函数字符串转小写
echo strtolower("HDcms");
echo "<hr/>";

// ucfirst() 函数，单词首字母大写
echo ucfirst('word');
echo "<hr/>";

// ucwords() 函数，所有单词首字母大写
echo ucwords('hello world');

echo "<hr/>";

echo ucwords('hello|world','|');
