<?php
spl_autoload_register();
/* Куриная фабрика
Написать Фабрику(Factory) по производству кур(Hen)
1. Создать класс Hen
1.1. Сделать его абстрактным
1.2. Добавить в класс абстрактный метод  int getCountOfEggsPerMonth()
1.3. Добавить в класс метод String getDescription(), который возвращает строку "Я курица."

2. Создать класс RussianHen, который наследуется от Hen
3. Создать класс UkrainianHen, который наследуется от Hen
4. Создать класс MoldovanHen, который наследуется от Hen
5. Создать класс BelarusianHen, который наследуется от Hen

6. В каждом из четырех последних классов написать свою реализацию метода getCountOfEggsPerMonth.
Методы должны возвращать количество яиц в месяц от данного типа куриц.

7. В каждом из четырех последних классов написать свою реализацию метода getDescription.
Методы должны возвращать строку вида:
<getDescription() родительского класса>  + <" Моя страна - SSSSS. Я несу N яиц в месяц.">
где SSSSS - название страны
где N - количество яиц в месяц

8. В классе HenFactory реализовать меетод getHen, который возвращает соответствующую стране породу кур
9. Все созданные вами классы должны быть в отдельных файлах
*/

class HenFactory
{
    public function getHen($class = '', $number = null, $typeOf = 1)
    {
        switch ($class) {
            case 'Russia':
                return new RussianHen($number, $typeOf);
                break;
            case 'Ukraine':
                return new UkrainianHen($number, $typeOf);
                break;
            case 'Moldova':
                return new MoldovanHen($number, $typeOf);
                break;
            case 'Belarussia':
                return new BelarussianHen($number, $typeOf);
                break;
            default :
                return 'No such country';
        }
    }
}

$fabric = new HenFactory();
$russia = $fabric->getHen('Russia', 12, 2);
echo $russia->getDescription();

