<?php

/* ��� ������ ���������� ����������� �� ���� ���������� � ���� �����
�������� public static ������: int min(int, int), long min(long, long), double min(double, double).
������ ����� ������ ���������� ����������� �� ���� ���������� � ���� �����.
*/

class Solution
{
    public static function min($x, $y)
    {
        if ($x > $y) {
            return $y;
        } elseif ($x < $y) {
            return $x;
        } else {
            return 'Equals';
        }
    }
}

echo Solution::min(332, 3);