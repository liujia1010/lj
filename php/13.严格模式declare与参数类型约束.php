<?php
declare(strict_types = 1); // 设置传参类型严格约束

// 传参加上数据类型，属于参数类型约束，传递不符合类型的参数会报错
function show(int $num){
	return $num;
}

var_dump(show(2));