<?php

/* ��� ������, ��� �������, ��� ������, ��� ������
�������� �����, ������� ����������, ������ ������ ������ ��� ��������,
� ������� �� ����� ���� �� ��������: ������, �������, ������, ������.
*/

class Cat
{

}

class Dog
{

}

class Bird
{

}

class Lamp
{

}

class Solution
{
    public function getObjectType($obj)
    {
        if ($obj instanceof Cat) {
            echo "Cat";
        }
        if ($obj instanceof Dog) {
            echo "dog";
        }
        if ($obj instanceof Bird) {
            echo "Bird";
        }
        if ($obj instanceof Lamp) {
            echo "lamp";
        }
    }
}

$s = new Solution();
$s->getObjectType(new Cat());
$s->getObjectType(new Dog());
$s->getObjectType(new Lamp());