<?php

/* Dog, Cat и Mouse
1. Создать классы Dog, Cat и Mouse.
2. Реализовать интерфейсы в добавленных классах, учитывая что:
- Кот(Cat) может передвигаться, может кого-то съесть и может быть сам съеден.
- Мышь(Mouse) может передвигаться и может быть съедена.
- Собака(Dog) может передвигаться и съесть кого-то.
*/

class Dog implements Moveable, Eat
{
    public function eat()
    {
    }

    public function move()
    {
    }
}

class Cat implements Moveable, Eat, Eatenable
{
    public function eat()
    {
    }

    public function eaten()
    {
    }

    public function move()
    {
    }
}

class Mouse implements Moveable, Eatenable
{
    public function eaten()
    {
    }

    public function move()
    {
    }
}

interface Moveable
{
    function move();
}

interface Eatenable
{
    function eaten();
}

interface Eat
{
    function eat();
}