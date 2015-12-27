<?php
	session_start();
	?>
<!DOCTYPE html>
<html>
<head>
	<title>Cookies</title>
</head>
<body>
<?php
$_SESSION['first_name'] = "Voktor";
$name = $_SESSION['first_name'];
echo $name;
?>
	<body>
</html>