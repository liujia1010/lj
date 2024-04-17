<?php
//阶乘
function recursive($num){
	if($num == 1){
		return $num;
	}
	return $num*recursive($num -1);
} 

echo recursive(5);