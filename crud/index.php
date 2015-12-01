<?php
require_once 'autoload.php';
$ctrl = isset($_GET['ctrl']) ? $_GET['ctrl'] : 'News';
$act = isset($_GET['act']) ? $_GET['act'] : 'All';
$classController = 'app\\controllers\\' . $ctrl . 'Controller';
//require __DIR__ . '/classes/DB.php';
$controller = new $classController;
$method = "action" . $act;
$controller->$method();