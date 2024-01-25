<?php
$config = require ('config.php');
return [
	$config['domain']             => 'controllers/index.php',
	$config['domain'] . 'about'   => 'controllers/about.php',
	$config['domain'] . 'notes'   => 'controllers/notes.php',
	$config['domain'] . 'note'    => 'controllers/note.php',
	$config['domain'] . 'notes/create'  => 'controllers/note-create.php',
	$config['domain'] . 'contact' => 'controllers/contact.php',
];