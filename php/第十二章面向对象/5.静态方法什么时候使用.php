<?php
/**
 * $this 是指向实例化的对象
 * 类实例化对象以后，每个对象都有自己的属性，单独存储，但是类方法是存储在一个内存空间中公用
 * 类实例化后，可以定义静态属性，存在在静态属性内存块中，所有的对象共用
 */
class User
{

	protected $name; // 类属性
	protected static $classname = '实习班'; //用static关键字定义静态属性
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

	public function printClass(){
		return "我是通过类名调用静态属性输出的：".User::$classname."+我是通过self关键字调用静态属性输出的：".self::$classname; // 静态属性可以使用类名加双冒号的方式调用，但是类名如果发生变化，调用静态属性的类名也需要更换。所有类提供了一个self的关键字代表类本身
	}

	public function setName(string $name){
		$this->name = $name;
	}

	public function getName(){
		return $this->name;
	}

	// 定义一个静态方法
	public static function geyClassName(){
		return self::$classname; //静态方法只能由类本身调用，对象不能使用，所以在静态方法中调用静态属性
	}
}

$obj = new User(); // 声明一个类


var_dump($obj);

echo '<hr/>';
$obj -> setName('测试');
echo $obj -> say();
echo '<hr/>';
echo $obj -> geyClassName();
echo '<hr/>';

$lisi = new User();
var_dump($lisi);
$lisi -> setName('李四');
echo $lisi -> say();
echo '<hr/>';
echo $lisi -> printClass();