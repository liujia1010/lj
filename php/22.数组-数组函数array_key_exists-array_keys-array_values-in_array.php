<?php
$allowImageType = ['jpeg'=>2000000,'jpg'=>20000,'png'=>5000];

$file = 'lj.txt';

$ext = strtolower(substr(strchr($file,'.'), 1));

echo $ext;
echo "<hr/>";

if(!array_key_exists($ext,$allowImageType)){
	echo "wrong";
}else{
	echo "success";
}
array_key_exists('jpeg', $allowImageType); //检测键值是否存在

echo "<hr/>";

echo in_array(600, $allowImageType);

echo "<hr/>";

print_r(array_keys($allowImageType));  // 提取所有键值，返回键值数组