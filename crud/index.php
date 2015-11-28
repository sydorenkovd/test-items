<?php
require  __DIR__ . '/config.php';
require_once __DIR__ . '/controllers/NewsController.php';
$news = new NewsController();
$news->actionAll();