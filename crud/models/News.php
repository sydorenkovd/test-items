<?php
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
    public static function getOne($id){
        $DBH = DB::connect();
    return $DBH->query('SELECT * FROM `news` WHERE id = ' . $id);
    }
}