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
//database query
	$query = "SELECT * "; 
	$query .= "FROM subjects ";
	$query .= "WHERE id = 1 ";
	$query .= "ORDER BY position ASC";
	$result = mysqli_query($connection, $query);
	//test if was query error
	if (!$result){
		die("Database failed: ");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Mysqli</title>
</head>
<body>
	<ul>
<?php
	//use return data
while ($row = mysqli_fetch_assoc($result)) {
	//output data from each row
	?>
	<li><?php echo $subjects['menu_name'] . " (" . $subjects['id'] . ")";?></li>
	<?php
}
?>
</ul>
<?php
//Отпустить возвращенные данные
mysqli_free_result($result);
?>
	</body>
</html>
<?php
mysqli_close($connection);
?>