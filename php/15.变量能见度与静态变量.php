<?php
// 静态变量只有在第一次调用函数的时候声明一次
function sum(int ...$num):int
{
	static $count = 0;
	return $count += array_sum($num);
}

echo sum(1,2,3);
echo '<hr/>';
echo sum(1,2,3);