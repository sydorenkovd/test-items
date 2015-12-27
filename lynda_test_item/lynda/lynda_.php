<?php
function sayName($name, $name1, $name2){
echo "Hello {$name}" . ($name1 + $name2);
}
$vasay = "Brata";
sayName($vasay, 23, 12);
function add($arg, $arg2){
	$sum = $arg + $arg2;
	return $sum;
}
echo "<br>";
$result = add(23, 23);
$result2 = add(23, $result);
echo "My bunny is " . $result2;
function subt($val1, $val2){
	$add = $val2 + $val1;
	$subt = $val2 - $val1;
	return array($add, $subt);
}
echo "<br>";
$result = subt(12, 4);
echo "Add : " . $result[0] . "<br>";
echo "Subt : " . $result[1];
echo "<br>";
list($result_add, $result_subt) = subt(12, 123); //Для извлечения сразу нескольких значений из функции
echo "Add : " . $result_add . "<br>";
echo "Subt : " . $result_subt;
echo "<hr>";
function some($room="office", $color="black"){
echo "My {$room} is {$color}.";
}
some();
echo "<hr>";
$namber = 99;
$string = "Vasay Pupkin";
$array = [$namber, $string, 12, "dfdf"];
$array_ass = [
10 => "Vasy",
2 => "Petyea",
3 => $string
];
var_dump($namber);
echo "<hr>";
var_dump($string);
echo "<hr>";
var_dump($array);
echo "<hr>";
var_dump($array_ass);
echo "<hr>";
?>
<pre>
	<?php
	// print_r(get_defined_vars());
	var_dump(debug_backtrace());
	?>
	</pre>