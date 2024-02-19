<?php
$config = require base_path('config.php');

$router->get(ROOT_URL, 'index.php');
$router->get(ROOT_URL . 'about', 'about.php');
$router->get(ROOT_URL . 'contact', 'contact.php');

$router->get(ROOT_URL . 'notes', 'notes/index.php')->only('auth');
$router->get(ROOT_URL . 'note', 'notes/show.php');
$router->get(ROOT_URL . 'note/create', 'notes/create.php');
$router->get(ROOT_URL . 'note/edit', 'notes/edit.php');

$router->patch(ROOT_URL . 'note', 'notes/update.php');

$router->delete(ROOT_URL . 'note', 'notes/destroy.php');
$router->post(ROOT_URL . 'notes', 'notes/store.php');

$router->get(ROOT_URL . 'register', 'registration/create.php')->only('guest');
$router->post(ROOT_URL . 'register', 'registration/store.php')->only('guest');

$router->get(ROOT_URL . 'login', 'session/create.php')->only('guest');
$router->post(ROOT_URL . 'session', 'session/store.php')->only('guest');
$router->delete(ROOT_URL . 'logout', 'session/destroy.php')->only('auth');
