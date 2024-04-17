<?php
$file = 'lj.jpg';

$file1 = 'lj.png';

$file2 = 'lj.gif';

$ext = trim(strrchr($file, '.'),'.');

$action = strtolower($ext);

function jpg(){
	return 'jpg function';
}

function png(){
	return 'png function';
}

echo $file;
echo $action();

echo "<hr/>";
echo $action($file1);
echo "<hr/>";

echo $action($file2);

