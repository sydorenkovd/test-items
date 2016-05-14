<?php
class First{
	public static $str = 'f';
	public function say(){
		return self::$str;
	}
}
class Second extends First{
	public static $str = 's';
	// public function say(){
	// 	return static::$str;
	// }
}
$f = new Second();
echo $f->say();