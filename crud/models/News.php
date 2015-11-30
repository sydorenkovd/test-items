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
/*
 * ClassHinting
 * принимает только модели класса News
 * public function foo(News $model){
 * }
 * принимает только models which implements interface IModel
 * public function far(IModel $model){
 * }
 */