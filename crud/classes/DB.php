<?php
class DB{

 public static function connect(){
   return new PDO("mysql:host=localhost;dbname=test", 'root', '');
}
}