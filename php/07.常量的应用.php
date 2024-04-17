<?php

//常量,用方法定义
//常量只能被定义一次
define('NAME', '刘嘉');


// defined(name) 检测常量是否存在
echo defined("NAME");
echo '<hr/>';
echo NAME;

echo '<hr/>';
//常量,用声明定义
const URL = 'liujia.com';

echo URL;

echo '<hr/>';

// get_defined_constants() 得到所有的系统常量
print_r(get_defined_constants(true));



