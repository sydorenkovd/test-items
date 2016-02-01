<?php

/* �����
������ �����:
1. ����������� ��������� RepkaItem � ������ Person.
2. � ������ Person ����������� ����� pull(Person person), ������� ������� ����� ���� '<name> �� <person>'. ������:
����� �� �����
����� �� �����
3. ��������� ���������� ������ ����� � ������ tell ������ RepkaStory.
4. ��������� ����� main � ������������ �������!
*/

class Person implements RepkaItem
{
    public $name;
    public $namePadezh;

    public function __construct($name, $namePadezh)
    {
        $this->name = $name;
        $this->namePadezh = $namePadezh;
    }

    public function getNamePadezh()
    {
        return $this->namePadezh;
    }

    public function pull(Person $person)
    {
        echo $person->name . " behind " . $person->getNamePadezh();
    }
}

class RepkaStory
{
    public static function tell(Person $person)
    {
        $list = [];
        $list[0] = new Person('�����', '�����');
        $list[1] = new Person('�����', '�����');
        $list[2] = new Person('������', '������');
        $list[3] = new Person('�����', '�����');
        for ($i = count($list); $i > 0; $i--) {
            $person->name = $list[$i];
            $person->namePadezh = $list[$i - 1];
        }
    }
}

interface RepkaItem
{
    function getNamePadezh();
}

$list = [];
$list[0] = new Person('�����', '�����');
$list[1] = new Person('�����', '�����');
$list[2] = new Person('������', '������');
$list[3] = new Person('�����', '�����');