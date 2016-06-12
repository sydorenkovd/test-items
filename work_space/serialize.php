<?php

class A {
    public $one = 1;

    public function show_one() {
        echo $this->one;
    }
}


$a = new A;
$s = serialize($a);
file_put_contents('store', $s);

$s = file_get_contents('store');
$a = unserialize($s);

$a->show_one();