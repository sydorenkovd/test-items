<?php
	$name = "test";
	$value = "HELLO";
	$expire = time() + (60*60*24*7);
// setcookie($name, $value, $expire)
setcookie($name, null, time() - 3243);
	?>
<!DOCTYPE html>
<html>
<head>
	<title>Cookies</title>
</head>
<body>
<pre>
	<?php
	// if (isset($_COOKIE["test"]))
// print_r($_COOKIE);
// 	$test = $_COOKIE['test'];
// else 
// 	$test = "";
	$test = isset($_COOKIE['test']) ? $_COOKIE["test"] : "";
	echo $test;
	?>
</pre>
	<body>
</html>