<?php
namespace app\classes;

class DB extends \PDO
{
//    private $DBH;
//    public function __construct(){
//$this->DBH = new PDO("mysql:host=localhost;dbname=test", 'root', '');
//    }
    private static $instance;
 public static function connect(){
     if (!self::$instance) {
         self::$instance = new  self("mysql:host=localhost;dbname=test", 'root', 'root');
     }
     return self::$instance;
}
//    public function query($sql, $params = []){
//        $STH = $this->DBH->prepare($sql);
//        $STH->execute($params);
//        return $STH->fetchAll(PDO::FETCH_OBJ);
//    }
}