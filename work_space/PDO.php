<?php
require 'pdo_config.php';

$dsn = "mysql:host=$host;dbname=$db";
$pdo = new PDO($dsn, $user, $password);
//$stmt = $pdo->prepare('SELECT `name` FROM users WHERE email = ?');
//$stmt->execute([$_GET['email']]);
//foreach ($stmt as $row)
//{
//    echo $row['name'] . "\n";
//}
// FETCH_LAZY:
//$stmt = $pdo->prepare('SELECT * FROM users WHERE email = ?');
//$stmt->execute([$_GET['email']]);
//while ($row = $stmt->fetch(PDO::FETCH_LAZY))
//{
//    echo $row->address;
//}
