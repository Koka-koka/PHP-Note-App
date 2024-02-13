<?php
$config = require base_path('config.php');

$router->get(ROOT_URL, 'controllers/index.php');
$router->get(ROOT_URL . 'about', 'controllers/about.php');
$router->get(ROOT_URL . 'contact', 'controllers/contact.php');

$router->get(ROOT_URL . 'notes', 'controllers/notes/index.php');
$router->get(ROOT_URL . 'note', 'controllers/notes/show.php');
$router->get(ROOT_URL . 'notes/create', 'controllers/notes/create.php');

$router->delete(ROOT_URL . 'note', 'controllers/notes/destroy.php');
$router->post(ROOT_URL . 'notes', 'controllers/notes/store.php');


