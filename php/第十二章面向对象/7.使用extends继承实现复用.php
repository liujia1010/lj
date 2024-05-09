<?php

/**
 * 消息通知类
 */
class Notify{
	protected $messageName = '设置信息';
	public function message(){
		return '发送通知消息';
	}

	public function setting()
	{
		return $this -> messageName;
	}
}

/**
 * 用户类
 */
class User extends Notify{           // 使用extends关键继承父类
	public function register(){
		return $this->message(); // 可以在子类中使用父类的方法
	}
}

/**
 * 用户评论类
 */
class Comment extends Notify{
	public function send(){
		return $this->setting(); //子类中不能直接调用父类的受保护的属性，可以通过调用父类方法调用父类属性
	}
}

echo (new User())->register();
echo '<hr/>';
echo (new Comment())->send();
