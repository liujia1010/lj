<?php
// 定界符,在定界符中可以使用任意符号，不需要转义
$str = <<<php
<h1 style="color:green">liujia.com</h1>
<script>
document.write('刘嘉');
</script>
php;
echo $str;
echo "<br/>";

// 字符串相关函数——strlen:获取字符串长度，mb_strlen:能够获取中文字符长度
$name = 'liujia.com';
echo strlen($name);
echo "<br/>";

$name = "刘嘉";
echo strlen($name);
echo "<br/>";
echo mb_strlen($name,'utf-8');

