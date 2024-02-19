<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$errors = [];

if (!Validator::string($_POST['body'], 1, 1000)) {
	$errors['body'] = 'A body more then 0 and less then 1000 characters is required *';
}

if (!empty($errors)) {
	return view("notes/create.view.php", [
		'heading' => 'Create Note',
		'errors' => $errors,
	]);
}

$currentUserId = $_SESSION['user']['id'];

$db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)', [
	'body' => $_POST['body'],
	'user_id' => $currentUserId,
]);

header('location: ./notes');