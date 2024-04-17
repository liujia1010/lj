<?php
// PRC Asia/chongqing  Asia/shanghai Asia/urumqi
// 设置时区-动态设置时区

date_default_timezone_set('PRC');
// 获取时区
echo date_default_timezone_get();
echo '<hr/>';
// date获取当前时间
echo date('Y-m-d H:i:s');