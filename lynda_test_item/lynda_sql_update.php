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
$id = (int) 2;
$menu_name = "Edit me";
$position = (int) 4;
$visible = (int) 1;
$menu_name = mysqli_real_escape_string($connection, $menu_name);
	$query = "UPDATE subjects SET ";
	$query .= "menu_name = '{$menu_name}', ";
	$query .= "position = {$position}, ";
	$query .= "visible = {$visible} ";
	$query .= "WHERE id = {$id}";
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