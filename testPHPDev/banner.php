<?php
$ip = $_SERVER['REMOTE_ADDR'];
$time = $_SERVER['REQUEST_TIME'];
$user_agent = $_SERVER['HTTP_USER_AGENT'];

$db = new PDO('mysql:host=localhost;port=3306;dbname=banner', $user, $password);
$st = $db->prepare('INSERT INTO banner (ip, time, user_agent, banner_show) VALUES (?,?,?,?)');
$st->execute([$ip, $time, $user_agent, $banner_show]);
?>
<img src="banner.php" alt=มเํํๅ๐ border=0 />
