<?php
class Sample{
 public $test = 'AJ';
 public function here(){
 	return $this->test;
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