<?php
//$content = file_get_contents(__DIR__ . '/test.json');
//var_dump(json_decode($content));
//die;
//$ob = new stdClass();
//$ob->name = 'Name';
//$ob->method = "Run";
//echo json_encode($ob);
//die;
require_once 'autoload.php';
$ctrl = isset($_GET['ctrl']) ? $_GET['ctrl'] : 'News';
$act = isset($_GET['act']) ? $_GET['act'] : 'All';
$classController = 'app\\controllers\\' . $ctrl . 'Controller';
//require __DIR__ . '/classes/DB.php';
$controller = new $classController;
$method = "action" . $act;
$controller->$method();