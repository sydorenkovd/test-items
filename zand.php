<?php
class Sample{
 public $test = 'AJ';
 public function here(){
 	echo $test;
 }
 public function __get($property){
 	return $this->property;
 	}
 public function __set($property, $value){
 	$this->property = $value;
 }
}
$s = new Sample();
// $s->t;
$s->set = 're';
echo $s->set;