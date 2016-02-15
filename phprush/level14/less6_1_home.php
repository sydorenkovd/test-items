<?php

/* Куриная фабрика
Написать Фабрику(Factory) по производству кур(Hen)
1. Создать класс Hen
1.1. Сделать его абстрактным
1.2. Добавить в класс абстрактный метод  int getCountOfEggsPerMonth()
1.3. Добавить в класс метод String getDescription(), который возвращает строку "Я курица."

2. Создать класс RussianHen, который наследуется от Hen
3. Создать класс UkrainianHen, который наследуется от Hen
4. Создать класс MoldovanHen, который наследуется от Hen
5. Создать класс BelarusianHen, который наследуется от Hen

6. В каждом из четырех последних классов написать свою реализацию метода getCountOfEggsPerMonth.
Методы должны возвращать количество яиц в месяц от данного типа куриц.

7. В каждом из четырех последних классов написать свою реализацию метода getDescription.
Методы должны возвращать строку вида:
<getDescription() родительского класса>  + <" Моя страна - SSSSS. Я несу N яиц в месяц.">
где SSSSS - название страны
где N - количество яиц в месяц

8. В классе HenFactory реализовать меетод getHen, который возвращает соответствующую стране породу кур
9. Все созданные вами классы должны быть в отдельных файлах
*/

abstract class Hen
{
    abstract public function getCountOfEggsPerMonth($number, $typeOf);

    public function getDescription()
    {
        return 'I am a chiken';
    }
}

class RussianHen extends Hen
{
    public $number = null;
    public $typeOf = '1';

    public function __construct($number, $typeOf)
    {
        $number = $this->number;
        $typeOf = $this->typeOf;
    }

    public function getCountOfEggsPerMonth($number = null, $typeOf = 1)
    {
        return $number * $typeOf;
    }

    public function getDescription()
    {
        $parent = parent::getDescription();
        $class = new ReflectionClass($this);
        $classname = $class->getName();
        $cname = substr_replace($classname, '', -3);
        return $parent . " my country - {$cname} and I've been producing "
        . $this->getCountOfEggsPerMonth($this->number, $this->typeOf)
        . " eggs per month";
    }
}

class UkrainianHen extends Hen
{
    public $number = null;
    public $typeOf = '1';

    public function __construct($number, $typeOf)
    {
        $number = $this->number;
        $typeOf = $this->typeOf;
    }

    public function getCountOfEggsPerMonth($number = null, $typeOf = 1)
    {
        return $number * $typeOf;
    }

    public function getDescription()
    {
        $parent = parent::getDescription();
        $class = new ReflectionClass($this);
        $classname = $class->getName();
        $cname = substr_replace($classname, '', -3);
        return $parent . " my country - {$cname} and I've been producing "
        . $this->getCountOfEggsPerMonth($this->number, $this->typeOf)
        . " eggs per month";
    }
}

class MoldovanHen extends Hen
{
    public $number = null;
    public $typeOf = '1';

    public function __construct($number, $typeOf)
    {
        $number = $this->number;
        $typeOf = $this->typeOf;
    }

    public function getCountOfEggsPerMonth($number = null, $typeOf = 1)
    {
        return $number * $typeOf;
    }

    public function getDescription()
    {
        $parent = parent::getDescription();
        $class = new ReflectionClass($this);
        $classname = $class->getName();
        $cname = substr_replace($classname, '', -3);
        return $parent . " my country - {$cname} and I've been producing "
        . $this->getCountOfEggsPerMonth($this->number, $this->typeOf)
        . " eggs per month";
    }
}

class BelarussianHen extends Hen
{
    public $number = null;
    public $typeOf = '1';

    public function __construct($number, $typeOf)
    {
        $this->number = $number;
        $this->typeOf = $typeOf;
    }

    public function getCountOfEggsPerMonth($number, $typeOf)
    {
        return $number * $typeOf;
    }

    public function getDescription()
    {
        $parent = parent::getDescription();
        $class = new ReflectionClass($this);
        $classname = $class->getName();
        $cname = substr_replace($classname, '', -4);
        return $parent . " my country - {$cname} and I've been producing "
        . $this->getCountOfEggsPerMonth($this->number, $this->typeOf)
        . " eggs per month";
    }
}