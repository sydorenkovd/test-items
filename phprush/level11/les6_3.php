<?php

/* Задача по алгоритмам
Написать метод, который возвращает минимальное и максимальное числа в массиве.
*/

class Task
{
    public $array = [1, 2, 43, 432, 21, 3, 35];

    public static function getMin_and_Max($array)
    {
        if ($array != null) {
            $length = count($array);
            for ($i = 0; $i < $length; $i++) {
                for ($j = $length - 1; $j > $i; $j--) {
                    if ($array[$j] < $array[$j - 1]) {
                        $temp = $array[$j];
                        $array[$j] = $array[$j - 1];
                        $array[$j - 1] = $temp;
                    }
                }
            }

        }
    }
}