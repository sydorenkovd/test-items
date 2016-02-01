<?php

/* Кот от кота, а собака от собаки
Переопределить метод getChild в классах Cat(кот) и Dog(собака), чтобы кот порождал кота, а собака – собаку.
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