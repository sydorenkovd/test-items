<?php

/* Singleton
����� �������� ���������� (��������� �������(������) Singleton), ���� ��������� ������� ����� ���� ������ ������ ����.

����������� Singleton pattern:
1. ������ ����� Singleton � ��������� �����.
2. ������ � ���� ����������� ����� getInstance().
3. ����� getInstance ������ ���������� ���� � ��� �� ������ ������ Singleton ��� ����� ������ ������ getInstance.
4. �������, ����� ������� ����� ��������� �������� ������ �������� ����� ������.
5. ������ ��� ������������ � ������ Singleton ���������� (private).

6. � ����� ������ ���� ����������� ������� ������ (��������� ������) ������ ��������� ����� getInstance.
*/

class Singleton
{
    private static $instance;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
            echo 1;
            return self::$instance;
        }
    }
}

Singleton::getInstance();
Singleton::getInstance();
Singleton::getInstance();