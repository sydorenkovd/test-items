<?php
//�������� ��� ���, ������� ������������!
// ����� ��� �� �������� ����������� �����, ������� � ����� ������� ��� �� ��������
//��� ������ �� ������� ������� "�����"
try {
    $DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
}
catch(PDOException $e) {
    echo $e->getMessage();
}
$STH = $DBH->query('SELECT SUM(`on_stock`) FROM `products` WHERE `category` = "'.$category.'"');
while($row = $STH->fetch()) {
    echo "On_stock: " . $row->on_stock;
}