<?php

if(file_exists("../write_test.txt")){
	//如果write_test.txt文件存在
	//用r读模式打开文件
	$handle = fopen("../write_test.txt", 'r');
	echo fread($handle, filesize("../write_test.txt"));
}

// fopen在w模式下，如果文件不存在，就会创建一个新文件，如果文件存在，会把文件内的内容都删掉
// w模式下只有写操作，如果需要读就用w+模式，如果需要操作图片w+b
$handle = fopen('../lj.txt','w+');
fwrite($handle, '学习编程');
fseek($handle,0); // 重置资源指针指向文件开头，因为文件在写入模式下，资源指针在文件末尾
echo '<hr/>';
echo fread($handle,filesize('../lj.txt'));
fclose($handle); //关闭资源指针