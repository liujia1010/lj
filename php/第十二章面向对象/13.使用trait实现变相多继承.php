<?php
// 多继承实现方式：使用 trait 关键字定义父类，在子类中使用  use 关键字引入，示例如下

/**
 * 通用类Common
 */
class Common{

}

/**
 * Demo类
 * 通过extends关键字继承Common类
 */
class Demo extends Common{

}


trait Log{
	public function save($value='')
	{
		return __METHOD__;
	}
}

trait Comment{
	public function total(){
		return __METHOD__;
	}
}

/**
 * 主题类Topic
 * 如果想要同时继承日志类Log和评论类Comment，则这两类在创建时必须使用 trait 关键字创建，在主题类中使用use 关键字引入
 */
class Topic{
	use Log,Comment;
}

$topic = new Topic();
echo $topic -> save();