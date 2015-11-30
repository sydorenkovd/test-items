<?php


abstract class AbstractModel
{
//    public $id;
//    public $title;
//    public $test;
    protected static $table = "news";

    public static function getTable()
    {
        return static::$table;
    }
//    public static function findAll(){
//        $class = get_called_class();
//        $sql = 'SELECT * FROM ' . static::getTable();
//        $db = new DB();
//        $db->query($sql);
//    }
//    public static function findOne()
//    {
//        $sql = 'SELECT * FROM ' . static::getTable() . 'WHERE id = :id';
//        $db = new DB();
//        $id = $_GET['id'];
//        $db->query($sql, $id);
//    }
}