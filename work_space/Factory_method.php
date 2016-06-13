<?php
abstract class AppCoder{
    abstract function encode();
}
class PhpAppCoder extends AppCoder{
    public function encode(){
    return 'Encoded using php\'s instrument' . "<br>";
}
}
    abstract class Manager{
        abstract function getHead();
        abstract function getPhpCoder();
        abstract function getFoot();
}
class PhpAppManager extends Manager{
    public function getHead(){
        return 'This is header' . "<br>";
    }
    public function getPhpCoder(){
        return new PhpAppCoder();
    }
    public function getFoot(){
        return 'This is footer';
    }
}
$mgr = new PhpAppManager();
print $mgr->getHead();
print $mgr->getPhpCoder()->encode();
print $mgr->getFoot();