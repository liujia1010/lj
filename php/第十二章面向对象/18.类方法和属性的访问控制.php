<?php
// 在定义类时，有些方法和属性不被继承的类使用，就需要使用 访问控制，关键字包括： private（私有的） protected (受保护的)  public（公共的）

class Notify{
	private function send(){ // 私有方法
		return 'notify send';
	}

	public function sendMsg(){
		var_dump($this);
		return $this->send();
	}

	protected function get(){ // 受保护的方法
		return 'notify get';
	}

	public function getTitle(){
		return 'notify getTitle';
	}

}


class Demo extends Notify{
	public function get(){
		return parent::get();
	}
}
$demo = new Demo();
echo $demo->getTitle(); // 公共方法可以在外部调用

echo '<hr/>';

echo $demo->get(); // 受保护的方法可以在子类中调用

echo '<hr/>';

echo $demo->sendMsg();  // 私有方法职能父类自己调用