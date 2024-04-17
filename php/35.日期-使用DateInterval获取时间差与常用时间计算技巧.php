<?php
$dateTime1 = new DateTime();
$dateTime2 = new DateTime('2019-9-2 12:30:23');

$interval = $dateTime1 -> diff($dateTime2);

$format = '距离你的生日还有 %Y年%m个月%d天%h小时，共有%R%a天';

echo $interval->format($format);


echo '<hr/>';

$dateTime = new DateTime();
$interval = new DateInterval('P2DT2H5M');
echo $dateTime->format('Y-m-d H:i:s');

echo '<hr/>';

$dateTime->add($interval);

echo $dateTime->format('Y-m-d H:i:s');

$dateTime->sub($interval);
