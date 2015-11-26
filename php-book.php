<?php
//ivert array without standart function array_reverse()
    $arr = ['h', 'e', 'l','l','o'];
$reversed = [];
while (count($arr)) $reversed[] = array_pop($arr);
//otherwise
//for($i = count($arr) - 1; $i >=0; $i--) $reversed[] = $arr[$i];
//for ($i=0; $i<count($arr); $i++) array_unshift($reversed, $arr[$i]);
//foreach ($arr as $v) array_unshift($reversed, $v);
for($i = 0; $i <= count($reversed); $i++) echo $reversed[$i];
//-----------------

