<?php
$arr = ['刘嘉','知行'];

list($a,$b) = $arr;

echo $b;

echo "<hr/>";

$user = ['name'=>'刘嘉','page'=>'知行'];

list('name'=>$name,'page'=>$ag) = $user;

echo $ag;

echo "<hr/>";

list(,$page) = $arr;
echo $page;

echo "<hr/>";

$students = [
	['name'=>'胡八一','age'=>31],
	['name'=>'王胖子','age'=>30],
	['name'=>'杨小姐','age'=>29]
];

while (list('name'=>$name,'age'=>$age) = current($students)) {
	// code...
	echo "name:{$name},age:{$age} <br/>";
	next($students);
}

echo "<hr/>";

foreach ($students as $key => $student) {
	// code...
	print_r($student);
}
