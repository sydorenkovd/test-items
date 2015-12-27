<?php

?>
<?php
$calc = $_POST['calc'];
$first = $_POST['first'];
$second = $_POST['second'];
$result;
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
		$result = $first / $second;
		break;
	default:
		echo "Undefined value";
		break;
?>