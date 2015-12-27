<?php
	$dbhost = "localhost";
	$dbuser = "widget_cms";
	$dbpass = "secret";
	$dbname = "widget_corp";
	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	//test connection
	if(mysqli_connect_errno()){
		die("Database connection failed: " . mysqli_connect_error() . " ( " . 
			mysqli_connect_errno() . " ) ");
	}
?>
<?php
//Often there are form values from $_POST
//database query
$menu_name = "Edit me";
$position = 4;
$visible = 1;
	$query = "INSERT INTO subjects (menu_name, position, visible)
	VALUES('{$menu_name}', {$position}, {$visible})";
	$result = mysqli_query($connection, $query);
	//test if was query error
	if ($result){
	echo "Success";
	//redirect_to("somepage.php");	
	} else
	{
		die("Database failed: " . mysqli_error($connection));
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Mysqli</title>
</head>
<body>

	</body>
</html>
<?php
mysqli_close($connection);
?>