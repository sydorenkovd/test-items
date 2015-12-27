<?php
if (isset($_POST["submit"])){
$username = $_POST["username"];
$password = $_POST["password"];
$msg = "Log in " . $username;
} else {
$msg = "Please log in...";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>php</title>
</head>
<body>
	<?php
	echo $msg;
	?>
<form action="lynda_9.php" method="post">
	Username : <input type="text" name="username" value=""><br>
	Password : <input type="password" name="password" value=""><br>
	<input type="submit" name="submit" value="submit"><br>
</form>
	</body>
</html>