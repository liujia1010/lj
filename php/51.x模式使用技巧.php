<?php

// a模式下代表追加内容,如果文件不存在，就创建文件，如果要在a模式下读取文件，就需要变成a+模式
$handle = fopen('../lj.txt','a');
fwrite($handle,'不断学习，');
