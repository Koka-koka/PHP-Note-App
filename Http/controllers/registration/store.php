<?php

use Core\Authenticator;
use Core\Registration;
use Http\Forms\LoginForm;

$form = LoginForm::validate($attributes = [
	'email' => $_POST['email'],
	'password' => $_POST['password'],

]);

$register = new Registration();

$auth = new Authenticator();

$registered = $register->attempt($attributes['email'], $attributes['password']);

if (!$registered) {

	$form->error('user', 'User already exists')->throw();

} else {

	$auth->login([
		'email' => $attributes['email'],
		'password' => $attributes['password'],
	]);

	redirect('./');

}
