<?php
// ()后面加上数据类型，代表函数返回值的类型，如果类型不一致，就会报错，如果要返回空——:?string,无返回值——:void
function sum():int
{
	return 2;
}

function sum2():?string
{
	return null;
}

echo sum2();