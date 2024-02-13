<?php
$config = require base_path('config.php');

$router->get($config['domain'], 'controllers/index.php');
$router->get($config['domain'] . 'about', 'controllers/about.php');
$router->get($config['domain'] . 'contact', 'controllers/contact.php');

$router->get($config['domain'] . 'notes', 'controllers/notes/index.php');
$router->get($config['domain'] . 'note', 'controllers/notes/show.php');
$router->get($config['domain'] . 'notes/create', 'controllers/notes/create.php');

$router->delete($config['domain'] . 'note', 'controllers/notes/show.php');
$router->post($config['domain'] . 'notes/create', 'controllers/notes/create.php');


