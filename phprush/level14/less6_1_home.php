<?php

/* ������� �������
�������� �������(Factory) �� ������������ ���(Hen)
1. ������� ����� Hen
1.1. ������� ��� �����������
1.2. �������� � ����� ����������� �����  int getCountOfEggsPerMonth()
1.3. �������� � ����� ����� String getDescription(), ������� ���������� ������ "� ������."

2. ������� ����� RussianHen, ������� ����������� �� Hen
3. ������� ����� UkrainianHen, ������� ����������� �� Hen
4. ������� ����� MoldovanHen, ������� ����������� �� Hen
5. ������� ����� BelarusianHen, ������� ����������� �� Hen

6. � ������ �� ������� ��������� ������� �������� ���� ���������� ������ getCountOfEggsPerMonth.
������ ������ ���������� ���������� ��� � ����� �� ������� ���� �����.

7. � ������ �� ������� ��������� ������� �������� ���� ���������� ������ getDescription.
������ ������ ���������� ������ ����:
<getDescription() ������������� ������>  + <" ��� ������ - SSSSS. � ���� N ��� � �����.">
��� SSSSS - �������� ������
��� N - ���������� ��� � �����

8. � ������ HenFactory ����������� ������ getHen, ������� ���������� ��������������� ������ ������ ���
9. ��� ��������� ���� ������ ������ ���� � ��������� ������
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