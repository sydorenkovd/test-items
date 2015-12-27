<!DOCTYPE html>
<html>
<head>
	<title>php</title>
</head>
<body>
<pre>
	<?php
	print_r($_POST);
	?>
</pre>
<br>
<?php
if (isset($_POST["submit"])){
	echo "Form was submited<br>";
if (isset($_POST["username"])){
	$username = $_POST["username"];
} else {
	echo "Not Post";
}
 if (isset($_POST["password"])) {
	$password = $_POST["password"];
}
} else {
	$username = "bob";
	$password = "12312";
}
// $username = isset($_POST["username"]) ? $_POST["username"] : "";
// $password = isset($_POST["password"]) ? $_POST["password"] : "";

echo $username . " : " . $password;
?>
	</body>
</html>