<!DOCTYPE html>
<html>
<head>
	<title>php</title>
</head>
<body>
	<?php
require 'lynda_9.php';
$errors = array();
$username = trim("");
	if (!has_presence($username)){
		$errors['username'] = "Username can not be empty!";
	}
	?>
<?php
// print_r($errors);
echo form_errors($errors);
?>
	<body>
</html>