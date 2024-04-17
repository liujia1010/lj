<?php
$database = include('database.php');
print_r($database);

function array_change_value(array $data,int $type=CASE_UPPER):array{
	array_walk_recursive($data, function(&$value,$key,$type){
		$action = $type == CASE_UPPER?'strtoupper':'strtolower';
		$value = $action($value);
	},$type);
	return $data;
}

print_r(array_change_value($database));