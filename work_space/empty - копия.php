<?php
//$first = select sum(views) from gallery where author = "needAuthor"
//$second = select count(filename) from gallery where author = "needAuthor"
//$max = max($first/$second);
/*
 *SELECT
max(
    (select sum(views) from gallery where author = "needAuthor")/(select count(filename) from gallery where author = "needAuthor")
)
FROM test;
*/
// $arr = [
// ['name' => 'John', 'age' => '21'],
// ['name' => 'Kevin', 'age' => '23'],
// ['name' => 'Frank', 'age' => '11'],
// ];
// foreach($arr as $a){
// 	if($a['age'] > 15){
// 		$filter[] = $a;
// 	}
	
// }
// print_r($filter);