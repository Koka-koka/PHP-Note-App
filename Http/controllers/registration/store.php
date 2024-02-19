<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$email = $_POST['email'];
$password = $_POST['password'];

$errors = [];

if (!Validator::email($email)) {
	$errors['email'] = 'Please provide a valid email address';
}

if (!Validator::string($password, 7, 255)) {
	$errors['password'] = 'A password more then 7 and less then 255 characters is required *';
}

if (!empty($errors)) {
	return view("registration/create.view.php", [
		'errors' => $errors,
	]);
}

$user = $db->query('Select * from users where email = :email', [
	'email' => $email,
])->find();

if ($user) {

	header('location: ./login');
	exit();

} else {

	$db->query('INSERT INTO users(email, password) VALUES(:email, :password)', [
		'email' => $email,
		'password' => password_hash($password, PASSWORD_BCRYPT),
	]);

	login([
		'email' => $email,
	]);

	header('location: ./');

	exit();
}
