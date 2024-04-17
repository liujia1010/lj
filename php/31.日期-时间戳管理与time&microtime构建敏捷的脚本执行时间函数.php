<?php

// 时间戳，从1970-1-1日起算,按秒计算
echo time();

echo '<hr/>';
// 计算微秒,传入参数true，显示小数形式

echo microtime();
echo "<hr/>";
echo microtime(true);

// 写一个计算脚本执行时间的方法
function runtime($start = null,$end = null){
	static $cache = []; // 静态变量只声明一次
	if(is_null($start)){
		return $cache;
	}elseif(is_null($end)){
		return $cache[$start] = microtime(true);
	}else{
		$end = $cache[$end]??microtime(true);
		return round($end - $cache[$start],2);
	}
}


runtime('for');

for ($i=0; $i < 20000000; $i++) { 
	// code...
	$i++;
}
runtime('for_end');
echo "<hr/>";
echo runtime('for','for_end');

print_r(runtime());
echo "<hr/>";

function runtime2(string $start=null,string $end=null)
{
	// code...
	static $cache =[]; // 执行计算时间缓存数组
	// 如果$start为空，说明需要返回缓存数组
	if(is_null($start)){
		return $cache;
	}elseif(is_null($end)){
		//如果执行结束标志为空，那么说明时间计算开始
		$cache[$start] = microtime(true);
	}else{
		// 如果执行开始时间或执行结束时间都不为空，说明，要计算执行时间差额
		$end = $cache[$end]??microtime(true);
		return $end - $cache[$start];
	}
}

runtime2('for');

for ($i=0; $i < 50000000; $i++) { 
	// code...
	$i++;
}
runtime2('for_end');
echo "<hr/>";
echo runtime2('for','for_end');

print_r(runtime2());
echo "<hr/>";
print_r(runtime());