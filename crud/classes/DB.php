<?php
class DB{
//    private $DBH;
//    public function __construct(){
//$this->DBH = new PDO("mysql:host=localhost;dbname=test", 'root', '');
//    }
 public static function connect(){
   return new PDO("mysql:host=localhost;dbname=test", 'root', '');
}
//    public function query($sql, $params = []){
//        $STH = $this->DBH->prepare($sql);
//        $STH->execute($params);
//        return $STH->fetchAll(PDO::FETCH_OBJ);
//    }
}