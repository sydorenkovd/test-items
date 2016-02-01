<?php

/* Dog, Cat � Mouse
1. ������� ������ Dog, Cat � Mouse.
2. ����������� ���������� � ����������� �������, �������� ���:
- ���(Cat) ����� �������������, ����� ����-�� ������ � ����� ���� ��� ������.
- ����(Mouse) ����� ������������� � ����� ���� �������.
- ������(Dog) ����� ������������� � ������ ����-��.
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