<?php

/**
 * 消息通知类
 */
class Notify{
	protected $messageName = '设置信息';
	protected $credit = 3; //积分值
	public final function message(){ // final 关键字可以禁止子类重写该方法
		return '<span>发送通知消息,奖励'.$this->credit().'</span>';
	}

	public function setting()
	{
		return $this -> messageName;
	}
	/**
	 * 返回奖励的积分
	 * @return [type]
	 */
	public function credit(){
		return $this->credit;
	}
}

/**
 * 用户类
 */
class User extends Notify{           // 使用extends关键继承父类


	public function register(){
		return $this->message(); // 可以在子类中使用父类的方法
	}

	// 当需要积分不是3的时候，我们可以重写父类方法
	public function credit(){
		return 10;
	}
}

/**
 * 用户评论类
 */
class Comment extends Notify{
	protected $credit = 20; // 如果同名属性，子类会使用自己的属性，不会在继承父类属性
	public function send(){
		return $this->setting(); //子类中不能直接调用父类的受保护的属性，可以通过调用父类方法调用父类属性
	}
	public function say(){
		return $this->message();
	}
}

echo (new User())->register();
echo '<hr/>';
echo (new Comment())->send();
echo '<hr/>';
echo (new Comment())->say();
