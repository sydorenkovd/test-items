<?php
//spl_autoload_register();
require '../Core/Router.php';
$router = new Router();

$router->add('', ['controller' => 'Home', 'action' => 'index']);
$router->add('posts', ['controller' => 'Posts', 'action' => 'index']);
$router->add('posts/new', ['controller' => 'Posts', 'action' => 'new']);

$url = $_SERVER['QUERY_STRING'];
if ($router->match($url)) {
    echo '<pre>';
    var_dump($router->getRoutes());
    echo '</pre>';
} else {
    echo 'no routes found for URL ' . $url;
}