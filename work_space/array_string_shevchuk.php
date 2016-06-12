<?php
$arr = [];
$arr[] = "Nick";
$arr[] = "Steve";
$arr[] = "Click";
$arr[] = "Frank";
$arrK = [
    'name' => 'Jihn',
    'surname' => 'Smith'
];
$str = '                 f               php is here';
$str = trim($str);
array_push($arr, 'Victor');
array_pop($arr);

//$res = array_map(function($n){
//   return $n . " done";
//},$arr);
//print_r($res);
print_r(array_key_exists('name',$arrK));