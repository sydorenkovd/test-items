<?php
//strrchr() ���������� ������� ������, ���������
// �� ��������� ���������� (������ � ����� ������),
// ����� ���� substr() �������� ������ ������ - �����.
$img = 'file.jpg';
function getExtension($filename) {
    return substr(strrchr($filename, '.'), 1);
}
echo getExtension($img);
//�������� ������� ����