<!DOCTYPE html>
<html>
<head>
	<title>Validation Errors</title>
</head>
<body>
<?php
$errors = array();
//присутствие
$value = trim("");
if (!isset($value) || empty($value))
	$errors['value'] = "Value can not be empty.<br>";
		//Валидация для длины строки
	$value = "fdre";
	$min = 3;
	if (strlen($value) < $min)
		echo "Error validation <br>";
	$max = 10;
	if (strlen($value) > $max)
		echo "Error validation <br>";
	//проверка валидации на тип
	$value = "fdf";
	if (!is_string($value))
		echo "Error validation3 <br>";
//включение в набор
	$value = "4";
	$set = array('1', '2', '3', '4');
	if (!in_array($value, $set))
		echo "Error validation3 <br>";
	// //проверка на формат
	// if (preg_match("/are/", "PHP is fun"))
	// 	echo "A match was found";
	// else
	// 	echo "A match was not found";
	echo "<br>";
	$value = "vasya@fff.com";
	if (!preg_match("/@/" , $value))
		echo "Error validation3 <br>";
	// print_r($errors);
?>
<?php
// if(!empty($errors)){
// 	include 'form.php';
// } else {
// 	include 'success.php';
// }
function form_errors($errors=array()){
	$output = "";
	if(!empty($errors)){
		$output .= "Please, fix the following errors: ";
		$output .= "<ul>";
		foreach ($errors as $key => $errors) {
			$output .= "<li>{$errors}</li>";
		}
		$output .= "</ul>";
	}
	return $output;
}
?>
<?php
echo form_errors($errors);
?>
	<body>
</html>