<?php

/* CleverMan � SmartGirl
1. ������ ���������� Secretary � Boss � ������� CleverMan � SmartGirl. �� ������ �� ������. �������, ���� �����.
2. ���������  ���������� Secretary � Boss �� ����������� Person � Workable ���,
����� ��� ������ � ������� CleverMan � SmartGirl ��������� ������������ � �����-�� ����������.
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