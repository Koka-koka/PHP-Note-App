<?php

session_start();

define("BASE_PATH", __DIR__ . '/../');

define("ROOT_URL", '/' . explode('/', $_SERVER['REQUEST_URI'])[1] . '/');

require BASE_PATH . 'Core/functions.php';

spl_autoload_register(function ($class) {

	$class = str_replace('\\', DIRECTORY_SEPARATOR, $class);

	require base_path("{$class}.php");
});

require base_path("bootstrap.php");

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$router = new \Core\Router();

$routes = require base_path('routes.php');

$router->route($uri, $method);

Core\Session::unflash();
