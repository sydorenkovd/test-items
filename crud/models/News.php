<?php
require_once  __DIR__ . '/../config.php';
class News
{
    public $id;
    public $title;
    public $test;

    public static function getAll()
    {
        $DBH = DB::connect();

        return $DBH->query('SELECT * FROM `news`');


    }
}