<?php

/* ��� ������, ��� �������, ��� ������, ��� ������
�������� �����, ������� ����������, ������ ������ ������ ��� ��������,
� ������� �� ����� ���� �� ��������: ������, �������, ������, ������.
*/

/* ��� �������, ��� ����, ��� �������, ��� ������������ ��������
�������� �����, ������� ����������, ������ ������ ������ ��� ��������, � ���������� ��������� � ���� �������� ��: �������, ����, �������, ������������ ��������.
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

class Pig
{

}

class Solution
{
    public function getObjectType($obj)
    {
        if ($obj instanceof Cat) {
            echo "Cat";
        } elseif ($obj instanceof Dog) {
            echo "dog";
        } elseif ($obj instanceof Bird) {
            echo "Bird";
        } elseif ($obj instanceof Lamp) {
            echo "lamp";
        } else {
            echo "Unknown animal";
        }
    }
}

$s = new Solution();
$s->getObjectType(new Cat());
$s->getObjectType(new Dog());
$s->getObjectType(new Lamp());
$s->getObjectType(new Pig());