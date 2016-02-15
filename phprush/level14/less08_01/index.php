<?php
spl_autoload_register();

/* �����
1. ������� ��������� Bridge � ������� int getCarsCount().
2. ������� ������ WaterBridge � SuspensionBridge, ������� ��������� ��������� Bridge.
3. ����� getCarsCount() ������ ���������� ����� �������� ���� int.
4. ����� getCarsCount ������ ���������� ��������� �������� ��� ��������� �������.
5. � ������ Solution ������� ��������� ����� println(Bridge bridge).
6. � ������ println ������� �� ������� �������� getCarsCount() ��� ������� bridge.
7. ������ ����� � ��������� ������ ���� � ��������� ������.
*/

class Solution
{
    public function println(Bridge $bridge)
    {
        echo $bridge->getCarsCount();
    }
}
