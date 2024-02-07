<?php

$config = require ('config.php');

require 'Validator.php';

$db = new Database($config['database']);

$heading = "Create Note";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	$errors = [];

	if ($validator::string($_POST['body'], 1, 1000)) {
		$errors['body'] = 'A body less then 1000 characters is required *';
	}	


	if (empty($errors)) {
		$db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)', [
		'body' => $_POST['body'],
		'user_id' => 1,
		]);
	}
}

require ("./views/note-create.view.php");