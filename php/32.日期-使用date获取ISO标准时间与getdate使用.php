<?php

date_default_timezone_set("PRC");

// date方法，第一个参数传入时间的显示形式，第二个参数传入想要转换的时间戳
echo date('Y-m-d H:i:s');

echo "<hr/>";

print_r(getdate());

// 输出
// Array
// (
//     [seconds] => 42
//     [minutes] => 7
//     [hours] => 11
//     [mday] => 26
//     [wday] => 2
//     [mon] => 3
//     [year] => 2024
//     [yday] => 85
//     [weekday] => Tuesday
//     [month] => March
//     [0] => 1711422462
// )
