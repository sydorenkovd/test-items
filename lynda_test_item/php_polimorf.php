<?php
abstract class Animal {
    abstract  function talk();
}

class Cat extends Animal {
    function talk(){
     return "Meow!"; 
 }
}

class Dog extends Animal {
    function talk() { return "Woof!"; }
}

class MyClass {

    public static function write(Animal $a) {
        echo $a->talk();
    }
}
$myclass = new MyClass();
$myclass->write(new Cat);
// вывовдит Мяу, и в зависимости от передаваемого обьекта можно варировать функционалом