<?php
$filename = '../b.txt';

// 打开文件，r代表的模式是开启文件，并把文件指针定位到文件开头
// 如果读取的文件是二进制文件，使用rb模式
$handle = fopen($filename, 'r');  // 返回值是一个资源类型
// var_dump($handle);

// 如果想要读取文件中的内容，使用fread 函数，参数是文件资源以及读取的大小
echo '<hr/>';

echo fread($handle,20);
echo '<hr/>';
// 如果读取文件的全部内容，就要现获取文件大小，使用方法 filesize() 参数是文件
echo fread($handle,filesize($filename));
// 注意：如果fread连续使用，每次读取完相同文件，文件指针会留在最后读取的位置，下次使用时，会在当前位置继续往后读

// 如果想要控制指针的位置，可以使用 fseek(文件资源指针，希望读取的位置-数字)函数;
fseek($handle,3);
echo '<hr/>';
echo fread($handle,filesize($filename));