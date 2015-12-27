<?php
function redirect_to($new_location){
	header("Location: " . $new_location);
	exit;
}
$log_in = $_GET["log_in"];
if ($log_in == 1){
	redirect_to("lynda_2.php");
} else {
	redirect_to("lynda_.php");
}

	// header("HTTP 1.1/ 404 Not Found");
?>
<!DOCTYPE html>
<html>
<head>
	<title>php</title>
</head>
<body>
	<?php
$linktext = "<Click & there";
	?>
<a href=""><?php echo htmlspecialchars($linktext);?></a>

	</body>
</html>