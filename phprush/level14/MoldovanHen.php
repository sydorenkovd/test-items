<?php
/**
 * Created by PhpStorm.
 * User: Виктор Сидоренко
 * Date: 15.02.2016
 * Time: 20:11
 */
require 'Hen.php';

class MoldovanHen extends Hen
{
    public $number = null;
    public $typeOf = '1';

    public function __construct($number, $typeOf)
    {
        $this->number = $number;
        $this->typeOf = $typeOf;
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