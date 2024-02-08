<?php
$config = require base_path('config.php');
return [
	$config['domain']             => 'controllers/index.php',
	$config['domain'] . 'about'   => 'controllers/about.php',
	$config['domain'] . 'notes'   => 'controllers/notes/index.php',
	$config['domain'] . 'note'    => 'controllers/notes/show.php',
	$config['domain'] . 'notes/create'  => 'controllers/notes/create.php',
	$config['domain'] . 'contact' => 'controllers/contact.php',
];