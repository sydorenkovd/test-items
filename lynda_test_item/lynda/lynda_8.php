<!DOCTYPE html>
<html>
<head>
	<title>php</title>
</head>
<body>
	<?php
	function is_equal($value1, $value2){
		$output = "{$value1} == {$value2}: ";
		if($value2 == $value1)
			$output .= "true<br>";
		else 
			$output .= "false<br>";
		return $output;
	}
	echo is_equal(0, "4");
	echo is_equal(0, "vc");
	echo is_equal(0, true);
	echo is_equal(0, false);
	echo is_equal(0, 0);
	?>
	<body>
</html>