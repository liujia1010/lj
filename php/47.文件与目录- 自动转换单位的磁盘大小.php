<?php
include './function.php';
// 获取文件的总大小，系统会根据传参的目录，返回目录下文件的大小
echo disk_total_space('.');

echo '<hr/>';
echo space_total(disk_total_space('.'));

echo '<hr/>';

echo disk_free_space('.');



