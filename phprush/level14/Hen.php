<?php

/**
 * Created by PhpStorm.
 * User: Виктор Сидоренко
 * Date: 15.02.2016
 * Time: 20:11
 */
abstract class Hen
{
    abstract public function getCountOfEggsPerMonth($number, $typeOf);

    public function getDescription()
    {
        return 'I am a chiken';
    }
}