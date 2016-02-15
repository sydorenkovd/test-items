<?php
spl_autoload_register();
/* ������� �������
�������� �������(Factory) �� ������������ ���(Hen)
1. ������� ����� Hen
1.1. ������� ��� �����������
1.2. �������� � ����� ����������� �����  int getCountOfEggsPerMonth()
1.3. �������� � ����� ����� String getDescription(), ������� ���������� ������ "� ������."

2. ������� ����� RussianHen, ������� ����������� �� Hen
3. ������� ����� UkrainianHen, ������� ����������� �� Hen
4. ������� ����� MoldovanHen, ������� ����������� �� Hen
5. ������� ����� BelarusianHen, ������� ����������� �� Hen

6. � ������ �� ������� ��������� ������� �������� ���� ���������� ������ getCountOfEggsPerMonth.
������ ������ ���������� ���������� ��� � ����� �� ������� ���� �����.

7. � ������ �� ������� ��������� ������� �������� ���� ���������� ������ getDescription.
������ ������ ���������� ������ ����:
<getDescription() ������������� ������>  + <" ��� ������ - SSSSS. � ���� N ��� � �����.">
��� SSSSS - �������� ������
��� N - ���������� ��� � �����

8. � ������ HenFactory ����������� ������ getHen, ������� ���������� ��������������� ������ ������ ���
9. ��� ��������� ���� ������ ������ ���� � ��������� ������
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

