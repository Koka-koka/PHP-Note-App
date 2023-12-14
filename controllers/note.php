<?php

$config = require ('config.php');
$db = new Database($config['database']);

$heading = "My Note";
$currentUserId = 7;

$note = $db->query('select * from notes where id = :id',[	
	'id' => $_GET['id']
])->find_or_fail();

authorize($note['user_id'] === $currentUserId);

require ("./views/note.view.php");