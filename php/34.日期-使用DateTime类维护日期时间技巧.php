<?php
$dateTime = new DateTime();

print_r($dateTime);

//显示时间格式
echo $dateTime->format('Y-m-d H:i:s');