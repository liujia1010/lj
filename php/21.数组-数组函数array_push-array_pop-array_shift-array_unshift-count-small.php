<?php
$students = [
	['name'=>'胡八一','age'=>31],
	['name'=>'王胖子','age'=>30],
	['name'=>'杨小姐','age'=>29]
];

$user = ['name'=>'大金牙','age'=>31];

print_r($user);

array_push($user, '金子');  // 从数组最后面插入一条数据

print_r($user);

$u = array_pop($user); // 从数组的最后面删除一条数据，返回删除的数据
print_r($user);

echo "<hr/>";

array_unshift($user, '玉器'); // 从数组头部插入一条数据

print_r($user);
echo "<hr/>";
array_shift($user); // 从数组头部删除一条数据
print_r($user);
