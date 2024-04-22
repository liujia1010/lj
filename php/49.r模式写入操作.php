<?php
// 如果要在r模式下，写入内容，就使用 r+ 模式
$filename = '../write_test.txt'; // 当前write_test.txt是一个空白文件

$handle = fopen($filename,'r+');

$result = fwrite($handle, '我是刚刚被写入的内容'); // 该方法第一个参数是文件指针，第二个是要写入的内容

echo $result; // 如果写入成功，返回写入的字节数，如果写入失败，返回0
echo fread($handle, filesize($filename));
// 注意： 当写入一个刚刚打开的文件，由于在r模式下，第一次打开文件的文件指针会指向文件的开头，所以直接写入会覆盖里面开头的文字。

echo '<hr/>';
// 重新打开一次文件，指针会重新移到文件开头

$handle = fopen($filename,'r+'); // 指针移到文件开头

$result = fwrite($handle,'如果你没有调整指针的位置，我会覆盖的你的文件内容幺');
echo filesize($filename);
// 因为写入以后指针位于文件结尾，所以要读取内容，需要使用 fseek(handle, offset)方法重新将指针指向文件开头位置

fseek($handle, 0);

echo fread($handle, filesize($filename));