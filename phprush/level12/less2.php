<?php

/* ��� �� ����, � ������ �� ������
�������������� ����� getChild � ������� Cat(���) � Dog(������), ����� ��� �������� ����, � ������ � ������.
*/

class Cat
{
    public static function getChirld()
    {
        return new Cat();
    }
}

class Dog
{
    public static function getChirld()
    {
        return new Dog();
    }
}

Cat::getChirld();
Dog::getChirld();