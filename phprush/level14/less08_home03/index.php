<?php
/* User, Looser, Coder and Proger
1. ������ [� �����] � ���������� ��������� ����� (������).
������(�����) ����� ���� ������: "user", "looser", "coder", "proger".
���� �������, ����� ������ �� ��������� �� � ����� �� ���� ���������.

2. ��� ������ ��������� ������ �����:
2.1. ������� ��������������� ������ [�� Person.java], ��������, ��� ������ "user" ����� ������� ������ ������ User.
2.2. �������� ���� ������ � ����� doWork.

3. �������� ���������� ������ doWork, �������:
3.1. �������� ����� live() � ����������� ������, ���� ���� ������ (person) ����� ��� User.
3.2. �������� ����� doNothing(), ���� person ����� ��� Looser.
3.3. �������� ����� coding(), ���� person ����� ��� Coder.
3.4. �������� ����� enjoy(), ���� person ����� ��� Proger.
*/
//class Dean{}
/*
 * don't have a shit have it's gonna be realized in php
 */
?>
    <form action="index.php" method="post">
        <label>Lb<input type="text" name="list" id="text"></label

        <p>Input: "user", "looser", "coder", "proger".</p>
        <input type="submit" value="check">
    </form>
<?
$first = $_POST['list'];
//echo $first;
$obj = new $first();
var_dump($obj);
?>