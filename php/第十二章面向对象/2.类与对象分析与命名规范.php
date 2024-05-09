<?php
/**
 * 
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
		return $this->name . '说你好';
	}

	public function setName($name){
		$this->name = $name;
	}
}

$obj = new User(); // 声明一个类


var_dump($obj);

echo '<hr/>';
$obj -> setName('测试');
echo $obj -> say();