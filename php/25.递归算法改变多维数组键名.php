<?php
$database = include('database.php');
print_r($database);

function hd_array_change_key_case(array $array,int $type=CASE_UPPER):array
{
	foreach($array as $key=> $arr):
		$action = $type==CASE_UPPER? 'strtoupper' : 'strtolower';
		unset($array[$key]);
		$array[$action($key)] = is_array($arr)?hd_array_change_key_case($arr):$arr;

	endforeach;
	return $array;
}
echo "<hr/>";

print_r(hd_array_change_key_case($database));

