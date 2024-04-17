<?php
$database = include('database.php');
print_r($database);

function hd_array_change_value_case(array $array,int $case=CASE_UPPER):array
{
	foreach($array as $key=> $arr):
		$action = $case==CASE_UPPER? 'strtoupper' : 'strtolower';
		unset($array[$key]);
		$array[$key] = is_array($arr)?hd_array_change_value_case($arr):$action($arr);

	endforeach;
	return $array;
}
echo "<hr/>";

print_r(hd_array_change_value_case($database));