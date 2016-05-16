<?php
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
if($s instanceof Sample){
	echo "It's an object of Sample";
}