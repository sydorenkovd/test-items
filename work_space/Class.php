<?php
require_once 'Interface.php';
class Real implements Inter{
    public function real(){
        return 'real';
    }
}
$d = new Real();
echo $d->real();