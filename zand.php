<?php
// namespace MyPackadge;

class Sample{
 public $test = 'AJ';
 public function here(){
 	return $this->test;
 }
 public function getSample(){
 	return new self();
 }
 public function __get($property){
 	return $this->property;
 	}
 public function __set($property, $value){
 	$this->property = $value;
 }
 public function __toString(){
return $this->here();
 }
}
$s = new Sample();
// $s->t;
$s->set = 're';
echo $s;
// --------
$st = function($s){
	return $s->set;
};
echo $st($s);
$arr = [];
echo "<pre>";
$arr = get_declared_classes(); // all standart php core classes
echo count($arr);
echo "</pre>";
//------------------
if($s instanceof Sample){
	echo "It's an object of Sample";
}
echo Sample::class; // from 5.5 php, with full namespace
//-----------------------------
if(is_callable([$s, "getSample"])){
	echo 'GetSample is method in Sample class';
} else {
	echo "Wrong!";
}
//-------------------
// $prod_class = new ReflectionClass('Sample');
// Reflection::export($prod_class);
// echo $prod_class->getName();
//------------------
class Worker{
	private $promice = true;
private static $isDoneCount = 0;
public function work(){
	if ($this->getPromice()){
$dayCount = $this->isDoneCount();
do{
	$dayCount++;
} while(date('d m Y') =< '01 06 2016')
	}
	if($dayCount){
		return "Job is done";
	}
}
public function getPromice(){
	return $this->promice;
}
public function getIsDoneCount(){
	return self::$isDoneCount;
}
}
$worker = new Worker();
echo $worker->getIsDoneCount();
$worker->work();




























