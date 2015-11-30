<?php
require_once 'autoload.php';
$ctrl = isset($_GET['ctrl']) ? $_GET['ctrl'] : 'News';
$act = isset($_GET['act']) ? $_GET['act'] : 'All';
$classController = $ctrl . 'Controller';
//require __DIR__ . '/classes/DB.php';
require_once __DIR__ . '/controllers/'. $classController . '.php';
$controller = new $classController;
$method = "action" . $act;
$controller->$method();