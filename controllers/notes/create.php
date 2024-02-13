<?php

use Core\Database;
use Core\Validator;

$config = require base_path('config.php');
$db = new Database($config['database']);

$errors = [];
$notice = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	if (!Validator::string($_POST['body'], 1, 1000)) {
		$errors['body'] = 'A body more then 0 and less then 1000 characters is required *';
	}	


	if (empty($errors)) {
		$db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)', [
		'body' => $_POST['body'],
		'user_id' => 1,
		]);

		$notice = 'Note created successfully';
	}
}

view("notes/create.view.php", [
    'heading' => 'Create Note',
    'errors' => $errors,
    'notice' => $notice
]);