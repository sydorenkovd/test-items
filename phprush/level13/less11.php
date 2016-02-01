<?php

/* Репка
Сказка Репка:
1. Реализовать интерфейс RepkaItem в классе Person.
2. В классе Person реализовать метод pull(Person person), который выводит фразу типа '<name> за <person>'. Пример:
Бабка за Дедку
Дедка за Репку
3. Исправить логическую ошибку цикла в методе tell класса RepkaStory.
4. Выполнить метод main и наслаждаться сказкой!
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
        $list[0] = new Person('репка', 'репку');
        $list[1] = new Person('Бабка', 'Бабку');
        $list[2] = new Person('внучка', 'внучку');
        $list[3] = new Person('дедка', 'дедку');
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
$list[0] = new Person('репка', 'репку');
$list[1] = new Person('Бабка', 'Бабку');
$list[2] = new Person('внучка', 'внучку');
$list[3] = new Person('дедка', 'дедку');