<?php
$students = [
	['name'=>'胡八一','age'=>31],
	['name'=>'王胖子','age'=>30],
	['name'=>'杨小姐','age'=>29]
];

// array_filter(input) 从数组用函数过滤某些数据
$filterUsers = array_filter($students,function($user){
	return $user['age'] > 30;
});

print_r($filterUsers);

echo "<hr/>";

// array_map() // 对数组中每个元素应用回调函数

$mapUsers = array_map(function($student){
	unset($student['age']);
	$student['class'] = '小说吧';
	return $student;
},$students);

print_r($mapUsers);

echo "<hr/>";

// array_values(); // 取出数组中值
print_r(array_values($students[0]));