<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$currentUserId = $_SESSION['user']['id'];

$note = $db->query('select * from notes where id = :id', [
	'id' => $_GET['id'],
])->find_or_fail();

authorize($note['user_id'] === $currentUserId);

view("notes/edit.view.php", [
	'heading' => 'Edit note',
	'note' => $note,
	'errors' => [],
]);