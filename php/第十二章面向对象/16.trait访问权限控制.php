<?php
// 多继承实现方式：使用 trait 关键字定义父类，在子类中使用  use 关键字引入,多继承会产生继承冲突，如果不同的类中有同名方法，就需要指定类的优先级

// 优先级关系：从基类继承的成员会被trait插入的成员覆盖，当前类的成员可以覆盖trait类的成员，同名方法调用优先级—— 当前类成员> trait插入的成员> 基类成员
// 
// 如果两个 trait 类中存在同名方法，会出现Trait method save has not been applied, because there are collisions with other trait methods on Topi错误，两个trait类中出现同名方法，就需要处理同名方法,示例如下
// 
/**
 * 通用类Common
 */
class Common{
	public function save($value='')
	{
		return __METHOD__;
	}
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

	public function save($value='')
	{
		return __METHOD__;
	}
}

/**
 * 主题类Topic
 * 如果想要同时继承日志类Log和评论类Comment，则这两类在创建时必须使用 trait 关键字创建，在主题类中使用use 关键字引入
 */
class Topic extends Common{
	// use Log,Comment;
	// 有同名方法的处理，使用 insteadof 关键字
	use Log,Comment{
		Log::save insteadof Comment; // 使用 insteadof 把Log类的save方法替换 Comment的save 方法
		// Comment::save as  ;// 如果想要继续使用Comment中的save方法，使用as 关键字，重命名
		Comment::save as protected send;		// 使用 as 重命名时可以重新定义方法的权限
	}
}

$topic = new Topic();
echo $topic -> save();
echo '<hr/>';
echo $topic -> send();