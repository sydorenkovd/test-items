<?php

/* CleverMan и SmartGirl
1. Добавь интерфейсы Secretary и Boss к классам CleverMan и SmartGirl. По одному на каждый. Подумай, кому какой.
2. Унаследуй  интерфейсы Secretary и Boss от интерфейсов Person и Workable так,
чтобы все методы у классов CleverMan и SmartGirl оказались объявленными в каком-то интерфейсе.
*/

class CleverMan implements Person
{
    public function amPerson()
    {
        return "I am a person";
    }
}

class SmartGirl implements Secretary
{
    public function extraWork()
    {
        return "More work, more salary";
    }
}

interface Secretary extends Workable
{
}

/*
 * for some reason it's not gonna be work in php
 */

interface Workable
{
    function extraWork();
}

interface Person
{
    function amPerson();
}

$c = new CleverMan();
echo $c->amPerson();