<!DOCTYPE html>
<html>
<head>
	<title>php</title>
</head>
<body>
	<?php $link_page = "Second link";
	$id = 2;
	$company = "Johnson & Johnson";
// while($id == 7){
// 	$id++;
// }
	?>
	<a href="lynda_3.php?id=<?php echo $id;?>&company=<?=urlencode($company);?>"><?= $link_page;?></a>

	<body>
</html>