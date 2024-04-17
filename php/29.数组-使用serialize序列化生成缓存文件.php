<?php 
$database = include './database.php';
print_r($database);
// 生成缓存和提取缓存的方法
function cache(string $name,array $arr = null){
	$file = 'cache'.DIRECTORY_SEPARATOR.md5($name).'.php';

	if($arr == null){
		if(is_file($file)){
			return unserialize(file_get_contents($file));
		}else{
			return "没有该缓存文件!";
		}
	}else{
		file_put_contents($file, serialize($arr));
	}
}

echo "<hr/>";
cache('database',$database);

print_r(cache('database'));


