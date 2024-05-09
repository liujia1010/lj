<?php
/**
 * $this 是指向实例化的对象
 * 类实例化以后，每个类都有自己的属性，单独存储，但是类方法是存储在一个内存空间中公用
 */
class User
{
	protected $name; // 属性
	function __construct()
	{
		// code...
	}

	/**
	 * 说方法
	 * @return [type]
	 */
	public function say(){
		return $this->getName() . '说你好';
	}

	public function setName(string $name){
		$this->name = $name;
	}

	public function getName(){
		return $this->name;
	}
}

$obj = new User(); // 声明一个类


var_dump($obj);

echo '<hr/>';
$obj -> setName('测试');
echo $obj -> say();

echo '<hr/>';

$lisi = new User();
var_dump($lisi);
$lisi -> setName('李四');
echo $lisi -> say();