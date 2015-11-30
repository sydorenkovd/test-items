<?php

class News extends AbstractModel
{
    protected $data = [];

    public function __set($k, $v)
    {
        $this->data[$k] = $v;
    }

    public function __get($k)
    {
        return $this->data[$k];
    }
    public static function getAll()
    {
        $DBH = DB::connect();
        return $DBH->query('SELECT * FROM ' . static::$table);
    }
    public static function getOne($id){
        $DBH = DB::connect();
        return $DBH->query('SELECT * FROM ' . static::$table . ' WHERE id = ' . $id);
    }

    public function insert()
    {
        $cols = array_keys($this->data);
        $val = array_values($this->data);
        $ins = [];
        $date = [];
        foreach ($cols as $col) {
            $ins[] = ':' . $col;
        }
        $sql = 'INSERT INTO ' . static::$table . '(' . implode(', ', $cols) . ') VALUES(?,?)';
        $DBH = DB::connect();
        $STH = $DBH->prepare($sql);
        return $STH->execute($val);
    }
}
/*
 * ClassHinting
 * ��������� ������ ������ ������ News
 * public function foo(News $model){
 * }
 * ��������� ������ models which implements interface IModel
 * public function far(IModel $model){
 * }
 */