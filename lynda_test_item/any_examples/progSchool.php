<?php
$calc = $_POST['calc'];
$first = $_POST['first'];
$second = $_POST['second'];
if (($second && $first) || ($first && $second) == "0"){
switch ($calc) {
	case '1':
		$result = $first + $second;
		break;
	case '2':
		$result = $first - $second;
		break;
		case '3':
		$result = $first * $second;
		break;
		case '4':
		if (!$second){
			$result = "No null";
		} else{
		$result = $first / $second;
	}
		break;
	default:
		echo "";
		break;
	}
}
?>
<!doctype html>
<html>
<head>
	<title>Prog school first level</title>
	<meta charset = "utf-8">
</head>
<body>

<form action="progSchool.php" method="POST">
	<input type="number" name="first">
	<select name="calc">
	<option value="1">+</option>
	<option value="2">-</option>
	<option value="3">*</option>
	<option value="4">/</option>
	</select><br>
	<input type="number" name="second"><br>
	<button type="submit" name="submit">=</button>
	</form>
<?php
 print $result;
 ?>
</body>
</html>