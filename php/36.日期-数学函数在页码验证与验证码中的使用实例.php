<?php
// 向上取整
echo ceil(10.2);

echo '<hr/>';

// 向下取整
echo floor(10.2);

echo '<hr/>';

// 生成验证码函数
function code(int $len = 5){
	$str = '0123456789abcdefghigklmn';
	$code = '';
	for($i = 0;$i < $len;$i++){
		// 使用strlen方法获取字符串长度，然后通过mt_rand方法获取随时数值
		$s = mt_rand(0,strlen($str)-1); 
		$code .= $str[$s];
	}
	return $code;
}

echo code();