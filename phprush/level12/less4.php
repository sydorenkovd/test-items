<?php

/* Три метода возвращают минимальное из двух переданных в него чисел
Написать public static методы: int min(int, int), long min(long, long), double min(double, double).
Каждый метод должен возвращать минимальное из двух переданных в него чисел.
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