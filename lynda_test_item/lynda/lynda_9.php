<?php
// $errors = array();
//присутствие
// $value = trim("");
function has_presence($value){
return isset($value) && $value !== "";
	// $errors['value'] = "Value can not be empty.<br>";
}
		//Валидация для длины строки
	// $value = "fdre";
	// $min = 3;
function has_max_length($value, $min, $max){
	strlen($value) >= $min;
	strlen($value) <= $max;
}
	//проверка валидации на тип
	
	// if (!is_string($value))
	// 	echo "Error validation3 <br>";
//включение в набор
	function has_inclussion_in($value, $set){
	in_array($value, $set);
}
	// //проверка на формат
	// if (preg_match("/are/", "PHP is fun"))
	// 	echo "A match was found";
	// else
	// 	echo "A match was not found";
	// echo "<br>";
	// $value = "vasya@fff.com";
	// if (!preg_match("/@/" , $value))
	// 	echo "Error validation3 <br>";
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
// echo form_errors($errors);
?>
	<body>
</html>