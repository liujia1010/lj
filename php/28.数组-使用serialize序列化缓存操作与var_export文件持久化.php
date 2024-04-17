<?php
$database = include './database.php';
print_r($database);
echo "<hr/>";

// var_export() 方法：第一个参数传递需要变量，第二个参数是否有返回值，true有返回值

$config = var_export($database,true);

echo $config;

//内容写入文件
file_put_contents('database_serialize.php', '<?php return '.$config.';');

$database = include './database_serialize.php';
echo "<hr/>";
print_r($database);

echo '序列化操作';
echo "<hr/>";

$database = include './database.php';

$serialize_database = serialize($database);

print_r($serialize_database);

$database = unserialize($serialize_database);
echo "<hr/>";

print_r($database);