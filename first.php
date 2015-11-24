<?php
//strrchr() возвращает участок строки, следующий
// за указанным параметром (точкой в нашем случае),
// после чего substr() отрезает первый символ - точку.
$img = 'file.jpg';
function getExtension($filename) {
    return substr(strrchr($filename, '.'), 1);
}
echo getExtension($img);
//работает быстрее всех