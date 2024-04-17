<?php
function mobile($tel){
	return substr($tel, 0,-4);
}

echo mobile('18266130700');
echo "<hr/>";

// 传址参数
function show(&$var){
	$var++;
	echo $var;
}

$var = 1;
show($var);
echo "<hr/>";

echo $var;
echo "<hr/>";
// 点语法，适用于变量值数量不确定
function sum(...$vars){
	print_r($vars);
	return array_sum($vars);
}

print_r(sum(1,2,3,4,5,5));
